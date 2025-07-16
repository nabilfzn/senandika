<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Exception;

class GeminiService
{
    /**
     * Mengirim pesan ke Gemini API dan mendapatkan balasan dalam konteks percakapan.
     *
     * @param string $userMessage Pesan terbaru dari pengguna.
     * @param array $chatHistory Array riwayat percakapan sebelumnya.
     * Format: [['role' => 'user/model', 'parts' => [['text' => '...']]], ...]
     * @return string Balasan dari Gemini.
     */
    public function generateChatResponse(string $userMessage, array $chatHistory = []): string
    {
        try {
            $apiKey = env('GEMINI_API_KEY');
            if (empty($apiKey)) {
                // Log warning dan throw exception jika API key tidak ada
                \Log::warning('GEMINI_API_KEY is not set in .env file.');
                throw new Exception("GEMINI_API_KEY is not configured.");
            }

            $url = 'https://generativelanguage.googleapis.com/v1/models/gemini-2.0-flash:generateContent?key=' . $apiKey;


            $contents = [];

            // Bangun riwayat percakapan dari $chatHistory
            foreach ($chatHistory as $item) {
                // Pastikan setiap item memiliki 'role' dan 'parts' untuk API Gemini
                if (isset($item['role']) && isset($item['parts'])) {
                    $contents[] = [
                        'role' => $item['role'],
                        'parts' => $item['parts']
                    ];
                }
            }

            // Tambahkan pesan pengguna saat ini ke 'contents'
            // Penting: Selalu sertakan 'role: user' untuk input pengguna
            $contents[] = [
                'role' => 'user',
                'parts' => [['text' => $userMessage]]
            ];

            // Kirim request ke Gemini API
            $response = Http::timeout(60)->post($url, [ // Timeout diperpanjang
                'contents' => $contents,
                'generationConfig' => [
                    'temperature' => 0.7, // Nilai yang baik untuk percakapan
                    'maxOutputTokens' => 1024, // Batas output yang masuk akal
                    'topP' => 0.95,
                    'topK' => 40,
                ],
                // Anda bisa menambahkan 'safetySettings' di sini jika diperlukan
                // 'safetySettings' => [
                //     ['category' => 'HARM_CATEGORY_HATE_SPEECH', 'threshold' => 'BLOCK_NONE'],
                // ]
            ]);

            // Cek jika request berhasil
            if ($response->successful()) {
                // Ambil teks dari balasan Gemini
                // Gunakan null coalescing operator untuk fallback jika path tidak ada
                return $response->json('candidates.0.content.parts.0.text') ?? 'Maaf, saya tidak bisa menghasilkan balasan.';
            }

            // Jika request gagal, log detail error
            \Log::error('Gemini API Error (HTTP Status: ' . $response->status() . '): ' . $response->body());

            // Coba parse error message dari Gemini jika ada
            $errorJson = $response->json();
            $errorMessage = $errorJson['error']['message'] ?? 'Tidak ada detail error dari Gemini.';
            return 'Gagal terhubung ke AI. Status: ' . $response->status() . '. Detail: ' . $errorMessage;

        } catch (Exception $e) {
            // Log semua exception yang tidak tertangkap
            \Log::error('Gemini Service Exception: ' . $e->getMessage() . ' at ' . $e->getFile() . ':' . $e->getLine());
            return 'Terjadi kesalahan sistem: ' . $e->getMessage();
        }
    }
}






// <?php

// namespace App\Services;

// use Illuminate\Support\Facades\Http;
// use Exception; 

// class GeminiService
// {
//     public function generateContent(string $prompt)
//     {
//         try {
//             $apiKey = env('GEMINI_API_KEY');
//             $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . $apiKey;

//             $response = Http::post($url, [
//                 'contents' => [[
//                     'parts' => [['text' => $prompt]]
//                 ]],
//                 'generationConfig' => [
//                     'temperature' => 2.0,
//                     'maxOutputTokens' => 10000,
//                 ],
//             ]);

//             if ($response->successful()) {
//                 return $response->json('candidates.0.content.parts.0.text') ?? 'Jawaban kosong.';
//             }

//             return 'Gagal hubungi Gemini. Status: ' . $response->status();

//         } catch (\Exception $e) {
//             return 'Kesalahan: ' . $e->getMessage();
//         }
//     }
// }