<aside class="sidebar w-64 bg-white shadow-lg">
    <div class="p-6 flex items-center justify-between border-b border-gray-200">
        <span class="logo-text text-xl font-bold text-indigo-800">Admin</span>
        <button id="toggleSidebar" class="text-gray-600 hover:text-indigo-600">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <nav class="mt-4 px-4 space-y-2 text-sm">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-indigo-100">
            <i class="fas fa-home"></i>
            <span class="nav-text">Dashboard</span>
        </a>
        <a href="{{ route('hero_sections.index') }}" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-indigo-100">
            <i class="fas fa-image"></i>
            <span class="nav-text">Hero Section</span>
        </a>
        <a href="{{ route('company_descriptions.index') }}" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-indigo-100">
            <i class="fas fa-building"></i>
            <span class="nav-text">Company</span>
        </a>
        <a href="{{ route('about_us.index') }}" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-indigo-100">
            <i class="fas fa-user-friends"></i>
            <span class="nav-text">About Us</span>
        </a>
        <a href="{{ route('services.index') }}" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-indigo-100">
            <i class="fas fa-cogs"></i>
            <span class="nav-text">Services</span>
        </a>
        <a href="{{ route('projects.index') }}" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-indigo-100">
            <i class="fas fa-briefcase"></i>
            <span class="nav-text">Projects</span>
        </a>
        <a href="{{ route('contact_messages.index') }}" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-indigo-100">
            <i class="fas fa-envelope"></i>
            <span class="nav-text">Messages</span>
        </a>
    </nav>
</aside>
