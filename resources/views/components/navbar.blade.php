<header class="fixed top-0 w-full bg-white shadow-sm border-b border-gray-200 z-50 mb-5" x-data="{ isOpen: false }" @keydown.escape.window="isOpen = false">
    <div class="container mx-auto px-5 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <div class="text-3xl">🧠</div>
            <span class="text-2xl font-bold text-blue-700">Senandika</span>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8">
            {{--
                The x-nav-link component should internally handle the active state
                and apply classes like 'text-blue-700 bg-blue-100 rounded-md' when active.
                For hover, we apply hover classes directly.
                Note: For anchor links (#home, #resources, #about), the :active="request()->is(...)"
                will not work as it's for full URLs. The JavaScript IntersectionObserver will
                handle adding the 'active' class for these links based on scroll position.
            --}}
            <x-nav-link href="/dashboard" :active="request()->is('/')"
                class="text-gray-900 font-medium px-4 py-2 rounded-md transition-all duration-200 ease-in-out hover:text-blue-700 hover:bg-blue-100">
                Dashboard
            </x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')"
                class="text-gray-900 font-medium px-4 py-2 rounded-md transition-all duration-200 ease-in-out hover:text-blue-700 hover:bg-blue-100">
                Articles
            </x-nav-link>
            <x-nav-link href="/chat" :active="request()->is('chat')"
                class="text-gray-900 font-medium px-4 py-2 rounded-md transition-all duration-200 ease-in-out hover:text-blue-700 hover:bg-blue-100">
                Chat
            </x-nav-link>
        </nav>

        <!-- Profile Dropdown (Desktop) -->
        <div class="hidden md:flex items-center space-x-4">
            @php
                $user = Auth::user();
                $imageUrl = $user->image ? asset('storage/' . $user->image) : 'https://placehold.co/32x32/E2E8F0/A0AEC0?text=P';
            @endphp
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center focus:outline-none rounded-full transition-all duration-200 ease-in-out hover:shadow-md">
                    <img class="w-8 h-8 rounded-full" src="{{ $imageUrl }}" alt="Foto Profil">
                </button>
                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 py-1 border border-gray-100">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-900 hover:bg-gray-100 rounded-md mx-1 my-0.5 transition-colors duration-150 ease-in-out">Your Profile</a>
                    <a href="/logout" class="block px-4 py-2 text-sm text-gray-900 hover:bg-gray-100 rounded-md mx-1 my-0.5 transition-colors duration-150 ease-in-out">Sign out</a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="isOpen = !isOpen" class="md:hidden focus:outline-none p-2">
            <svg x-show="!isOpen" class="w-6 h-6 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="isOpen" x-cloak class="w-6 h-6 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobileNav" x-show="isOpen" x-cloak @click.away="isOpen = false" class="md:hidden border-t border-gray-200">
        <nav class="px-4 py-4 space-y-1">
            <x-nav-link href="#home" :active="request()->is('/')"
                class="block px-4 py-3 rounded-md text-sm text-gray-900 font-medium transition-all duration-200 ease-in-out hover:text-blue-700 hover:bg-blue-100">
                Dashboard
            </x-nav-link>
            <x-nav-link href="#resources" :active="request()->is('posts')"
                class="block px-4 py-3 rounded-md text-sm text-gray-900 font-medium transition-all duration-200 ease-in-out hover:text-blue-700 hover:bg-blue-100">
                Articles
            </x-nav-link>
            <x-nav-link href="#about" :active="request()->is('about')"
                class="block px-4 py-3 rounded-md text-sm text-gray-900 font-medium transition-all duration-200 ease-in-out hover:text-blue-700 hover:bg-blue-100">
                About
            </x-nav-link>
        </nav>
        <div class="border-t border-gray-100 pt-4 px-4 pb-6 flex items-center">
            <img src="{{ $imageUrl }}" class="w-10 h-10 rounded-full mr-3" alt="Foto Profil">
            <div>
                <p class="text-sm font-medium text-gray-900">{{ $user->name ?? 'User' }}</p>
                <p class="text-xs text-gray-500">{{ $user->email ?? 'email@example.com' }}</p>
            </div>
        </div>
        <div class="px-4 space-y-1 pb-4">
            <a href="/profile" class="block px-4 py-3 rounded-md text-sm text-gray-900 hover:bg-gray-100">Your Profile</a>
            <a href="/logout" class="block px-4 py-3 rounded-md text-sm text-gray-900 hover:bg-gray-100">Sign out</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link, .nav-link-mobile');

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');

                    if (targetId && targetId.startsWith('#')) {
                        e.preventDefault();

                        const targetSection = document.querySelector(targetId);
                        if (targetSection) {
                            targetSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }

                        // Close mobile menu after clicking a link, by setting Alpine's isOpen to false
                        const headerElement = document.querySelector('header[x-data]');
                        if (headerElement && headerElement.__alpine && headerElement.__alpine.$data) {
                            headerElement.__alpine.$data.isOpen = false;
                        }
                    }
                });
            });

            const sections = document.querySelectorAll('section[id]');
            const observerOptions = {
                rootMargin: '-50px 0px -50px 0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute('id');
                        const correspondingNavLink = document.querySelector(`.nav-link[href="#${id}"]`);

                        if (correspondingNavLink) {
                            const allNavLinks = document.querySelectorAll('.nav-link');
                            allNavLinks.forEach(link => link.classList.remove('active'));
                            correspondingNavLink.classList.add('active');
                        }
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });

            const animateOnScroll = () => {
                // Note: The CSS for 'fade-in-up' animation is not included in this component.
                // Ensure it's defined globally in your CSS or a separate style block.
                const elements = document.querySelectorAll('.sign-card, .disorder-card, .resource-card, .aspect-card');

                elements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;

                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('fade-in-up');
                    }
                });
            };

            let ticking = false;
            const throttledAnimateOnScroll = () => {
                if (!ticking) {
                    requestAnimationFrame(() => {
                        animateOnScroll();
                        ticking = false;
                    });
                    ticking = true;
                }
            };

            window.addEventListener('scroll', throttledAnimateOnScroll);
            animateOnScroll();

            const contactForm = document.querySelector('.contact-form form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const formData = new FormData(this);
                    const name = formData.get('name');
                    const email = formData.get('email');
                    const subject = formData.get('subject');
                    const message = formData.get('message');

                    if (!name || !email || !subject || !message) {
                        console.log('Mohon lengkapi semua field yang diperlukan.');
                        return;
                    }

                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email)) {
                        console.log('Format email tidak valid.');
                        return;
                    }

                    const submitBtn = this.querySelector('button[type="submit"]');
                    const originalText = submitBtn.textContent;

                    submitBtn.textContent = 'Mengirim...';
                    submitBtn.disabled = true;

                    setTimeout(() => {
                        console.log('Pesan Anda telah berhasil dikirim! Kami akan segera merespons.');
                        this.reset();
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    }, 2000);
                });
            }

            const disorderBtns = document.querySelectorAll('.disorder-btn');
            disorderBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const disorderCard = this.closest('.disorder-card');
                    const disorderTitle = disorderCard.querySelector('h3').textContent;

                    console.log(`Informasi lebih lanjut tentang ${disorderTitle} akan segera tersedia. Terima kasih atas minat Anda!`);
                });
            });

            const resourceLinks = document.querySelectorAll('.resource-link');
            resourceLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const resourceCard = this.closest('.resource-card');
                    const resourceTitle = resourceCard.querySelector('h3').textContent;

                    console.log(`${resourceTitle} akan segera tersedia. Terima kasih atas minat Anda!`);
                });
            });
        });

        window.addEventListener('load', function() {
            document.body.classList.add('loaded');

            const cards = document.querySelectorAll('.sign-card, .disorder-card, .resource-card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</header>
