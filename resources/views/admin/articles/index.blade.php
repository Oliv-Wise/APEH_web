@extends('layouts.admin')

@section('title', 'Gestion des articles')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="font-display text-xl font-bold text-apeh-blue">Articles publiés</h2>
        <p class="text-sm text-gray-500 mt-1">{{ $articles->total() }} article(s) au total</p>
    </div>
    <a href="{{ route('admin.articles.create') }}" class="btn-primary text-sm">
        + Nouvel article
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    @if($articles->count() > 0)
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100">
                    <th class="text-left px-6 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide">Titre</th>
                    <th class="text-left px-6 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide hidden md:table-cell">Date de publication</th>
                    <th class="text-right px-6 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($articles as $article)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        <p class="font-medium text-gray-800 truncate max-w-xs">{{ $article->titre }}</p>
                        <p class="text-xs text-gray-400 mt-0.5 md:hidden">{{ $article->date_publication->translatedFormat('d/m/Y') }}</p>
                    </td>
                    <td class="px-6 py-4 text-gray-500 hidden md:table-cell">
                        {{ $article->date_publication->translatedFormat('d F Y') }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-end gap-3">
                            <a href="{{ route('articles.show', $article->id) }}"
                               target="_blank"
                               class="text-xs text-gray-500 hover:text-apeh-blue font-medium transition-colors">
                                Voir
                            </a>
                            <a href="{{ route('admin.articles.edit', $article->id) }}"
                               class="text-xs text-apeh-accent hover:text-apeh-blue font-medium transition-colors">
                                Modifier
                            </a>
                            <form method="POST" action="{{ route('admin.articles.destroy', $article->id) }}"
                                  onsubmit="return confirm('Supprimer cet article définitivement ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-xs text-red-500 hover:text-red-700 font-medium transition-colors">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 border-t border-gray-100">
        {{ $articles->links() }}
    </div>

    @else
    <div class="text-center py-16">
        <span class="text-5xl block mb-4">📝</span>
        <p class="text-gray-500 mb-4">Aucun article publié pour le moment.</p>
        <a href="{{ route('admin.articles.create') }}" class="btn-primary text-sm">Créer le premier article</a>
    </div>
    @endif
</div>

@endsection
