@extends('layouts.app')

@section('title', 'Faire un don')
@section('meta_description', 'Soutenez l\'APEH-France en faisant un don via HelloAsso. Votre contribution aide notre communauté.')

@section('content')

<section class="bg-gradient-to-br from-apeh-red to-red-900 py-20 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge bg-white/20 text-white mb-4">Soutien financier</span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Faire un don</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto">
            Votre générosité nous permet de mener à bien nos actions éducatives, culturelles et solidaires.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Pourquoi donner --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            @php
            $impacts = [
                ['icon' => '🎓', 'title' => 'Soutien académique',    'desc' => 'Financer des ateliers, du tutorat et des ressources pour les étudiants.'],
                ['icon' => '🎭', 'title' => 'Événements culturels',  'desc' => 'Organiser des galas, talkshows et célébrations de la culture haïtienne.'],
                ['icon' => '🤝', 'title' => 'Aide à l\'intégration', 'desc' => 'Accompagner les nouveaux arrivants dans leurs démarches en France.'],
            ];
            @endphp

            @foreach($impacts as $impact)
            <div class="card p-6 text-center reveal">
                <span class="text-3xl block mb-3">{{ $impact['icon'] }}</span>
                <h3 class="font-bold text-apeh-blue mb-2">{{ $impact['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $impact['desc'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- Widget HelloAsso --}}
        <div class="card p-8 md:p-12 reveal">
            <div class="text-center mb-8">
                <h2 class="font-display text-2xl font-bold text-apeh-blue mb-3">Contribuez à nos projets solidaires</h2>
                <p class="text-gray-500 leading-relaxed max-w-xl mx-auto">
                    Votre soutien nous permet de mener à bien nos actions éducatives, culturelles et solidaires.
                </p>
            </div>

            {{-- Sécurité --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <span class="text-green-500">🔒</span>
                    <span><strong>Aucune donnée bancaire</strong> n'est traitée sur notre site</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <span class="text-blue-500">✓</span>
                    <span>Paiements <strong>100% gérés via HelloAsso</strong></span>
                </div>
            </div>

            {{-- Widget HelloAsso --}}
            <div class="flex justify-center">
                <iframe id="haWidget"
                        allowtransparency="true"
                        src="{{ $widgetUrl }}"
                        class="w-full max-w-lg"
                        style="height: 70px; border: none;"
                        title="Formulaire de don HelloAsso"
                        aria-label="Bouton de don HelloAsso">
                </iframe>
            </div>

            <p class="text-center text-xs text-gray-400 mt-6">
                Vous serez redirigé vers la plateforme sécurisée HelloAsso pour finaliser votre don.
            </p>
        </div>

        {{-- Autres façons d'aider --}}
        <div class="mt-16 text-center reveal">
            <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">D'autres façons de nous aider</h2>
            <p class="text-gray-500 mb-8">Vous pouvez aussi nous soutenir en devenant membre ou en partageant notre association.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('member.create') }}" class="btn-secondary">Devenir membre</a>
                <a href="{{ route('poles') }}" class="btn-outline !border-apeh-blue !text-apeh-blue hover:!bg-apeh-blue hover:!text-white">Nous contacter</a>
            </div>
        </div>
    </div>
</section>

@endsection
