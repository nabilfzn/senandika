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
    </style>
</head>
<body class="bg-slate-50">

    <div class="flex min-h-screen items-center justify-center p-4 sm:p-6 lg:p-8">
        
        <!-- Main Card Container -->
        <div class="w-full max-w-6xl overflow-hidden rounded-2xl bg-white shadow-2xl grid lg:grid-cols-2">

            <!-- Kolom Kiri: Formulir Pendaftaran (Lebih Ringkas) -->
            <div class="flex flex-col justify-center p-8 sm:p-10 lg:p-12">
                <div class="w-full max-w-md mx-auto">
                    <!-- Header -->
                    <a href="/" class="inline-block">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-100">
                            <span class="text-2xl text-indigo-600">🧠</span>
                        </div>
                    </a>
                    <h1 class="mt-5 text-3xl font-bold tracking-tight text-slate-900">
                        Buat Akun Baru
                    </h1>
                    <p class="mt-2 text-slate-600">
                        Mulai perjalanan Anda menuju kesejahteraan mental hari ini.
                    </p>

                    <!-- Form -->
                    <form class="mt-6 space-y-5" method="POST" action="{{ route('actionregister') }}" x-data="{ loading: false }" @submit="loading = true">
                        @csrf

                        <!-- Error Messages -->
                        @if ($errors->any())
                            <div class="bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg p-4 space-y-1">
                                <p class="font-medium">Harap perbaiki kesalahan berikut:</p>
                                <ul class="list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="space-y-4">
                            <!-- Full Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700 sr-only">Nama Lengkap</label>
                                <input id="name" name="name" type="text" required value="{{ old('name') }}"
                                       class="block w-full rounded-lg border-slate-300 px-4 py-2.5 shadow-sm placeholder:text-slate-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition"
                                       placeholder="Nama Lengkap">
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 sr-only">Email</label>
                                <input id="email" name="email" type="email" required value="{{ old('email') }}"
                                       class="block w-full rounded-lg border-slate-300 px-4 py-2.5 shadow-sm placeholder:text-slate-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition"
                                       placeholder="Email">
                            </div>

                            <!-- Password -->
                            <div>
                                <label for="password" class="block text-sm font-medium text-slate-700 sr-only">Password</label>
                                <input id="password" name="password" type="password" required
                                       class="block w-full rounded-lg border-slate-300 px-4 py-2.5 shadow-sm placeholder:text-slate-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition"
                                       placeholder="Password">
                            </div>

                            <!-- Password Confirmation -->
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-slate-700 sr-only">Konfirmasi Password</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" required
                                       class="block w-full rounded-lg border-slate-300 px-4 py-2.5 shadow-sm placeholder:text-slate-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition"
                                       placeholder="Konfirmasi Password">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-1">
                            <button type="submit" :disabled="loading"
                                    class="flex w-full justify-center rounded-lg border border-transparent bg-gradient-to-r from-indigo-600 to-indigo-700 py-3 px-4 text-sm font-semibold text-white shadow-lg shadow-indigo-500/30 hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-75 disabled:cursor-not-allowed transition-all">
                                <div x-show="loading" x-cloak class="flex items-center">
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    <span>Memproses...</span>
                                </div>
                                <span x-show="!loading">Buat Akun</span>
                            </button>
                        </div>
                    </form>

                    <!-- Login Link -->
                    <p class="mt-8 text-center text-sm text-slate-500">
                        Sudah punya akun?
                        <a href="{{ url('/login') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">
                            Masuk sekarang
                        </a>
                    </p>
                </div>
            </div>

            <!-- Kolom Kanan: Gambar Ilustrasi -->
            <div class="hidden lg:block">
                <img src="https://images.unsplash.com/photo-1588421357574-87938a86fa28?q=80&w=2070&auto=format&fit=crop" 
                     alt="A calm and modern workspace with plants, promoting mental well-being."
                     class="h-full w-full object-cover">
            </div>
            
        </div>
    </div>

</body>
</html>