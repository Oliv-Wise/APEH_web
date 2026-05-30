@extends('layouts.app')

@section('title', 'Accueil')
@section('meta_description', 'APEH-France – Association des Professionnels et Étudiants Haïtiens de France. Solidarité, réussite et culture haïtienne.')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="relative hero-animated min-h-[90vh] flex items-center justify-center overflow-hidden">
    {{-- Overlay pattern --}}
    <div class="absolute inset-0 opacity-10"
         style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
    </div>

    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        {{-- Badge --}}
        <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full px-4 py-2 text-sm font-medium mb-8 fade-in-up">
            <span>🇭🇹</span>
            <span>Association loi 1901 – Fondée en 2023</span>
        </div>

        {{-- Titre principal --}}
        <h1 class="font-display text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6 fade-in-up"
            style="animation-delay: 0.1s;">
            Ensemble, nous<br>
            <span class="text-apeh-gold">bâtissons l'avenir</span>
        </h1>

        {{-- Sous-titre --}}
        <p class="text-lg sm:text-xl md:text-2xl text-white/85 max-w-3xl mx-auto mb-10 leading-relaxed fade-in-up"
           style="animation-delay: 0.2s;">
            APEH-France rassemble les professionnels et étudiants haïtiens de France autour de la solidarité, de la culture et de la réussite.
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 fade-in-up"
             style="animation-delay: 0.3s;">
            <a href="{{ route('member.create') }}"
               class="btn-primary text-base px-8 py-4 shadow-2xl hover:scale-105 transition-transform duration-200">
                Devenir membre
            </a>
            <a href="{{ route('donate') }}"
               class="btn-outline text-base px-8 py-4 hover:scale-105 transition-transform duration-200">
                Faire un don
            </a>
            <a href="{{ route('about') }}"
               class="text-white/80 hover:text-white underline underline-offset-4 text-sm font-medium transition-colors">
                En savoir plus →
            </a>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-3 gap-6 mt-16 max-w-lg mx-auto fade-in-up" style="animation-delay: 0.4s;">
            <div class="text-center">
                <p class="text-3xl font-bold text-apeh-gold">8</p>
                <p class="text-xs text-white/70 mt-1">Pôles actifs</p>
            </div>
            <div class="text-center border-x border-white/20">
                <p class="text-3xl font-bold text-apeh-gold">2023</p>
                <p class="text-xs text-white/70 mt-1">Année de création</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-apeh-gold">🇫🇷</p>
                <p class="text-xs text-white/70 mt-1">Basée à Lille</p>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </div>
</section>

{{-- ============================================================
     PRÉSENTATION
     ============================================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <span class="badge bg-apeh-light text-apeh-blue mb-4">Notre association</span>
                <h2 class="section-title">Qui est APEH-France ?</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Bienvenue dans l'Association des Professionnels et Étudiants Haïtiens de France — une communauté dynamique d'Haïtiens résidant en France, composée d'étudiants et de professionnels engagés.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Notre mission est de semer l'espoir, d'apporter du réconfort et de créer des liens solides basés sur l'amitié, la solidarité et l'entraide. Nous croyons que chaque individu mérite d'être soutenu, peu importe son parcours.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8">
                    À travers nos actions, nous cherchons à inspirer et à encourager notre communauté, tout en valorisant la richesse de la culture haïtienne en France.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('about') }}" class="btn-secondary">Découvrir notre histoire</a>
                    <a href="{{ route('join') }}" class="btn-primary">Pourquoi nous rejoindre ?</a>
                </div>
            </div>
            <div class="reveal grid grid-cols-2 gap-4">
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/formation.jpg') }}"
                         alt="Formation APEH"
                         class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg mt-8">
                    <img src="{{ asset('images/welcome.jpeg') }}"
                         alt="Welcome to France"
                         class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/bicolores.jpeg') }}"
                         alt="Bicolore haïtien"
                         class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg mt-8">
                    <img src="{{ asset('images/Talkshow.jpeg') }}"
                         alt="Talkshow APEH"
                         class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     MISSIONS
     ============================================================ --}}
<section class="py-20 bg-apeh-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="badge bg-apeh-blue text-white mb-4">Ce que nous faisons</span>
            <h2 class="section-title">Nos missions</h2>
            <p class="section-subtitle">Des actions concrètes pour la communauté haïtienne en France</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $missions = [
                ['icon' => '🎓', 'title' => 'Soutien académique',        'desc' => 'Accompagnement dans les études, tutorat et orientation professionnelle pour les étudiants haïtiens.', 'color' => 'blue'],
                ['icon' => '🤝', 'title' => 'Solidarité & Entraide',     'desc' => 'Soutien mutuel entre membres, aide à l\'intégration et accompagnement dans les démarches administratives.', 'color' => 'green'],
                ['icon' => '🎭', 'title' => 'Culture haïtienne',         'desc' => 'Célébration du bicolore, galas, talkshows et événements culturels pour valoriser notre identité.', 'color' => 'red'],
                ['icon' => '💼', 'title' => 'Insertion professionnelle', 'desc' => 'Mise en réseau, ateliers de préparation à l\'emploi et connexion avec des professionnels établis.', 'color' => 'purple'],
                ['icon' => '🏠', 'title' => 'Accueil & Intégration',     'desc' => 'Programme "Welcome to France" pour accueillir les nouveaux arrivants et faciliter leur installation.', 'color' => 'orange'],
                ['icon' => '🌍', 'title' => 'Coopération franco-haïtienne', 'desc' => 'Renforcement des liens entre les institutions haïtiennes et françaises pour un avenir commun.', 'color' => 'indigo'],
            ];
            @endphp

            @foreach($missions as $i => $mission)
            <div class="card p-6 reveal" style="animation-delay: {{ $i * 0.1 }}s;">
                <div class="w-14 h-14 rounded-2xl bg-apeh-light flex items-center justify-center text-2xl mb-4">
                    {{ $mission['icon'] }}
                </div>
                <h3 class="font-display font-bold text-apeh-blue text-lg mb-2">{{ $mission['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $mission['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     VALEURS
     ============================================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="badge bg-apeh-gold text-white mb-4">Ce qui nous unit</span>
            <h2 class="section-title">Nos valeurs</h2>
            <p class="section-subtitle">Les piliers qui guident chacune de nos actions</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            @php
            $values = [
                ['icon' => '🤝', 'label' => 'Solidarité'],
                ['icon' => '🎓', 'label' => 'Excellence'],
                ['icon' => '🌍', 'label' => 'Ouverture'],
                ['icon' => '🇭🇹', 'label' => 'Fierté'],
                ['icon' => '🏗️', 'label' => 'Engagement'],
                ['icon' => '🤲', 'label' => 'Entraide'],
            ];
            @endphp

            @foreach($values as $value)
            <div class="reveal text-center group">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-apeh-light group-hover:bg-apeh-blue transition-colors duration-300 flex items-center justify-center text-2xl mb-3 shadow-sm">
                    {{ $value['icon'] }}
                </div>
                <p class="font-semibold text-apeh-blue text-sm">{{ $value['label'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10 reveal">
            <a href="{{ route('values') }}" class="btn-secondary">Découvrir nos valeurs en détail</a>
        </div>
    </div>
</section>

{{-- ============================================================
     PÔLES
     ============================================================ --}}
<section class="py-20 bg-gradient-to-br from-apeh-blue to-apeh-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="badge bg-white/20 text-white mb-4">Organisation</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-4">Nos 8 pôles d'action</h2>
            <p class="text-white/70 max-w-2xl mx-auto">Chaque pôle est animé par des membres passionnés et engagés pour notre communauté</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
            @php
            $poles = [
                ['icon' => '🏠', 'name' => 'Intégration'],
                ['icon' => '🤝', 'name' => 'Soutien & Solidarité'],
                ['icon' => '🎓', 'name' => 'Études & Orientation'],
                ['icon' => '🎉', 'name' => 'Événementiel'],
                ['icon' => '🍽️', 'name' => 'Culinaire'],
                ['icon' => '📦', 'name' => 'Logistique'],
                ['icon' => '📡', 'name' => 'Multimédia & Com.'],
                ['icon' => '🎭', 'name' => 'Culturel'],
            ];
            @endphp

            @foreach($poles as $pole)
            <div class="reveal bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-4 text-center hover:bg-white/20 transition-colors duration-200">
                <span class="text-2xl block mb-2">{{ $pole['icon'] }}</span>
                <p class="text-sm font-medium text-white/90">{{ $pole['name'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center reveal">
            <a href="{{ route('poles') }}" class="btn-outline">Voir tous les pôles et contacts</a>
        </div>
    </div>
</section>

{{-- ============================================================
     ARTICLES RÉCENTS
     ============================================================ --}}
@if($recentArticles->count() > 0)
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-end justify-between mb-12 reveal">
            <div>
                <span class="badge bg-apeh-light text-apeh-blue mb-3">Actualités</span>
                <h2 class="section-title mb-0">Derniers articles</h2>
            </div>
            <a href="{{ route('articles.index') }}" class="text-apeh-accent hover:text-apeh-blue font-medium text-sm transition-colors hidden sm:block">
                Tous les articles →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($recentArticles as $article)
            <article class="card group reveal">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="badge bg-apeh-light text-apeh-blue text-xs">Article</span>
                        <time class="text-xs text-gray-400" datetime="{{ $article->date_publication->format('Y-m-d') }}">
                            {{ $article->date_publication->translatedFormat('d F Y') }}
                        </time>
                    </div>
                    <h3 class="font-display font-bold text-apeh-blue text-lg mb-3 group-hover:text-apeh-red transition-colors leading-snug">
                        {{ $article->titre }}
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-4">
                        {{ $article->excerpt }}
                    </p>
                    <a href="{{ route('articles.show', $article->id) }}"
                       class="text-apeh-accent hover:text-apeh-blue font-medium text-sm transition-colors">
                        Lire la suite →
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        <div class="text-center mt-10 sm:hidden reveal">
            <a href="{{ route('articles.index') }}" class="btn-secondary">Tous les articles</a>
        </div>
    </div>
</section>
@endif

{{-- ============================================================
     APPEL À L'ACTION
     ============================================================ --}}
<section class="py-24 bg-gradient-to-r from-apeh-red to-red-800 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5"
         style="background-image: url('data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'20\' cy=\'20\' r=\'3\'/%3E%3C/g%3E%3C/svg%3E');">
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <h2 class="font-display text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
            Rejoignez la communauté APEH-France
        </h2>
        <p class="text-white/85 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Que vous soyez étudiant, professionnel ou sympathisant, votre place est parmi nous. Ensemble, nous construisons un avenir meilleur pour la communauté haïtienne en France.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('member.create') }}"
               class="bg-white text-apeh-red font-bold px-8 py-4 rounded-lg shadow-xl hover:bg-gray-100 hover:scale-105 transition-all duration-200 text-base">
                Devenir membre gratuitement
            </a>
            <a href="{{ route('donate') }}"
               class="btn-outline text-base px-8 py-4 hover:scale-105 transition-transform duration-200">
                Soutenir l'association
            </a>
        </div>
        <p class="text-white/60 text-sm mt-6">
            Adhésion gratuite · Communauté bienveillante · Événements réguliers
        </p>
    </div>
</section>

@endsection
