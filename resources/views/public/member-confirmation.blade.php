@extends('layouts.app')

@section('title', 'Inscription confirmée')

@section('content')

<section class="min-h-[70vh] flex items-center justify-center bg-apeh-light py-20">
    <div class="max-w-lg mx-auto px-4 text-center reveal">
        <div class="card p-12">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h1 class="font-display text-3xl font-bold text-apeh-blue mb-4">Inscription réussie !</h1>
            <p class="text-gray-500 leading-relaxed mb-2">
                Merci pour votre inscription à APEH-France. Votre demande a bien été enregistrée.
            </p>
            <p class="text-gray-500 leading-relaxed mb-8">
                Un email de confirmation vous a été envoyé. Bienvenue dans notre communauté !
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="btn-primary">Retour à l'accueil</a>
                <a href="{{ route('articles.index') }}" class="btn-secondary">Lire nos articles</a>
            </div>
        </div>
    </div>
</section>

@endsection
