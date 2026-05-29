@extends('layouts.app')

@section('title', 'Valeurs & Vision')
@section('meta_description', 'Les valeurs et la vision de l\'APEH-France : solidarité, excellence, ouverture et fierté haïtienne.')

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-20 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge bg-white/20 text-white mb-4">Ce qui nous guide</span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Valeurs &amp; Vision</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto">
            Les principes fondamentaux qui animent chacune de nos actions et définissent notre identité associative.
        </p>
    </div>
</section>

{{-- Slogan --}}
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <div class="bg-gradient-to-r from-apeh-blue to-apeh-accent rounded-3xl p-10 text-white shadow-2xl">
            <p class="text-sm font-semibold uppercase tracking-widest text-white/70 mb-4">Notre slogan</p>
            <blockquote class="font-display text-3xl md:text-4xl font-bold leading-tight mb-6">
                "Ensemble, nous bâtissons l'avenir"
            </blockquote>
            <p class="text-white/80 text-lg leading-relaxed max-w-2xl mx-auto">
                Ce slogan reflète notre conviction profonde : c'est dans l'union, la solidarité et l'action collective que nous pouvons construire un avenir meilleur pour notre communauté.
            </p>
        </div>
    </div>
</section>

{{-- Valeurs --}}
<section class="py-20 bg-apeh-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="badge bg-apeh-blue text-white mb-4">Nos piliers</span>
            <h2 class="section-title">Nos valeurs fondamentales</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($values as $i => $value)
            <div class="card p-8 reveal group hover:border-l-4 hover:border-apeh-blue transition-all duration-300"
                 style="animation-delay: {{ $i * 0.1 }}s;">
                <div class="w-16 h-16 rounded-2xl bg-apeh-light group-hover:bg-apeh-blue transition-colors duration-300 flex items-center justify-center text-3xl mb-5 shadow-sm">
                    {{ $value['icon'] }}
                </div>
                <h3 class="font-display font-bold text-apeh-blue text-xl mb-3">{{ $value['title'] }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ $value['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Vision --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <span class="badge bg-apeh-gold text-white mb-4">Notre vision</span>
            <h2 class="section-title">Où allons-nous ?</h2>
        </div>

        <div class="space-y-6 reveal">
            <div class="flex gap-4 p-6 bg-apeh-light rounded-2xl">
                <span class="text-2xl flex-shrink-0">🎯</span>
                <div>
                    <h3 class="font-bold text-apeh-blue mb-2">Réussite académique et professionnelle</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Nous voulons que chaque membre de l'APEH-France puisse atteindre ses objectifs académiques et professionnels grâce au soutien de la communauté.</p>
                </div>
            </div>
            <div class="flex gap-4 p-6 bg-apeh-light rounded-2xl">
                <span class="text-2xl flex-shrink-0">🌉</span>
                <div>
                    <h3 class="font-bold text-apeh-blue mb-2">Pont entre Haïti et la France</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Renforcer les liens entre les institutions haïtiennes et françaises pour une coopération durable et bénéfique pour les deux pays.</p>
                </div>
            </div>
            <div class="flex gap-4 p-6 bg-apeh-light rounded-2xl">
                <span class="text-2xl flex-shrink-0">🏆</span>
                <div>
                    <h3 class="font-bold text-apeh-blue mb-2">Rayonnement de la culture haïtienne</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Faire connaître et valoriser la richesse de la culture haïtienne en France, à travers des événements, des échanges et des célébrations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-apeh-red text-white">
    <div class="max-w-3xl mx-auto px-4 text-center reveal">
        <h2 class="font-display text-3xl font-bold mb-4">Partagez nos valeurs ?</h2>
        <p class="text-white/80 mb-8">Rejoignez une communauté qui place l'humain au cœur de tout.</p>
        <a href="{{ route('member.create') }}" class="bg-white text-apeh-red font-bold px-8 py-4 rounded-lg hover:bg-gray-100 transition-colors">
            Devenir membre
        </a>
    </div>
</section>

@endsection
