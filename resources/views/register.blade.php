<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | Senandika</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <style>
        [x-cloak] { display: none !important; }
        body { font-family: 'Inter', sans-serif; }
        .bg-gradient-custom {
            background: linear-gradient(135deg, #64748b 0%, #475569 50%, #334155 100%);
        }
        .glass-effect {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(100, 116, 139, 0.1);
        }
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }
        .floating-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }
        .floating-circle:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        .floating-circle:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 70%;
            right: 10%;
            animation-delay: 2s;
        }
        .floating-circle:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 50%;
            left: 80%;
            animation-delay: 4s;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        .slide-in {
            animation: slideIn 0.8s ease-out;
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .brain-float {
            animation: brainFloat 3s ease-in-out infinite;
        }
        @keyframes brainFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }
        .gear-spin {
            animation: gearSpin 4s linear infinite;
        }
        @keyframes gearSpin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-gradient-custom min-h-screen flex items-center justify-center px-4 relative">
    
    <!-- Floating Background Elements -->
    <div class="floating-elements">
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
    </div>

    <!-- Main Container -->
    <div class="w-full max-w-6xl flex items-center justify-center min-h-screen">
        <div class="grid md:grid-cols-2 gap-8 w-full max-w-5xl">
            
            <!-- Left Side - Register Form -->
            <div class="glass-effect rounded-3xl p-8 space-y-6 slide-in shadow-2xl">
                <div class="text-center space-y-4">
                    <div class="w-16 h-16 bg-slate-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-slate-700">Buat Akun</h1>
                    <p class="text-slate-500 text-lg">Selamat datang!</p>
                    <p class="text-slate-400">Daftar dan mulai perjalananmu bersama Senandika</p>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('actionregister') }}" x-data="{ loading: false }" @submit="loading = true" class="space-y-5">
                    @csrf
                    
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap</label>
                        <div class="relative">
                            <input type="text" name="name" id="name" required
                                   class="form-input w-full rounded-xl border border-slate-200 p-4 pl-12 shadow-sm focus:outline-none focus:ring-2 focus:ring-slate-500 focus:border-slate-500 transition-all duration-300"
                                   placeholder="Nama kamu...">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                        <div class="relative">
                            <input type="email" name="email" id="email" required
                                   class="form-input w-full rounded-xl border border-slate-200 p-4 pl-12 shadow-sm focus:outline-none focus:ring-2 focus:ring-slate-500 focus:border-slate-500 transition-all duration-300"
                                   placeholder="nama@email.com">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div x-data="{ showPassword: false }">
                        <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                        <div class="relative">
                            <input :type="showPassword ? 'text' : 'password'" name="password" id="password" required
                                   class="form-input w-full rounded-xl border border-slate-200 p-4 pl-12 pr-12 shadow-sm focus:outline-none focus:ring-2 focus:ring-slate-500 focus:border-slate-500 transition-all duration-300"
                                   placeholder="••••••••">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <button type="button" @click="showPassword = !showPassword"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 transition-colors duration-200">
                                <!-- Eye Icon -->
                                <svg x-show="!showPassword" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <!-- Eye Off -->
                                <svg x-show="showPassword" x-cloak class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Password Confirmation -->
                    <div x-data="{ showPasswordConfirm: false }">
                        <label for="password_confirmation" class="block text-sm font-semibold text-slate-700 mb-2">Konfirmasi Password</label>
                        <div class="relative">
                            <input :type="showPasswordConfirm ? 'text' : 'password'" name="password_confirmation" id="password_confirmation" required
                                   class="form-input w-full rounded-xl border border-slate-200 p-4 pl-12 pr-12 shadow-sm focus:outline-none focus:ring-2 focus:ring-slate-500 focus:border-slate-500 transition-all duration-300"
                                   placeholder="••••••••">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <button type="button" @click="showPasswordConfirm = !showPasswordConfirm"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 transition-colors duration-200">
                                <!-- Eye Icon -->
                                <svg x-show="!showPasswordConfirm" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <!-- Eye Off -->
                                <svg x-show="showPasswordConfirm" x-cloak class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                                class="w-full bg-slate-500 hover:bg-slate-600 text-white font-semibold py-4 rounded-xl shadow-lg transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center"
                                :disabled="loading">
                            <span x-show="!loading">Daftar</span>
                            <div x-show="loading" x-cloak class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Memproses...
                            </div>
                        </button>
                    </div>
                </form>

                <!-- Login Link -->
                <div class="text-center text-slate-500 pt-6 border-t border-slate-200">
                    Sudah punya akun?
                    <a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-500 hover:underline font-semibold ml-1 transition-colors duration-200">
                        Masuk sekarang
                    </a>
                </div>
            </div>

            <!-- Right Side - Updated Illustration -->
            <div class="hidden md:flex flex-col justify-center items-center space-y-8">
                <!-- SVG Illustration -->
                <div class="w-full max-w-md">
                    <svg viewBox="0 0 400 300" class="w-full h-auto">
                        <!-- Background -->
                        <rect width="400" height="300" fill="#f8fafc"/>
                        
                        <!-- Main Character (Person creating account) -->
                        <g transform="translate(200, 130)">
                            <!-- Head -->
                            <circle cx="0" cy="0" r="55" fill="#FEB8A6"/>
                            
                            <!-- Hair -->
                            <path d="M -45 -20 Q -50 -40 -35 -50 Q -20 -55 0 -55 Q 20 -55 35 -50 Q 50 -40 45 -20 Q 45 -10 40 5 Q 35 15 25 20 Q 0 25 -25 20 Q -35 15 -40 5 Q -45 -10 -45 -20 Z" fill="#2C3E50"/>
                            
                            <!-- Registration/Profile creation illustration (floating above head) -->
                            <g transform="translate(0, -45)" class="brain-float">
                                <!-- Profile card -->
                                <rect x="-20" y="-15" width="40" height="30" rx="5" fill="#FFFFFF" stroke="#E5E7EB" stroke-width="2"/>
                                
                                <!-- Profile picture placeholder -->
                                <circle cx="-8" cy="-8" r="6" fill="#E5E7EB"/>
                                <circle cx="-8" cy="-8" r="4" fill="#9CA3AF"/>
                                
                                <!-- Profile lines -->
                                <rect x="0" y="-12" width="12" height="2" fill="#E5E7EB"/>
                                <rect x="0" y="-8" width="8" height="2" fill="#E5E7EB"/>
                                <rect x="0" y="-4" width="10" height="2" fill="#E5E7EB"/>
                                
                                <!-- Plus/Add icon -->
                                <g transform="translate(12, 5)">
                                    <circle cx="0" cy="0" r="4" fill="#10B981"/>
                                    <rect x="-1" y="-3" width="2" height="6" fill="#FFFFFF"/>
                                    <rect x="-3" y="-1" width="6" height="2" fill="#FFFFFF"/>
                                </g>
                                
                                <!-- Checkmarks around -->
                                <g transform="translate(-30, -5)">
                                    <circle cx="0" cy="0" r="3" fill="#10B981"/>
                                    <path d="M -1 0 L 0 1 L 2 -1" stroke="#FFFFFF" stroke-width="1" fill="none"/>
                                </g>
                                
                                <g transform="translate(25, -10)">
                                    <circle cx="0" cy="0" r="3" fill="#10B981"/>
                                    <path d="M -1 0 L 0 1 L 2 -1" stroke="#FFFFFF" stroke-width="1" fill="none"/>
                                </g>
                                
                                <g transform="translate(30, 8)">
                                    <circle cx="0" cy="0" r="3" fill="#10B981"/>
                                    <path d="M -1 0 L 0 1 L 2 -1" stroke="#FFFFFF" stroke-width="1" fill="none"/>
                                </g>
                                
                                <!-- Small floating dots -->
                                <circle cx="-35" cy="-5" r="1" fill="#64748B" opacity="0.6"/>
                                <circle cx="35" cy="-8" r="1" fill="#64748B" opacity="0.6"/>
                                <circle cx="38" cy="2" r="1" fill="#64748B" opacity="0.6"/>
                                <circle cx="-32" cy="5" r="1" fill="#64748B" opacity="0.6"/>
                            </g>
                            
                            <!-- Eyes -->
                            <circle cx="-15" cy="-8" r="3" fill="#2C3E50"/>
                            <circle cx="15" cy="-8" r="3" fill="#2C3E50"/>
                            <circle cx="-14" cy="-9" r="1" fill="#FFFFFF"/>
                            <circle cx="16" cy="-9" r="1" fill="#FFFFFF"/>
                            
                            <!-- Nose -->
                            <ellipse cx="0" cy="0" rx="2" ry="5" fill="#E6A896"/>
                            
                            <!-- Mouth -->
                            <path d="M -10 10 Q 0 15 10 10" stroke="#2C3E50" stroke-width="2" fill="none"/>
                            
                            <!-- Body -->
                            <rect x="-30" y="45" width="60" height="70" rx="15" fill="#2C3E50"/>
                            
                            <!-- Arms -->
                            <ellipse cx="-40" cy="60" rx="10" ry="25" fill="#FEB8A6"/>
                            <ellipse cx="40" cy="60" rx="10" ry="25" fill="#FEB8A6"/>
                        </g>
                        
                        <!-- Person with form (left) -->
                        <g transform="translate(70, 200)">
                            <!-- Head -->
                            <circle cx="0" cy="0" r="25" fill="#FEB8A6"/>
                            
                            <!-- Hair -->
                            <path d="M -20 -10 Q -25 -20 -10 -25 Q 0 -30 10 -25 Q 25 -20 20 -10 Q 20 0 15 5 Q 0 10 -15 5 Q -20 0 -20 -10 Z" fill="#2C3E50"/>
                            
                            <!-- Eyes -->
                            <circle cx="-8" cy="-3" r="2" fill="#2C3E50"/>
                            <circle cx="8" cy="-3" r="2" fill="#2C3E50"/>
                            
                            <!-- Body -->
                            <rect x="-15" y="20" width="30" height="40" rx="5" fill="#FFFFFF"/>
                            
                            <!-- Arms -->
                            <ellipse cx="-20" cy="35" rx="5" ry="12" fill="#FEB8A6"/>
                            <ellipse cx="20" cy="35" rx="5" ry="12" fill="#FEB8A6"/>
                            
                            <!-- Form/Document -->
                            <rect x="-12" y="42" width="24" height="16" rx="2" fill="#FFFFFF" stroke="#E5E7EB" stroke-width="1"/>
                            <!-- Form lines -->
                            <rect x="-10" y="45" width="16" height="1" fill="#E5E7EB"/>
                            <rect x="-10" y="48" width="12" height="1" fill="#E5E7EB"/>
                            <rect x="-10" y="51" width="14" height="1" fill="#E5E7EB"/>
                            <rect x="-10" y="54" width="10" height="1" fill="#E5E7EB"/>
                            
                            <!-- Pen -->
                            <rect x="18" y="40" width="2" height="8" fill="#2C3E50"/>
                            <circle cx="19" cy="39" r="1" fill="#3B82F6"/>
                        </g>
                        
                        <!-- Person with welcome gesture (right) -->
                        <g transform="translate(330, 200)">
                            <!-- Head -->
                            <circle cx="0" cy="0" r="25" fill="#FEB8A6"/>
                            
                            <!-- Hair -->
                            <path d="M -20 -10 Q -25 -20 -10 -25 Q 0 -30 10 -25 Q 25 -20 20 -10 Q 20 0 15 5 Q 0 10 -15 5 Q -20 0 -20 -10 Z" fill="#2C3E50"/>
                            
                            <!-- Eyes -->
                            <circle cx="-8" cy="-3" r="2" fill="#2C3E50"/>
                            <circle cx="8" cy="-3" r="2" fill="#2C3E50"/>
                            
                            <!-- Body -->
                            <rect x="-15" y="20" width="30" height="40" rx="5" fill="#FFFFFF"/>
                            
                            <!-- Arms - raised in welcome -->
                            <ellipse cx="-25" cy="25" rx="5" ry="15" fill="#FEB8A6" transform="rotate(-30)"/>
                            <ellipse cx="25" cy="25" rx="5" ry="15" fill="#FEB8A6" transform="rotate(30)"/>
                            
                            <!-- Welcome stars -->
                            <g transform="translate(-20, -30)">
                                <path d="M 0 -3 L 1 0 L 4 0 L 1.5 2 L 2.5 5 L 0 3.5 L -2.5 5 L -1.5 2 L -4 0 L -1 0 Z" fill="#FFC107"/>
                            </g>
                            
                            <g transform="translate(20, -25)">
                                <path d="M 0 -2 L 0.5 0 L 2 0 L 1 1 L 1.5 2.5 L 0 1.5 L -1.5 2.5 L -1 1 L -2 0 L -0.5 0 Z" fill="#FFC107"/>
                            </g>
                        </g>
                        
                        <!-- Welcome sign -->
                        <g transform="translate(290, 120)">
                            <rect x="-15" y="0" width="30" height="20" rx="5" fill="#FFFFFF" stroke="#E5E7EB" stroke-width="2"/>
                            <text x="0" y="12" text-anchor="middle" font-size="8" fill="#2C3E50" font-weight="bold">WELCOME</text>
                            <rect x="-1" y="20" width="2" height="30" fill="#64748B"/>
                        </g>
                        
                        <!-- Settings gear (top left) -->
                        <g transform="translate(50, 50)" class="gear-spin">
                            <circle cx="0" cy="0" r="15" fill="#64748B"/>
                            <circle cx="0" cy="0" r="8" fill="#475569"/>
                            <!-- Gear teeth -->
                            <rect x="-2" y="-18" width="4" height="6" fill="#64748B"/>
                            <rect x="-2" y="12" width="4" height="6" fill="#64748B"/>
                            <rect x="-18" y="-2" width="6" height="4" fill="#64748B"/>
                            <rect x="12" y="-2" width="6" height="4" fill="#64748B"/>
                            <!-- Diagonal teeth -->
                            <rect x="-13" y="-13" width="4" height="4" fill="#64748B" transform="rotate(45)"/>
                            <rect x="9" y="-13" width="4" height="4" fill="#64748B" transform="rotate(45)"/>
                            <rect x="-13" y="9" width="4" height="4" fill="#64748B" transform="rotate(45)"/>
                            <rect x="9" y="9" width="4" height="4" fill="#64748B" transform="rotate(45)"/>
                        </g>
                        
                        <!-- Floating elements -->
                        <circle cx="100" cy="40" r="8" fill="rgba(100, 116, 139, 0.2)"/>
                        <circle cx="350" cy="60" r="12" fill="rgba(100, 116, 139, 0.1)"/>
                        <circle cx="60" cy="180" r="6" fill="rgba(100, 116, 139, 0.15)"/>
                        <circle cx="340" cy="120" r="4" fill="rgba(100, 116, 139, 0.2)"/>
                        <circle cx="30" cy="120" r="5" fill="rgba(100, 116, 139, 0.1)"/>
                    </svg>
                </div>
                
                <div class="text-center text-white space-y-2">
                    <h2 class="text-2xl font-bold">Bergabung dengan Komunitas</h2>
                    <p class="text-slate-200">Mulai perjalanan pengembangan diri dan produktivitas Anda</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>