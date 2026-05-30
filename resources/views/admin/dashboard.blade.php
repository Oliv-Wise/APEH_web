@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')

{{-- Stats cards --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-2xl">📝</div>
            <span class="text-xs text-gray-400 font-medium uppercase tracking-wide">Articles</span>
        </div>
        <p class="text-3xl font-bold text-apeh-blue">{{ $stats['articles'] }}</p>
        <p class="text-sm text-gray-500 mt-1">Articles publiés</p>
        <a href="{{ route('admin.articles.index') }}" class="text-xs text-apeh-accent hover:text-apeh-blue mt-3 block font-medium transition-colors">
            Gérer les articles →
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-2xl">👥</div>
            <span class="text-xs text-gray-400 font-medium uppercase tracking-wide">Membres</span>
        </div>
        <p class="text-3xl font-bold text-apeh-blue">{{ $stats['members'] }}</p>
        <p class="text-sm text-gray-500 mt-1">Membres inscrits</p>
        <a href="{{ route('admin.members.index') }}" class="text-xs text-apeh-accent hover:text-apeh-blue mt-3 block font-medium transition-colors">
            Voir les membres →
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-2xl">🌐</div>
            <span class="text-xs text-gray-400 font-medium uppercase tracking-wide">Site</span>
        </div>
        <p class="text-lg font-bold text-apeh-blue">APEH-France</p>
        <p class="text-sm text-gray-500 mt-1">Site public actif</p>
        <a href="{{ route('home') }}" target="_blank" class="text-xs text-apeh-accent hover:text-apeh-blue mt-3 block font-medium transition-colors">
            Voir le site →
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-2xl">✍️</div>
            <span class="text-xs text-gray-400 font-medium uppercase tracking-wide">Action</span>
        </div>
        <p class="text-lg font-bold text-apeh-blue">Nouvel article</p>
        <p class="text-sm text-gray-500 mt-1">Publier du contenu</p>
        <a href="{{ route('admin.articles.create') }}" class="text-xs text-apeh-accent hover:text-apeh-blue mt-3 block font-medium transition-colors">
            Créer un article →
        </a>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    {{-- Articles récents --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
            <h2 class="font-display font-bold text-apeh-blue text-lg">Articles récents</h2>
            <a href="{{ route('admin.articles.index') }}" class="text-sm text-apeh-accent hover:text-apeh-blue font-medium transition-colors">
                Voir tout
            </a>
        </div>
        <div class="divide-y divide-gray-50">
            @forelse($recentArticles as $article)
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors">
                <div class="flex-1 min-w-0">
                    <p class="font-medium text-gray-800 text-sm truncate">{{ $article->titre }}</p>
                    <p class="text-xs text-gray-400 mt-0.5">{{ $article->date_publication->translatedFormat('d F Y') }}</p>
                </div>
                <div class="flex items-center gap-2 ml-4">
                    <a href="{{ route('admin.articles.edit', $article->id) }}"
                       class="text-xs text-apeh-accent hover:text-apeh-blue font-medium transition-colors">
                        Modifier
                    </a>
                </div>
            </div>
            @empty
            <div class="px-6 py-8 text-center text-gray-400 text-sm">
                Aucun article publié.
            </div>
            @endforelse
        </div>
    </div>

    {{-- Membres récents --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
            <h2 class="font-display font-bold text-apeh-blue text-lg">Derniers inscrits</h2>
            <a href="{{ route('admin.members.index') }}" class="text-sm text-apeh-accent hover:text-apeh-blue font-medium transition-colors">
                Voir tout
            </a>
        </div>
        <div class="divide-y divide-gray-50">
            @forelse($recentMembers as $member)
            <div class="px-6 py-4 flex items-center gap-4 hover:bg-gray-50 transition-colors">
                <div class="w-9 h-9 rounded-full bg-apeh-light flex items-center justify-center text-apeh-blue font-bold text-sm flex-shrink-0">
                    {{ strtoupper(substr($member->prenom, 0, 1)) }}{{ strtoupper(substr($member->nom, 0, 1)) }}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="font-medium text-gray-800 text-sm">{{ $member->prenom }} {{ $member->nom }}</p>
                    <p class="text-xs text-gray-400 truncate">{{ $member->email }}</p>
                </div>
                <span class="badge bg-apeh-light text-apeh-blue text-xs">{{ $member->statut }}</span>
            </div>
            @empty
            <div class="px-6 py-8 text-center text-gray-400 text-sm">
                Aucun membre inscrit.
            </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
