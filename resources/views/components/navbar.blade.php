<header class="bg-white shadow-sm" x-data="{ isOpen: false }">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <div class="text-2xl">🧠</div>
            <span class="text-xl font-bold text-slate-700">Senandika</span>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8">
            <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')">Articles</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        </nav>

        <!-- Profile Dropdown (Desktop) -->
        <div class="hidden md:flex items-center space-x-4">
            @php
                $user = Auth::user();
                $imageUrl = $user->image ? asset('storage/' . $user->image) : 'https://placehold.co/32x32/E2E8F0/A0AEC0?text=P';
            @endphp
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center focus:outline-none">
                    <img class="w-8 h-8 rounded-full" src="{{ $imageUrl }}" alt="Foto Profil">
                </button>
                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 py-1">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                    <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="isOpen = !isOpen" class="md:hidden focus:outline-none">
            <svg x-show="!isOpen" class="w-6 h-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="isOpen" x-cloak class="w-6 h-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="isOpen" x-cloak class="md:hidden border-t border-gray-200">
        <nav class="px-4 pt-4 pb-2 space-y-1">
            <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')">Articles</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        </nav>
        <div class="border-t border-gray-100 pt-4 px-4 pb-6 flex items-center">
            <img src="{{ $imageUrl }}" class="w-10 h-10 rounded-full mr-3" alt="Foto Profil">
            <div>
                <p class="text-sm font-medium text-gray-900">{{ $user->name ?? 'User' }}</p>
                <p class="text-xs text-gray-500">{{ $user->email ?? 'email@example.com' }}</p>
            </div>
        </div>
        <div class="px-4 space-y-1">
            <a href="/profile" class="block px-3 py-2 rounded-md text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
            <a href="/logout" class="block px-3 py-2 rounded-md text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
        </div>
    </div>
</header>
