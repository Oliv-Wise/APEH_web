<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'APEH-France – Association des Professionnels et Étudiants Haïtiens de France. Solidarité, réussite et culture haïtienne en France.')">
    <meta name="keywords" content="APEH, étudiants haïtiens, diaspora, solidarité, France, association, professionnels">
    <meta name="author" content="APEH-France">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'APEH-France') – APEH-France">
    <meta property="og:description" content="@yield('meta_description', 'Association des Professionnels et Étudiants Haïtiens de France')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <title>@yield('title', 'Accueil') – APEH-France</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo_apeh.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Vite assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    {{-- Header --}}
    @include('components.header')

    {{-- Flash messages --}}
    @if(session('success'))
        <div class="fixed top-20 right-4 z-50 bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg flex items-center gap-2 animate-bounce"
             x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)">
            <span>✓</span> {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="fixed top-20 right-4 z-50 bg-red-500 text-white px-6 py-3 rounded-xl shadow-lg flex items-center gap-2"
             x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
            <span>✕</span> {{ session('error') }}
        </div>
    @endif

    {{-- Main content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    @stack('scripts')
</body>
</html>
