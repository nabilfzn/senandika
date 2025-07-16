<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senandika</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
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

    <div class="w-full max-w-screen-2xl mx-auto grid grid-cols-1 lg:grid-cols-[280px_1fr] xl:grid-cols-[280px_1fr_320px] gap-6 p-4 h-screen">

        <!-- ===== Sidebar Kiri (Navigasi) - Muncul di layar besar ===== -->
        <aside class="hidden lg:flex flex-col gap-8 py-4">
            <!-- Logo/Branding -->
            <div class="flex items-center gap-3 px-4">
                <div class="w-10 h-10 rounded-lg bg-indigo-600 flex items-center justify-center text-white font-bold text-xl">
                    S
                </div>
                <span class="text-xl font-bold text-gray-800">Senandika</span>
            </div>

            <!-- Menu Navigasi -->
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

        <!-- ===== Main Chat Container - Selalu Terlihat ===== -->
        <main class="flex flex-col h-full bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
            <!-- Header -->
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

            <!-- Chat Messages -->
            <div id="chat-messages" class="flex-1 overflow-y-auto p-6 space-y-4">
                <div class="flex items-start space-x-4 animate-slide-in">
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
                    <textarea id="message-input" placeholder="Ketik pesan Anda..." rows="1" class="w-full pl-4 pr-10 py-2.5 rounded-xl text-gray-800 placeholder-gray-400 bg-gray-100 border border-transparent focus:bg-white focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all duration-300 resize-none min-h-[44px] max-h-[120px]"></textarea>
                    <button id="send-button" class="w-11 h-11 rounded-xl bg-indigo-600 flex items-center justify-center text-white hover:bg-indigo-700 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed disabled:bg-indigo-400" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 -rotate-45 -mr-0.5 mt-0.5"><path d="M3.105 2.289a.75.75 0 00-.826.95l1.414 4.949a.75.75 0 00.95.826L11.25 8.25l-5.607-1.789a.75.75 0 00-.95-.826z" /><path d="M15 8.25a.75.75 0 00-.75-.75h-2.19a.75.75 0 000 1.5h2.19a.75.75 0 00.75-.75z" /><path d="M4.53 12.011a.75.75 0 00-.95.826l1.414 4.95a.75.75 0 00.95.826l5.607-1.79a.75.75 0 00.826-.95l-1.414-4.95a.75.75 0 00-.95-.826L4.53 12.011z" /></svg>
                    </button>
                </div>
            </div>
        </main>

        <!-- ===== Sidebar Kanan (Info Tambahan) - Muncul di layar xl ===== -->
        <aside class="hidden xl:flex flex-col gap-6 py-4">
             <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                <h3 class="text-base font-semibold text-gray-800 mb-4">Kutipan Hari Ini</h3>
                <blockquote class="border-l-4 border-indigo-200 pl-4">
                    <p class="text-gray-600 italic">"Satu-satunya perjalanan yang mustahil adalah yang tidak pernah Anda mulai."</p>
                    <cite class="text-sm text-gray-500 mt-2 block not-italic">- Tony Robbins</cite>
                </blockquote>
             </div>
             <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                <h3 class="text-base font-semibold text-gray-800 mb-4">Tips Cepat: Pernapasan Kotak</h3>
                <ol class="list-decimal list-inside text-gray-600 space-y-2 text-sm">
                    <li>Tarik napas perlahan selama 4 detik.</li>
                    <li>Tahan napas Anda selama 4 detik.</li>
                    <li>Hembuskan napas perlahan selama 4 detik.</li>
                    <li>Tahan sebelum napas berikutnya selama 4 detik.</li>
                    <li>Ulangi beberapa kali hingga merasa tenang.</li>
                </ol>
             </div>
        </aside>

    </div>

    <script>
        // JavaScript (tidak ada perubahan, tetap sama seperti sebelumnya)
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');
        const chatMessages = document.getElementById('chat-messages');

        const responses = {
            'cemas': [ "Saya memahami perasaan cemas itu tidak nyaman. Tarik napas dalam-dalam sejenak. Fokus pada hal yang bisa Anda kendalikan saat ini. Apa yang spesifik membuat Anda cemas?", "Kecemasan adalah respons alami. Mari coba teknik grounding: sebutkan 5 hal yang bisa Anda lihat, 4 yang bisa Anda dengar, dan 3 yang bisa Anda sentuh di sekitar Anda sekarang." ],
            'sedih': [ "Merasa sedih itu wajar dan manusiawi. Saya di sini untuk mendengarkan. Jika Anda ingin bercerita, saya siap.", "Terima kasih telah berbagi. Ingatlah bahwa perasaan ini tidak akan selamanya. Beri diri Anda waktu untuk merasakannya." ],
            'stress': [ "Stress bisa sangat melelahkan. Bagaimana kalau kita coba teknik relaksasi sederhana? Pejamkan mata dan atur napas Anda: tarik napas 4 detik, tahan 4 detik, hembuskan 6 detik.", "Saat merasa stress, mengambil jeda sejenak sangat membantu. Apa aktivitas kecil yang biasanya bisa membuat Anda merasa sedikit lebih baik?" ],
            'tidur': [ "Kesulitan tidur memang mengganggu. Coba ciptakan rutinitas menenangkan sebelum tidur, seperti membaca buku atau mendengar musik tenang. Hindari layar setidaknya 1 jam sebelum tidur.", "Seringkali pikiran yang ramai menjadi penyebab sulit tidur. Apakah ada sesuatu yang mengganggu pikiran Anda belakangan ini?" ],
            'cerita': [ "Tentu, saya siap mendengarkan. Ceritakan apa saja yang ingin Anda bagikan. Ruang ini aman untuk Anda.", "Saya di sini. Silakan bercerita, saya akan mendengarkan dengan saksama." ],
            'terima kasih': [ "Sama-sama. Ingat, saya selalu di sini jika Anda butuh teman bicara lagi.", "Dengan senang hati. Semoga hari Anda menjadi lebih baik." ]
        };
        
        sendButton.addEventListener('click', sendMessageFromInput);
        messageInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); sendMessageFromInput(); }
        });
        messageInput.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = Math.min(this.scrollHeight, 120) + 'px';
            sendButton.disabled = this.value.trim().length === 0;
        });
        window.addEventListener('load', () => messageInput.focus());

        function sendMessageFromInput() {
            const messageText = messageInput.value.trim();
            if (!messageText) return;
            addMessage(messageText, true);
            messageInput.value = '';
            messageInput.dispatchEvent(new Event('input'));
            triggerAIResponse(messageText);
        }

        function sendQuickMessage(text) {
            addMessage(text, true);
            triggerAIResponse(text);
        }

        function triggerAIResponse(userMessage) {
            toggleInput(true);
            showTyping();
            setTimeout(() => {
                hideTyping();
                const response = getSmartResponse(userMessage);
                addMessage(response, false);
                toggleInput(false);
            }, 1200 + Math.random() * 800);
        }

        function addMessage(text, isUser) {
            const messageWrapper = document.createElement('div');
            messageWrapper.className = `flex items-start gap-3 animate-slide-in ${isUser ? 'flex-row-reverse' : ''}`;
            const avatar = isUser ? '' : `<div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center flex-shrink-0"><span class="text-white text-base">🤖</span></div>`;
            const bubble = document.createElement('div');
            bubble.className = `p-4 max-w-lg relative ${isUser ? 'bg-indigo-600 text-white rounded-xl rounded-br-none' : 'bg-gray-100 text-gray-700 rounded-xl rounded-tl-none'}`;
            bubble.innerHTML = `<p class="leading-relaxed">${text}</p>`;
            messageWrapper.innerHTML = avatar;
            messageWrapper.appendChild(bubble);
            chatMessages.appendChild(messageWrapper);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function showTyping() {
            const typingIndicator = document.createElement('div');
            typingIndicator.id = 'typing-indicator';
            typingIndicator.className = 'flex items-start gap-3 animate-slide-in';
            typingIndicator.innerHTML = `<div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center flex-shrink-0"><span class="text-white text-base">🤖</span></div><div class="bg-gray-100 rounded-xl rounded-tl-none p-4"><div class="flex items-center space-x-1"><div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div><div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></div><div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div></div></div>`;
            chatMessages.appendChild(typingIndicator);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function hideTyping() {
            const typingIndicator = document.getElementById('typing-indicator');
            if (typingIndicator) typingIndicator.remove();
        }

        function getSmartResponse(message) {
            const lowerMessage = message.toLowerCase();
            for (const [key, responseArray] of Object.entries(responses)) {
                if (lowerMessage.includes(key)) return responseArray[Math.floor(Math.random() * responseArray.length)];
            }
            return "Terima kasih telah berbagi. Saya mendengarkan Anda. Jika ada lagi yang ingin dibicarakan, jangan ragu ya. 💙";
        }
        
        function toggleInput(disabled) {
            messageInput.disabled = disabled;
            sendButton.disabled = disabled;
            document.querySelectorAll('.flex-wrap button').forEach(btn => btn.disabled = disabled);
            if (!disabled) {
                messageInput.focus();
                sendButton.disabled = messageInput.value.trim().length === 0;
            }
        }
    </script>
</body>
</html>