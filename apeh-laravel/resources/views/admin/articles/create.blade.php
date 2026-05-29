@extends('layouts.admin')

@section('title', 'Nouvel article')

@section('content')

<div class="flex items-center gap-4 mb-6">
    <a href="{{ route('admin.articles.index') }}"
       class="text-sm text-gray-500 hover:text-apeh-blue transition-colors flex items-center gap-1">
        ← Retour aux articles
    </a>
</div>

<div class="max-w-3xl">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        <h2 class="font-display text-xl font-bold text-apeh-blue mb-6">Publier un nouvel article</h2>

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

        <form method="POST" action="{{ route('admin.articles.store') }}" novalidate>
            @csrf

            <div class="mb-6">
                <label for="titre" class="form-label">
                    Titre <span class="text-red-500" aria-hidden="true">*</span>
                </label>
                <input type="text" id="titre" name="titre"
                       value="{{ old('titre') }}"
                       class="form-input @error('titre') border-red-400 @enderror"
                       required
                       aria-required="true"
                       placeholder="Titre de l'article"
                       autofocus>
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
                          aria-required="true"
                          placeholder="Rédigez le contenu de votre article ici...">{{ old('contenu') }}</textarea>
                @error('contenu')
                    <p class="form-error" role="alert">{{ $message }}</p>
                @enderror
                <p class="text-xs text-gray-400 mt-2">Les sauts de ligne seront préservés à l'affichage.</p>
            </div>

            <div class="flex items-center gap-4">
                <button type="submit" class="btn-primary">
                    Publier l'article
                </button>
                <a href="{{ route('admin.articles.index') }}"
                   class="text-sm text-gray-500 hover:text-gray-700 font-medium transition-colors">
                    Annuler
                </a>
            </div>
        </form>
    </div>
</div>

@endsection
