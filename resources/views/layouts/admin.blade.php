<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            transition: all 0.3s ease;
        }
        .sidebar.collapsed {
            width: 70px;
        }
        .sidebar.collapsed .nav-text,
        .sidebar.collapsed .logo-text {
            display: none;
        }
        .content {
            transition: all 0.3s ease;
        }
        .content.expanded {
            margin-left: 70px;
        }
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                z-index: 1000;
                left: -250px;
            }
            .sidebar.active {
                left: 0;
            }
            .content {
                margin-left: 0 !important;
            }
            .mobile-menu-btn {
                display: block;
            }
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="flex h-screen overflow-hidden">
        @include('partials.admin-sidebar')

        <!-- Mobile menu button -->
        <button id="mobileMenuBtn" class="mobile-menu-btn fixed top-4 left-4 z-50 bg-indigo-800 text-white p-2 rounded-lg md:hidden">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Main Content -->
        <div class="content flex-1 overflow-auto ml-64">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm p-4 flex items-center justify-between">
                <h1 class="text-xl font-semibold text-gray-800">@yield('page_title', 'Dashboard')</h1>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-bell text-gray-600"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="border rounded-lg pl-8 pr-4 py-1 text-sm">
                        <i class="fas fa-search absolute left-2 top-2 text-gray-400"></i>
                    </div>
                </div>
            </header>

            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.querySelector('.sidebar');
        const content = document.querySelector('.content');

        let isCollapsed = false;

        toggleSidebar?.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('expanded');
            isCollapsed = !isCollapsed;

            toggleSidebar.innerHTML = isCollapsed
                ? '<i class="fas fa-bars"></i>'
                : '<i class="fas fa-times"></i>';
        });

        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        mobileMenuBtn?.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            mobileMenuBtn.innerHTML = sidebar.classList.contains('active')
                ? '<i class="fas fa-times"></i>'
                : '<i class="fas fa-bars"></i>';
        });

        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 768 && !sidebar.contains(e.target) && e.target !== mobileMenuBtn) {
                sidebar.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            }
        });

        function handleResize() {
            if (window.innerWidth > 768) {
                sidebar.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            }
        }

        window.addEventListener('resize', handleResize);
    </script>
</body>
</html>
