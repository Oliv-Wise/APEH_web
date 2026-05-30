@extends('layouts.app')

@section('title', 'Pourquoi nous rejoindre ?')
@section('meta_description', 'Découvrez pourquoi rejoindre l\'APEH-France : réseau, soutien, culture et intégration.')

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-20 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge bg-white/20 text-white mb-4">Rejoignez-nous</span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Pourquoi nous rejoindre ?</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto">
            Découvrez tout ce que APEH-France peut vous apporter dans votre parcours en France.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @foreach($reasons as $i => $reason)
            <div class="card p-8 reveal group" style="animation-delay: {{ $i * 0.1 }}s;">
                <div class="w-14 h-14 rounded-2xl bg-apeh-light group-hover:bg-apeh-blue transition-colors duration-300 flex items-center justify-center text-2xl mb-5">
                    {{ $reason['icon'] }}
                </div>
                <h3 class="font-display font-bold text-apeh-blue text-xl mb-3">{{ $reason['title'] }}</h3>
                <p class="text-gray-500 leading-relaxed text-sm">{{ $reason['description'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- Témoignage fictif / citation --}}
        <div class="bg-apeh-light rounded-3xl p-10 text-center reveal">
            <p class="text-2xl font-display font-bold text-apeh-blue mb-4">
                "APEH-France m'a permis de trouver ma place en France tout en restant fier de mes racines haïtiennes."
            </p>
            <p class="text-gray-500 text-sm">— Un membre de APEH-France</p>
        </div>
    </div>
</section>

<section class="py-20 bg-apeh-blue text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">Prêt à faire partie de l'aventure ?</h2>
        <p class="text-white/80 text-lg mb-10 max-w-2xl mx-auto">
            L'adhésion est gratuite et ouverte à tous les professionnels, étudiants et sympathisants haïtiens de France.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('member.create') }}"
               class="bg-white text-apeh-blue font-bold px-8 py-4 rounded-lg hover:bg-gray-100 hover:scale-105 transition-all duration-200 text-base">
                S'inscrire maintenant
            </a>
            <a href="{{ route('donate') }}" class="btn-outline text-base px-8 py-4">
                Soutenir financièrement
            </a>
        </div>
    </div>
</section>

@endsection
