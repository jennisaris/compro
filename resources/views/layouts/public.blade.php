<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name', 'NexaCore') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .hero-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }

        .fade-in {
            animation: fadeIn 1s ease-in;
        }

        .scroll-down {
            animation: bounce 2s infinite;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card {
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            background-color: #f8fafc;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-blue-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-700">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({ top: targetElement.offsetTop - 80, behavior: 'smooth' });
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        const backToTopButton = document.getElementById('backToTop');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>
