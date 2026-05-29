<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administration') – APEH-France Admin</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo_apeh.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-gray-100 antialiased" x-data="{ sidebarOpen: false }">

<div class="flex h-screen overflow-hidden">

    {{-- Sidebar --}}
    <aside class="hidden md:flex flex-col w-64 bg-apeh-blue text-white flex-shrink-0">
        {{-- Logo --}}
        <div class="flex items-center gap-3 px-6 py-5 border-b border-white/10">
            <img src="{{ asset('images/logo_apeh.png') }}" alt="APEH" class="w-10 h-10 rounded-full object-cover">
            <div>
                <p class="font-display font-bold text-sm leading-tight">APEH-France</p>
                <p class="text-xs text-blue-200">Administration</p>
            </div>
        </div>

        {{-- Nav --}}
        <nav class="flex-1 px-3 py-6 space-y-1 overflow-y-auto">
            <a href="{{ route('admin.dashboard') }}"
               class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'admin-nav-link-active' : '' }}">
                <span>📊</span> Tableau de bord
            </a>
            <a href="{{ route('admin.articles.index') }}"
               class="admin-nav-link {{ request()->routeIs('admin.articles.*') ? 'admin-nav-link-active' : '' }}">
                <span>📝</span> Articles
            </a>
            <a href="{{ route('admin.members.index') }}"
               class="admin-nav-link {{ request()->routeIs('admin.members.*') ? 'admin-nav-link-active' : '' }}">
                <span>👥</span> Membres inscrits
            </a>
            <a href="{{ route('home') }}" target="_blank"
               class="admin-nav-link">
                <span>🌐</span> Voir le site
            </a>
        </nav>

        {{-- Logout --}}
        <div class="px-3 py-4 border-t border-white/10">
            <p class="text-xs text-blue-200 px-4 mb-2">Connecté : <strong>{{ session('admin_username') }}</strong></p>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit"
                        class="w-full admin-nav-link text-red-300 hover:text-red-100 hover:bg-red-900/30">
                    <span>🚪</span> Déconnexion
                </button>
            </form>
        </div>
    </aside>

    {{-- Main --}}
    <div class="flex-1 flex flex-col overflow-hidden">

        {{-- Top bar --}}
        <header class="bg-white shadow-sm px-6 py-4 flex items-center justify-between flex-shrink-0">
            <h1 class="text-lg font-display font-bold text-apeh-blue">@yield('title', 'Administration')</h1>
            <div class="flex items-center gap-4">
                <span class="text-sm text-gray-500">Bonjour, <strong>{{ session('admin_username') }}</strong></span>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-red-600 hover:text-red-800 font-medium transition-colors">
                        Déconnexion
                    </button>
                </form>
            </div>
        </header>

        {{-- Flash messages --}}
        @if(session('success'))
            <div class="mx-6 mt-4 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg flex items-center gap-2">
                <span>✓</span> {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="mx-6 mt-4 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg flex items-center gap-2">
                <span>✕</span> {{ session('error') }}
            </div>
        @endif

        {{-- Content --}}
        <main class="flex-1 overflow-y-auto p-6">
            @yield('content')
        </main>
    </div>
</div>

@stack('scripts')
</body>
</html>
