@extends('layouts.app')

@section('title', $article->titre)
@section('meta_description', $article->excerpt)

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-16 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('articles.index') }}"
           class="inline-flex items-center gap-2 text-white/70 hover:text-white text-sm mb-6 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Retour aux articles
        </a>
        <div class="flex items-center gap-3 mb-4">
            <span class="badge bg-white/20 text-white">Article</span>
            <time class="text-white/70 text-sm" datetime="{{ $article->date_publication->format('Y-m-d') }}">
                {{ $article->date_publication->translatedFormat('d F Y') }}
            </time>
        </div>
        <h1 class="font-display text-3xl md:text-4xl font-bold leading-tight">{{ $article->titre }}</h1>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            {{-- Article content --}}
            <div class="lg:col-span-2">
                <div class="card p-8 md:p-10">
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        {!! nl2br(e($article->contenu)) !!}
                    </div>
                </div>

                <div class="mt-8 flex items-center justify-between">
                    <a href="{{ route('articles.index') }}"
                       class="btn-secondary text-sm">
                        ← Tous les articles
                    </a>
                    <div class="flex items-center gap-3">
                        <span class="text-sm text-gray-500">Partager :</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                           target="_blank" rel="noopener noreferrer"
                           class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors"
                           aria-label="Partager sur Facebook">Facebook</a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->titre) }}"
                           target="_blank" rel="noopener noreferrer"
                           class="text-sky-500 hover:text-sky-700 text-sm font-medium transition-colors"
                           aria-label="Partager sur Twitter">Twitter</a>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="lg:col-span-1">
                @if($recent->count() > 0)
                <div class="card p-6 sticky top-24">
                    <h3 class="font-display font-bold text-apeh-blue text-lg mb-5 pb-3 border-b border-gray-100">
                        Articles récents
                    </h3>
                    <div class="space-y-4">
                        @foreach($recent as $r)
                        <a href="{{ route('articles.show', $r->id) }}"
                           class="block group">
                            <p class="text-sm font-semibold text-gray-800 group-hover:text-apeh-red transition-colors leading-snug mb-1">
                                {{ $r->titre }}
                            </p>
                            <time class="text-xs text-gray-400">
                                {{ $r->date_publication->translatedFormat('d F Y') }}
                            </time>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                <div class="card p-6 mt-6 bg-apeh-blue text-white text-center">
                    <h3 class="font-display font-bold text-lg mb-3">Rejoignez-nous !</h3>
                    <p class="text-white/80 text-sm mb-4">Devenez membre de APEH-France et participez à nos activités.</p>
                    <a href="{{ route('member.create') }}"
                       class="bg-white text-apeh-blue font-bold px-4 py-2 rounded-lg text-sm hover:bg-gray-100 transition-colors block">
                        Devenir membre
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection
