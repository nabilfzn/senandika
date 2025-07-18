<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\GeminiService;
use App\Models\Chat;
use Illuminate\Support\Facades\Log;
use Exception;

class ChatbotController extends Controller
{
    public function __construct(protected GeminiService $geminiService)
    {
    }

    public function index()
    {
        $conversations = Chat::orderBy('created_at', 'asc')->get();
        return view('chatbot.index', compact('conversations'));
    }

    public function sendMessage(Request $request): JsonResponse
    {
        try {
            $userMessage = $request->input('message');

            // Log pesan dari user
            Log::info("Pesan masuk dari user:", ['message' => $userMessage]);

            // Panggil GeminiService
            $reply = $this->geminiService->generateMentalHealthResponse($userMessage);

            // Log jawaban dari Gemini
            Log::info("Jawaban dari Gemini:", ['reply' => $reply]);

            return response()->json(['reply' => $reply]);
        } catch (Exception $e) {
            // Log error
            Log::error("Gagal menjawab pesan:", ['error' => $e->getMessage()]);

            return response()->json(['reply' => 'Maaf, terjadi kesalahan. Silakan coba lagi nanti.'], 500);
        }
    }
}