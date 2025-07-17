@php
    $user = Auth::user();
    $imageUrl = $user->image ? asset('storage/' . $user->image) : 'https://placehold.co/32x32/E2E8F0/A0AEC0?text=P';
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Senandika Platform Edukasi Kesehatan Mental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
        }

        :root {
            --primary: #4682A9;
            --secondary: #749BC2;
            --accent: #91C8E4;
            --text-dark: #1f2937;
            --text-gray: #6b7280;
            --bg-light: #f9fafb;
            --white: #ffffff;
            --gradient-primary: linear-gradient(135deg, var(--primary), var(--secondary));
            --gradient-bg: linear-gradient(135deg, rgba(145, 200, 228, 0.1), rgba(70, 130, 169, 0.1));
            --glass: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            background: var(--white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Enhanced Header Styles */
           .header {
            position: fixed;
            top: 0;
            width: 100%;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            z-index: 1000;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .nav-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
        }
        .profile-button {
            margin-left: 1rem;
        }
        
        .profile-link {
            display: block;
            margin-right: 160px;
            border-radius: 50%;
            transition: box-shadow 0.2s ease;
        }
        .profile-link:hover {
            box-shadow: 0 0 0 3px rgba(70, 130, 169, 0.2);
        }

        .profile-img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
        }

        .logo {
            display: flex;
            margin-left: 160px;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-icon {
            font-size: 1.8rem;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .nav-desktop {
            display: flex;
            gap: 2rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary);
            background: rgba(70, 130, 169, 0.1);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
        }

        .hamburger,
        .hamburger::before,
        .hamburger::after {
            display: block;
            width: 20px;
            height: 2px;
            background: var(--text-dark);
            transition: all 0.2s ease;
        }

        .hamburger {
            position: relative;
        }

        .hamburger::before,
        .hamburger::after {
            content: '';
            position: absolute;
        }

        .hamburger::before { top: -6px; }
        .hamburger::after { top: 6px; }

        .mobile-menu-btn.active .hamburger { background: transparent; }
        .mobile-menu-btn.active .hamburger::before { transform: rotate(45deg); top: 0; }
        .mobile-menu-btn.active .hamburger::after { transform: rotate(-45deg); top: 0; }

        .nav-mobile {
            display: none;
            flex-direction: column;
            background: white;
            border-top: 1px solid #e5e7eb;
            padding: 1rem 0;
        }

        .nav-mobile.active {
            display: flex;
        }

        .nav-link-mobile {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            padding: 0.75rem 1rem;
            transition: all 0.2s ease;
        }

        .nav-link-mobile:hover {
            color: var(--primary);
            background: rgba(70, 130, 169, 0.1);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-link-mobile {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 600;
            padding: 1rem 1.5rem;
            transition: all 0.3s ease;
            border-radius: 8px;
            margin: 0 1rem;
            position: relative;
            overflow: hidden;
        }

        .nav-link-mobile::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-bg);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .nav-link-mobile:hover::before {
            left: 0;
        }

        .nav-link-mobile:hover {
            color: var(--primary);
            transform: translateX(10px);
        }

        /* Content spacing for fixed header */
        .content-wrapper {
            padding-top: 80px;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
        }

        .text-gradient {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-desktop { 
                display: none; 
            }
            
            .mobile-menu-btn { 
                display: block; 
            }
            
            .container { 
                padding: 0 15px; 
            }
            
            .nav-wrapper { 
                padding: 0.75rem 0; 
            }
            
            .logo-icon { 
                font-size: 1.75rem; 
            }
            
            .logo-text { 
                font-size: 1.4rem; 
            }
        }

        @media (max-width: 480px) {
            .container { 
                padding: 0 10px; 
            }
            
            .logo-icon { 
                font-size: 1.5rem; 
            }
            
            .logo-text { 
                font-size: 1.2rem; 
            }
            
            .profile-img { 
                width: 36px; 
                height: 36px; 
            }
        }

        /* Smooth scrolling */
        html { 
            scroll-behavior: smooth; 
        }

        /* Loading animation */
        .nav-link, .nav-link-mobile {
            position: relative;
        }

        .nav-link.loading::after,
        .nav-link-mobile.loading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            animation: loadingBar 0.5s ease-out forwards;
        }

        @keyframes loadingBar {
            to {
                width: 100%;
            }
        }
    </style>


</head>

<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <!-- Enhanced Header -->
    <header class="header">
    <div class="container">
        <div class="nav-wrapper">
            <div class="logo">
                <div class="logo-icon">🧠</div>
                <span class="logo-text">Senandika</span>
            </div>
            
            <nav class="nav-desktop">
                <a href="/dashboard" class="nav-link">Dashboard</a>
                <a href="/posts" class="nav-link active">Articles</a>
                <a href="/chat" class="nav-link">Chat</a>
            </nav>

            <!-- Foto profil (Struktur disederhanakan) -->
            <div class="profile-button">
                <a href="{{ route('profile') }}" class="profile-link">
                    <img class="profile-img" src="{{ $imageUrl }}" alt="Foto Profil">
                </a>
            </div>

            <!-- Tombol mobile menu -->
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                <span class="hamburger"></span>
            </button>
        </div>
        
        <!-- Mobile Nav disamakan dengan Desktop Nav -->
        <nav class="nav-mobile" id="mobileNav">
            <a href="/dashboard" class="nav-link-mobile">Dashboard</a>
            <a href="/posts" class="nav-link-mobile">Articles</a>
            <a href="/chat" class="nav-link-mobile">Chat</a>
        </nav>
    </div>
</header>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Hero Section -->
        <section class="pt-12 pb-12 bg-gradient-to-r from-blue-600/10 via-blue-500/5 to-blue-600/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-800 text-sm font-medium mb-6">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Artikel Kesehatan Mental
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Jelajahi <span class="text-gradient">Artikel</span> Memotivasi
                    </h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                        Temukan pelajaran memotivasi dari orang yang berhasil memanangkan mentalnya
                    </p>
                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Search and Filter -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-8">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 relative">
                        <form>
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input
                            type="text"
                            name="search"
                            placeholder="Cari artikel..."
                            class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            autocomplete="off"
                        />
                        </form>
                    </div>
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="mb-8">
                @if($posts->count())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($posts as $post)
                            <div class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 fade-in">
                                <a href="{{ url('/posts/' . $post->id) }}" class="block">
                                    <div class="relative">
                                        @if ($post->image)
                                            <img
                                                src="{{ asset('storage/' . $post->image) }}"
                                                alt="{{ $post->judul }}"
                                                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                            />
                                        @else
                                            <div class="w-full h-48 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                                <div class="text-4xl text-gray-400">🧠</div>
                                            </div>
                                        @endif
                                    </div>
                                </a>
                                <div class="p-6">
                                    <div class="flex items-center space-x-4 text-sm text-gray-500 mb-3">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <time>{{ $post->created_at->diffForHumans() }}</time>
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                            <span>{{ $post->user->name }}</span>
                                        </div>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                        <a href="{{ url('/posts/' . $post->id) }}">{{ $post->judul }}</a>
                                    </h3>
                                    <p class="text-gray-600 mb-4 line-clamp-3">
                                        {{ Str::limit(strip_tags($post->content), 150) }}
                                    </p>
                                    <a href="{{ url('/posts/' . $post->id) }}" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                                        Baca Selengkapnya
                                        <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="mt-8">
                        {{-- {{ $posts->links() }} --}}
                    </div>
                @else
                    <div class="text-center py-12">
                        <div class="text-6xl mb-4">📚</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Artikel tidak ditemukan</h3>
                        <p class="text-gray-600">Saat ini belum ada artikel yang dipublikasikan. Silakan kembali lagi nanti.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3 mb-4">
                    <div class="text-2xl">🧠</div>
                    <span class="text-xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">
                        Senandika
                    </span>
                </div>
                <p class="text-gray-400 max-w-2xl mx-auto mb-6">
                    Platform edukasi kesehatan mental yang berkomitmen menyediakan informasi berkualitas dan sumber daya
                    terpercaya untuk mendukung kesejahteraan mental masyarakat.
                </p>
                <div class="border-t border-gray-700 pt-6">
                    <p class="text-gray-400">
                        © 2024 Senandika. Semua hak dilindungi. | Platform Edukasi Kesehatan Mental
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Enhanced mobile menu toggle
        function toggleMobileMenu() {
            const mobileNav = document.getElementById('mobileNav');
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            
            mobileNav.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        }

        // Profile menu toggle (placeholder)
        function toggleProfileMenu() {
            // Add profile dropdown functionality here
            console.log('Profile menu clicked');
        }

        // Enhanced navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link, .nav-link-mobile');
            
            // Add loading animation to nav links
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Add loading class for visual feedback
                    this.classList.add('loading');
                    
                    // Remove loading class after animation
                    setTimeout(() => {
                        this.classList.remove('loading');
                    }, 500);
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                const mobileNav = document.getElementById('mobileNav');
                const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                
                if (mobileNav.classList.contains('active') &&
                    !mobileNav.contains(e.target) &&
                    !mobileMenuBtn.contains(e.target)) {
                    mobileNav.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                }
            });

            // Close mobile menu on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    const mobileNav = document.getElementById('mobileNav');
                    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                    if (mobileNav.classList.contains('active')) {
                        mobileNav.classList.remove('active');
                        mobileMenuBtn.classList.remove('active');
                    }
                }
            });

            // Header scroll effect
            let lastScrollTop = 0;
            const header = document.querySelector('.header');
            
            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                if (scrollTop > lastScrollTop && scrollTop > 100) {
                    // Scrolling down
                    header.style.transform = 'translateY(-100%)';
                } else {
                    // Scrolling up
                    header.style.transform = 'translateY(0)';
                }
                
                lastScrollTop = scrollTop;
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });

        // Page load animations
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
            
            // Animate cards on load
            const cards = document.querySelectorAll('.fade-in');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>
