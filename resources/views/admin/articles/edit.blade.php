@extends('layouts.admin')

@section('title', 'Modifier l\'article')

@section('content')

<div class="flex items-center gap-4 mb-6">
    <a href="{{ route('admin.articles.index') }}"
       class="text-sm text-gray-500 hover:text-apeh-blue transition-colors flex items-center gap-1">
        ← Retour aux articles
    </a>
</div>

<div class="max-w-3xl">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        <h2 class="font-display text-xl font-bold text-apeh-blue mb-6">Modifier l'article</h2>

        @if($errors->any())
        <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6" role="alert">
            <p class="font-semibold text-red-700 mb-2 text-sm">Veuillez corriger les erreurs :</p>
            <ul class="list-disc list-inside text-red-600 text-sm space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('admin.articles.update', $article->id) }}" novalidate>
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="titre" class="form-label">
                    Titre <span class="text-red-500" aria-hidden="true">*</span>
                </label>
                <input type="text" id="titre" name="titre"
                       value="{{ old('titre', $article->titre) }}"
                       class="form-input @error('titre') border-red-400 @enderror"
                       required
                       aria-required="true">
                @error('titre')
                    <p class="form-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-8">
                <label for="contenu" class="form-label">
                    Contenu <span class="text-red-500" aria-hidden="true">*</span>
                </label>
                <textarea id="contenu" name="contenu"
                          rows="16"
                          class="form-input @error('contenu') border-red-400 @enderror resize-y"
                          required
                          aria-required="true">{{ old('contenu', $article->contenu) }}</textarea>
                @error('contenu')
                    <p class="form-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-4">
                <button type="submit" class="btn-primary">
                    Enregistrer les modifications
                </button>
                <a href="{{ route('admin.articles.index') }}"
                   class="text-sm text-gray-500 hover:text-gray-700 font-medium transition-colors">
                    Annuler
                </a>
                <form method="POST" action="{{ route('admin.articles.destroy', $article->id) }}"
                      class="ml-auto"
                      onsubmit="return confirm('Supprimer cet article définitivement ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm text-red-500 hover:text-red-700 font-medium transition-colors">
                        Supprimer l'article
                    </button>
                </form>
            </div>
        </form>
    </div>
</div>

@endsection
