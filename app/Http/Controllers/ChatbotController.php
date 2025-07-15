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
    // Tidak ada perubahan di sini. Dependency Injection akan otomatis
    // memberikan instance GeminiService yang baru.
    public function __construct(protected GeminiService $geminiService)
    {
    }

    /**
     * Menampilkan tampilan chatbot dan memuat riwayat percakapan.
     * Catatan: Untuk aplikasi multi-user, Anda perlu memfilter percakapan
     * berdasarkan ID pengguna yang sedang login.
     */
    public function index()
    {
        // Logika ini tetap sama.
        $conversations = Chat::orderBy('created_at', 'asc')->get();
        return view('chatbot.index', compact('conversations'));
    }

    /**
     * Menerima pesan, meminta balasan dari Gemini, menyimpan, dan mengembalikan JSON.
     */
    public function sendMessage(Request $request): JsonResponse
    {
        $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        $userMessage = $request->input('message');

        try {
            // Logika pengambilan riwayat ini sudah sempurna, tidak perlu diubah.
            // Mengambil 10 interaksi terakhir (5 pasang user-model) untuk konteks yang lebih kaya.
            $pastChats = Chat::latest()->take(10)->get()->reverse();

            $chatHistory = [];
            foreach ($pastChats as $chat) {
                // Membangun riwayat sesuai format yang dibutuhkan Gemini
                if (!empty($chat->user_message)) {
                    $chatHistory[] = ['role' => 'user', 'parts' => [['text' => $chat->user_message]]];
                }
                if (!empty($chat->bot_response)) {
                    $chatHistory[] = ['role' => 'model', 'parts' => [['text' => $chat->bot_response]]];
                }
            }

            // Panggilan ke service tetap sama. Semua keajaiban (system prompt, dll)
            // terjadi di dalam metode ini secara otomatis.
            $botResponse = $this->geminiService->generateChatResponse($userMessage, $chatHistory);

            // Simpan percakapan baru ke database.
            Chat::create([
                'user_message' => $userMessage,
                'bot_response' => $botResponse,
            ]);

            // Kembalikan balasan sebagai JSON.
            return response()->json(['reply' => $botResponse]);

        } catch (Exception $e) {
            // Tangani semua jenis exception yang mungkin terjadi (API, Database, dll).
            Log::error('ChatbotController Error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            
            // Berikan pesan error yang aman untuk frontend.
            return response()->json(['error' => 'Maaf, terjadi kesalahan pada server kami. Silakan coba lagi nanti.'], 500);
        }
    }
}