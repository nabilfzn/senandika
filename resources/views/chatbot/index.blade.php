<!DOCTYPE html>
<html lang="id">
    
<head>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senandika</title>
    <!-- Menggunakan CDN dan Font dari desain baru -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Menggunakan CSS dari desain baru -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f1f5f9; /* bg-slate-100 */
            background-image: radial-gradient(#d1d5db 0.5px, transparent 0.5px);
            background-size: 20px 20px;
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        #chat-messages::-webkit-scrollbar { width: 6px; }
        #chat-messages::-webkit-scrollbar-track { background: transparent; }
        #chat-messages::-webkit-scrollbar-thumb { background-color: #d1d5db; border-radius: 20px; }
        .animate-slide-in { animation: slideIn 0.4s ease-out forwards; }
    </style>
</head>
<body class="min-h-screen overflow-hidden">

    <!-- Menggunakan Struktur HTML dari desain baru -->
    <div class="w-full max-w-screen-2xl mx-auto grid grid-cols-1 lg:grid-cols-[280px_1fr] h-screen">

        <!-- ===== Sidebar Kiri (Navigasi) ===== -->
        <aside class="hidden lg:flex flex-col gap-8 py-4">
            <div class="flex items-center gap-3 px-4">
                <div class="w-10 h-10 rounded-lg bg-indigo-600 flex items-center justify-center text-white font-bold text-xl">
                    S
                </div>
                <span class="text-xl font-bold text-gray-800">Senandika</span>
            </div>
            <nav class="flex-1 flex flex-col gap-2">
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-900 bg-gray-200 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" /><path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h7a2 2 0 002-2v-4a2 2 0 00-2-2h-1z" /></svg>
                    <span>Asisten AI</span>
                </a>
                 <a href="/dashboard" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 hover:bg-gray-200 hover:text-gray-900 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" /></svg>
                    <span>Back</span>
                </a>
            </nav>
        </aside>

        <!-- ===== Main Chat Container ===== -->
        <main class="flex flex-col h-full bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden my-4 lg:my-0">
            <header class="p-4 border-b border-gray-200 shrink-0">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center flex-shrink-0">
                        <span class="text-white text-lg">🤖</span>
                    </div>
                    <div>
                        <h1 class="text-lg font-semibold text-gray-800">Asisten AI</h1>
                        <p class="text-sm text-gray-500 flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5"></span>
                            Online
                        </p>
                    </div>
                </div>
            </header>

            <!-- ID "chat-messages" tetap sama untuk kompatibilitas JS -->
            <div id="chat-messages" class="flex-1 overflow-y-auto p-6 space-y-6">
                <!-- Pesan Awal dari AI -->
                <div class="flex items-start gap-3 animate-slide-in">
                    <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center flex-shrink-0">
                        <span class="text-white text-base">🤖</span>
                    </div>
                    <div class="bg-gray-100 rounded-xl rounded-tl-none p-4 max-w-lg">
                        <p class="text-gray-700 leading-relaxed">
                            Selamat datang di Senandika Chat! 🌟 Saya di sini untuk mendengarkan dan membantu Anda. 
                            Apa yang sedang Anda rasakan atau pikirkan hari ini?
                        </p>
                    </div>
                </div>
            </div>

            <!-- Input Area -->
            <div class="p-4 border-t border-gray-200 bg-white shrink-0">
                <div class="flex flex-wrap gap-2 mb-3">
                    <button class="bg-indigo-50 text-indigo-700 px-3 py-1.5 rounded-lg text-sm font-medium hover:bg-indigo-100 transition-colors" onclick="sendQuickMessage('Saya merasa cemas')">Merasa cemas</button>
                    <button class="bg-indigo-50 text-indigo-700 px-3 py-1.5 rounded-lg text-sm font-medium hover:bg-indigo-100 transition-colors" onclick="sendQuickMessage('Saya butuh teman cerita')">Butuh teman cerita</button>
                    <button class="bg-indigo-50 text-indigo-700 px-3 py-1.5 rounded-lg text-sm font-medium hover:bg-indigo-100 transition-colors" onclick="sendQuickMessage('Berikan tips relaksasi')">Tips relaksasi</button>
                    <button class="bg-indigo-50 text-indigo-700 px-3 py-1.5 rounded-lg text-sm font-medium hover:bg-indigo-100 transition-colors" onclick="sendQuickMessage('Saya sulit tidur')">Sulit tidur</button>
                </div>
                <div class="flex items-end space-x-3">
                    <!-- Menggunakan textarea dengan ID yang sama: "message-input" -->
                    <textarea id="message-input" placeholder="Ketik pesan Anda..." rows="1" class="w-full pl-4 pr-10 py-2.5 rounded-xl text-gray-800 placeholder-gray-400 bg-gray-100 border border-transparent focus:bg-white focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all duration-300 resize-none min-h-[44px] max-h-[120px]"></textarea>
                    
                    <!-- Tombol kirim dengan ID yang sama: "send-button" -->
                    <button id="send-button" class="w-11 h-11 rounded-xl bg-indigo-600 flex items-center justify-center text-white hover:bg-indigo-700 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed disabled:bg-indigo-400" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 -rotate-45 -mr-0.5 mt-0.5"><path d="M3.105 2.289a.75.75 0 00-.826.95l1.414 4.949a.75.75 0 00.95.826L11.25 8.25l-5.607-1.789a.75.75 0 00-.95-.826z" /><path d="M15 8.25a.75.75 0 00-.75-.75h-2.19a.75.75 0 000 1.5h2.19a.75.75 0 00.75-.75z" /><path d="M4.53 12.011a.75.75 0 00-.95.826l1.414 4.95a.75.75 0 00.95.826l5.607-1.79a.75.75 0 00.826-.95l-1.414-4.95a.75.75 0 00-.95-.826L4.53 12.011z" /></svg>
                    </button>
                </div>
            </div>
        </main>
    </div>

<script>
// =========================================================================
// == JAVASCRIPT ASLI DARI KODE PERTAMA, DENGAN ADAPTASI VISUAL BARU ==
// =========================================================================

const messageInput = document.getElementById('message-input');
const sendButton = document.getElementById('send-button');
const chatMessages = document.getElementById('chat-messages');

// Menggunakan textarea, jadi kita tambahkan auto-resize dan event listener input
messageInput.addEventListener('input', () => {
    sendButton.disabled = messageInput.value.trim().length === 0;
    // Auto-resize textarea
    messageInput.style.height = 'auto';
    messageInput.style.height = Math.min(messageInput.scrollHeight, 120) + 'px';
});

sendButton.addEventListener('click', sendMessage);

// Event listener untuk tombol Enter (tanpa Shift)
messageInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        sendMessage();
    }
});

// Fungsi untuk tombol cepat
function sendQuickMessage(text) {
    messageInput.value = text;
    sendMessage();
}

// Fungsi inti dari kode pertama, tidak diubah secara fundamental
function sendMessage() {
    const text = messageInput.value.trim();
    if (!text) return;

    addMessage(text, true);
    messageInput.value = '';
    messageInput.style.height = 'auto'; // Reset tinggi textarea
    sendButton.disabled = true;

    addTyping();

    fetch('/chat', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ message: text })
    })
    .then(res => res.json())
    .then(data => {
        removeTyping();
        addMessage(data.reply || 'Tidak ada balasan.', false);
    })
    .catch(() => {
        removeTyping();
        addMessage('Terjadi kesalahan saat menghubungi server.', false);
    });
}

// -- FUNGSI INI DIADAPTASI UNTUK MENGHASILKAN TAMPILAN BARU --
function addMessage(text, isUser) {
    const wrapper = document.createElement('div');
    // Menggunakan flex-row-reverse untuk pesan pengguna agar avatar (jika ada) ada di kanan
    wrapper.className = `flex items-start gap-3 animate-slide-in ${isUser ? 'flex-row-reverse' : ''}`;
    
    const bubble = document.createElement('div');
    bubble.className = `p-4 max-w-lg ${isUser ? 'bg-indigo-600 text-white rounded-xl rounded-br-none' : 'bg-gray-100 text-gray-700 rounded-xl rounded-tl-none'}`;
    bubble.innerHTML = `<p class="leading-relaxed">${isUser ? text : marked.parse(text)}</p>`;

    if (!isUser) {
        // Avatar untuk AI
        const avatar = document.createElement('div');
        avatar.className = 'w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center flex-shrink-0';
        avatar.innerHTML = '<span class="text-white text-base">🤖</span>';
        wrapper.appendChild(avatar);
    }
    
    wrapper.appendChild(bubble);
    chatMessages.appendChild(wrapper);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

// -- FUNGSI INI DIADAPTASI UNTUK MENGHASILKAN INDIKATOR "MENGETIK" BARU --
function addTyping() {
    const typing = document.createElement('div');
    typing.id = 'typing'; // ID tetap 'typing' agar removeTyping() berfungsi
    typing.className = 'flex items-start gap-3 animate-slide-in';
    // HTML untuk indikator mengetik dengan 3 titik animasi
    typing.innerHTML = `
        <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center flex-shrink-0">
            <span class="text-white text-base">🤖</span>
        </div>
        <div class="bg-gray-100 rounded-xl rounded-tl-none p-4">
            <div class="flex items-center space-x-1">
                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
            </div>
        </div>`;
    chatMessages.appendChild(typing);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

// Fungsi ini tidak perlu diubah sama sekali
function removeTyping() {
    const typing = document.getElementById('typing');
    if (typing) typing.remove();
}

</script>
</body>
</html>