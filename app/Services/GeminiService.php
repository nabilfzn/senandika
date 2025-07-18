<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Log; // Import Log facade

class GeminiService
{
    /**
     * Core function to make calls to the Gemini API.
     * Receives an array of 'contents' (including history and system prompt if any).
     *
     * @param array $contents Array containing messages to send to Gemini (role, parts).
     * @param array $generationConfig Generation configuration (temperature, maxOutputTokens, etc.).
     * @return string Response from Gemini or an error message.
     */
    protected function callGeminiApi(array $contents, array $generationConfig = []): string
    {
        try {
            $apiKey = env('GEMINI_API_KEY');
            // Using gemini-2.0-flash as requested.
            // For more advanced multi-turn conversations, 'gemini-pro' or 'gemini-1.5-pro'
            // might offer better context handling and reasoning.
            $url = 'https://generativelanguage.googleapis.com/v1/models/gemini-2.0-flash:generateContent?key=' . $apiKey;

            $payload = [
                'contents' => $contents,
                'generationConfig' => array_merge([
                    'temperature' => 1.0, // Default temperature if not provided
                    'maxOutputTokens' => 10000, // Default max output tokens
                ], $generationConfig),
            ];

            $response = Http::post($url, $payload);

            if ($response->successful()) {
                // Ensure the JSON structure matches the Gemini API response
                return $response->json('candidates.0.content.parts.0.text') ?? 'Jawaban kosong.';
            }

            // Detailed error logging for debugging
            Log::error('Gemini API Error: ' . $response->status() . ' - ' . $response->body(), [
                'request_payload' => $payload,
                'response_body' => $response->body(),
            ]);
            return 'Gagal hubungi Gemini. Status: ' . $response->status();

        } catch (Exception $e) {
            Log::error('Gemini Service Exception: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);
            return 'Kesalahan: ' . $e->getMessage();
        }
    }

    /**
     * Generates content from a single prompt.
     * This function is not used by the mental health chatbot.
     *
     * @param string $prompt User message.
     * @return string Response from Gemini.
     */
    public function generateContent(string $prompt): string
    {
        $contents = [[
            'parts' => [['text' => $prompt]]
        ]];
        $generationConfig = [
            'temperature' => 2.0, // Higher temperature for more creativity
            'maxOutputTokens' => 2000,
        ];

        return $this->callGeminiApi($contents, $generationConfig);
    }

    /**
     * Generates a response for the mental health chatbot.
     * This function explicitly inserts the system prompt and combines it
     * with the chat history and the current user message.
     *
     * @param string $userMessage The current user message.
     * @param array $chatHistory Previous conversation history in Gemini API format (role, parts).
     * @return string Response from Gemini.
     */
    public function generateMentalHealthResponse(string $userMessage, array $chatHistory = []): string
    {
        // Explicitly insert the system prompt here.
        // This ensures the system prompt is always consistent and applied.
        $systemPrompt = [
            'role' => 'user', // 'user' role is commonly used for system instructions in Gemini API
            'parts' => [[
                'text' => "kamu berperan seperti seorang psikiater dengan jawaban yang santai dan memahami perasaan lawan bicara, hindari diagnosa medis dan jika masalahnya serius sarankan untuk ke psikolog asli, jangan jawab pertanyaan selain pertanyaan tentang kesehatan mental"
            ]]
        ];

        // Combine the system prompt, existing chat history, and the current user message
        // The system prompt is added first to ensure it sets the context from the beginning.
        $allContents = array_merge([$systemPrompt], $chatHistory, [
            ['role' => 'user', 'parts' => [['text' => $userMessage]]]
        ]);

        $generationConfig = [
            'temperature' => 0.7, // Lower temperature for consistency and empathy in a chatbot
            'maxOutputTokens' => 250,
        ];

        return $this->callGeminiApi($allContents, $generationConfig);
    }
}
