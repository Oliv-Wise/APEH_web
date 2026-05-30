@extends('layouts.app')

@section('title', 'Pôles & Contact')
@section('meta_description', 'Les pôles d\'action de l\'APEH-France et comment nous contacter.')

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-20 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge bg-white/20 text-white mb-4">Organisation</span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Pôles &amp; Contact</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto">
            APEH-France est organisée en 8 pôles thématiques, chacun animé par un responsable engagé.
        </p>
    </div>
</section>

{{-- Contact général --}}
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-apeh-blue to-apeh-accent rounded-2xl p-8 text-white text-center reveal shadow-xl">
            <span class="text-3xl block mb-3">✉️</span>
            <h2 class="font-display text-2xl font-bold mb-2">Contact général de l'association</h2>
            <p class="text-white/80 mb-4">Pour toute question ou prise de contact :</p>
            <a href="mailto:apeh.france509@gmail.com"
               class="inline-block bg-white text-apeh-blue font-bold px-6 py-3 rounded-lg hover:bg-gray-100 transition-colors text-sm">
                apeh.france509@gmail.com
            </a>
        </div>
    </div>
</section>

{{-- Pôles --}}
<section class="py-16 bg-apeh-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <h2 class="section-title">Nos 8 pôles d'action</h2>
            <p class="section-subtitle">Chaque pôle est piloté par un responsable dédié</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($poles as $i => $pole)
            <div class="card p-6 text-center reveal group hover:shadow-xl transition-shadow duration-300"
                 style="animation-delay: {{ $i * 0.08 }}s;">
                <div class="w-14 h-14 mx-auto rounded-2xl bg-apeh-light group-hover:bg-apeh-blue transition-colors duration-300 flex items-center justify-center text-2xl mb-4">
                    {{ $pole['icon'] }}
                </div>
                <h3 class="font-display font-bold text-apeh-blue text-base mb-2 leading-snug">{{ $pole['name'] }}</h3>
                <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Responsable</p>
                <p class="text-sm font-semibold text-gray-700">{{ $pole['responsable'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Réseaux sociaux --}}
<section class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <h2 class="section-title">Suivez-nous sur les réseaux</h2>
        <p class="section-subtitle mb-10">Restez informé de nos actualités et événements</p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://www.facebook.com/apehfrance509/"
               target="_blank" rel="noopener noreferrer"
               class="flex items-center gap-3 bg-blue-600 text-white px-6 py-4 rounded-xl hover:bg-blue-700 transition-colors font-semibold">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                Facebook
            </a>
            <a href="https://www.instagram.com/apeh.france/?hl=am-et"
               target="_blank" rel="noopener noreferrer"
               class="flex items-center gap-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white px-6 py-4 rounded-xl hover:opacity-90 transition-opacity font-semibold">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                Instagram
            </a>
            <a href="https://www.linkedin.com/company/association-des-%C3%A9tudiants-et-professionnels-haitiens-de-fance/"
               target="_blank" rel="noopener noreferrer"
               class="flex items-center gap-3 bg-blue-700 text-white px-6 py-4 rounded-xl hover:bg-blue-800 transition-colors font-semibold">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                LinkedIn
            </a>
        </div>
    </div>
</section>

@endsection
