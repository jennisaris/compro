<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
            </div>
            
            <nav class="mt-4">
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-700">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
                
                @if(auth()->user()->isAdmin())
                <a href="{{ route('hero-sections.index') }}" class="block px-4 py-2 hover:bg-gray-700">
                    <i class="fas fa-image mr-2"></i> Hero Sections
                </a>
                
                <a href="{{ route('about-us.index') }}" class="block px-4 py-2 hover:bg-gray-700">
                    <i class="fas fa-info-circle mr-2"></i> About Us
                </a>
                @endif
                
                <a href="{{ route('services.index') }}" class="block px-4 py-2 hover:bg-gray-700">
                    <i class="fas fa-cogs mr-2"></i> Services
                </a>
                
                <a href="{{ route('projects.index') }}" class="block px-4 py-2 hover:bg-gray-700">
                    <i class="fas fa-project-diagram mr-2"></i> Projects
                </a>
                
                <a href="{{ route('team.index') }}" class="block px-4 py-2 hover:bg-gray-700">
                    <i class="fas fa-users mr-2"></i> Team
                </a>
                
                <a href="{{ route('contact-messages.index') }}" class="block px-4 py-2 hover:bg-gray-700">
                    <i class="fas fa-envelope mr-2"></i> Messages
                </a>

                <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-700">
                    @csrf
                    <button type="submit" class="w-full text-left">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto">
            <div class="container mx-auto px-6 py-8">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>