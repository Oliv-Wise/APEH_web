@extends('layouts.app')

@section('title', 'Articles')
@section('meta_description', 'Actualités et articles de l\'APEH-France.')

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-20 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge bg-white/20 text-white mb-4">Actualités</span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Nos articles</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto">
            Restez informé des actualités, événements et initiatives de l'APEH-France.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if($articles->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($articles as $i => $article)
                <article class="card group reveal" style="animation-delay: {{ ($i % 3) * 0.1 }}s;">
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="badge bg-apeh-light text-apeh-blue text-xs">Article</span>
                            <time class="text-xs text-gray-400" datetime="{{ $article->date_publication->format('Y-m-d') }}">
                                {{ $article->date_publication->translatedFormat('d F Y') }}
                            </time>
                        </div>
                        <h2 class="font-display font-bold text-apeh-blue text-xl mb-3 group-hover:text-apeh-red transition-colors leading-snug">
                            {{ $article->titre }}
                        </h2>
                        <p class="text-gray-500 text-sm leading-relaxed mb-5">
                            {{ $article->excerpt }}
                        </p>
                        <a href="{{ route('articles.show', $article->id) }}"
                           class="inline-flex items-center gap-1 text-apeh-accent hover:text-apeh-blue font-semibold text-sm transition-colors">
                            Lire la suite
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="flex justify-center reveal">
                {{ $articles->links() }}
            </div>

        @else
            <div class="text-center py-20 reveal">
                <span class="text-6xl block mb-6">📰</span>
                <h2 class="font-display text-2xl font-bold text-apeh-blue mb-3">Aucun article pour le moment</h2>
                <p class="text-gray-500 mb-8">Les articles seront publiés prochainement. Revenez bientôt !</p>
                <a href="{{ route('home') }}" class="btn-secondary">Retour à l'accueil</a>
            </div>
        @endif
    </div>
</section>

@endsection
