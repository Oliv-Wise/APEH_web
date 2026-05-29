<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin – APEH-France</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo_apeh.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-apeh-blue to-apeh-dark min-h-screen flex items-center justify-center p-4">

<div class="w-full max-w-md">
    {{-- Logo --}}
    <div class="text-center mb-8">
        <img src="{{ asset('images/logo_apeh.png') }}"
             alt="Logo APEH-France"
             class="w-16 h-16 rounded-full object-cover mx-auto mb-4 border-2 border-apeh-gold shadow-lg">
        <h1 class="font-display text-2xl font-bold text-white">APEH-France</h1>
        <p class="text-white/60 text-sm mt-1">Interface d'administration</p>
    </div>

    {{-- Card --}}
    <div class="bg-white rounded-2xl shadow-2xl p-8">
        <h2 class="font-display text-xl font-bold text-apeh-blue mb-6 text-center">Connexion administrateur</h2>

        {{-- Erreurs --}}
        @if($errors->has('credentials'))
        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm flex items-center gap-2" role="alert">
            <span>⚠️</span> {{ $errors->first('credentials') }}
        </div>
        @endif

        @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm flex items-center gap-2" role="alert">
            <span>✓</span> {{ session('success') }}
        </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}" novalidate>
            @csrf

            <div class="mb-5">
                <label for="username" class="form-label">Nom d'utilisateur</label>
                <input type="text" id="username" name="username"
                       value="{{ old('username') }}"
                       class="form-input @error('username') border-red-400 @enderror"
                       required
                       autocomplete="username"
                       aria-required="true"
                       autofocus>
                @error('username')
                    <p class="form-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6" x-data="{ show: false }">
                <label for="password" class="form-label">Mot de passe</label>
                <div class="relative">
                    <input :type="show ? 'text' : 'password'"
                           id="password" name="password"
                           class="form-input pr-12 @error('password') border-red-400 @enderror"
                           required
                           autocomplete="current-password"
                           aria-required="true">
                    <button type="button"
                            @click="show = !show"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none"
                            :aria-label="show ? 'Masquer le mot de passe' : 'Afficher le mot de passe'">
                        <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                        </svg>
                    </button>
                </div>
                @error('password')
                    <p class="form-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn-primary w-full justify-center py-3 text-base">
                Se connecter
            </button>
        </form>
    </div>

    <p class="text-center text-white/50 text-xs mt-6">
        <a href="{{ route('home') }}" class="hover:text-white transition-colors">← Retour au site public</a>
    </p>
</div>

</body>
</html>
