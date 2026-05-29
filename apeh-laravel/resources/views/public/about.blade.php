@extends('layouts.app')

@section('title', 'Qui sommes-nous ?')
@section('meta_description', 'Découvrez l\'APEH-France, association des professionnels et étudiants haïtiens de France.')

@section('content')

{{-- Page Hero --}}
<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-20 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge bg-white/20 text-white mb-4">Notre histoire</span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Qui sommes-nous ?</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto">
            Une communauté dynamique d'Haïtiens résidant en France, unie par la solidarité, la culture et la réussite.
        </p>
    </div>
</section>

{{-- Présentation --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none text-gray-600 space-y-6 reveal">
            <p class="text-xl text-gray-700 font-medium leading-relaxed">
                Bienvenue sur le site de l'Association des professionnels et étudiants haïtiens de France (APEH-France), une communauté dynamique d'Haïtiens résidant en France, composée d'étudiants et de professionnels.
            </p>
            <p class="leading-relaxed">
                Notre mission est de semer l'espoir et d'apporter du réconfort à ceux qui en ont besoin, en offrant un soutien chaleureux et une présence bienveillante.
            </p>
            <p class="leading-relaxed">
                Nous croyons fermement que chaque individu mérite d'être soutenu, peu importe son parcours ou ses circonstances. À travers nos actions, nous cherchons à créer des liens solides basés sur l'amitié, la solidarité et l'entraide.
            </p>
            <p class="leading-relaxed">
                Que ce soit en partageant nos expériences, en organisant des événements enrichissants, ou en fournissant des ressources utiles, nous nous engageons à inspirer et à encourager notre communauté.
            </p>
            <p class="leading-relaxed">
                Rejoignez-nous dans cette aventure humaine où chaque interaction est une opportunité de grandir ensemble et de contribuer positivement à la société.
            </p>
        </div>
    </div>
</section>

{{-- Réalisations --}}
<section class="py-20 bg-apeh-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="badge bg-apeh-blue text-white mb-4">Ce que nous avons accompli</span>
            <h2 class="section-title">Nos réalisations</h2>
            <p class="section-subtitle">Des moments forts qui témoignent de notre engagement</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($achievements as $i => $item)
            <div class="card group reveal" style="animation-delay: {{ $i * 0.08 }}s;">
                <div class="overflow-hidden">
                    <img src="{{ asset($item['image']) }}"
                         alt="{{ $item['title'] }}"
                         class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-500"
                         loading="lazy">
                </div>
                <div class="p-5">
                    <h3 class="font-display font-bold text-apeh-blue text-lg mb-2">{{ $item['title'] }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">{{ $item['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Champs d'activités --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="badge bg-apeh-red text-white mb-4">Nos actions</span>
            <h2 class="section-title">Nos champs d'activités</h2>
            <p class="section-subtitle">
                À travers une diversité d'activités sociales, éducatives et culturelles, l'APEH-France agit concrètement pour favoriser l'unité, l'épanouissement et l'intégration.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
            @foreach($activities as $i => $activity)
            <div class="reveal text-center group" style="animation-delay: {{ $i * 0.1 }}s;">
                <div class="rounded-2xl overflow-hidden shadow-md mb-3 aspect-square">
                    <img src="{{ asset($activity['img']) }}"
                         alt="{{ $activity['title'] }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                         loading="lazy">
                </div>
                <p class="text-sm font-semibold text-apeh-blue">{{ $activity['title'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-apeh-blue text-white">
    <div class="max-w-3xl mx-auto px-4 text-center reveal">
        <h2 class="font-display text-3xl font-bold mb-4">Prêt à nous rejoindre ?</h2>
        <p class="text-white/80 mb-8">Faites partie de cette belle aventure humaine et contribuez à notre communauté.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('member.create') }}" class="btn-primary">Devenir membre</a>
            <a href="{{ route('donate') }}" class="btn-outline">Faire un don</a>
        </div>
    </div>
</section>

@endsection
