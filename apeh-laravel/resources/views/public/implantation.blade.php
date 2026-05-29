@extends('layouts.app')

@section('title', 'Implantation')
@section('meta_description', 'Localisation et adresse de l\'APEH-France à Villeneuve-d\'Ascq.')

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-20 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge bg-white/20 text-white mb-4">Où nous trouver</span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Notre implantation</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto">
            L'APEH-France est basée à la Maison des Étudiants de la Cité Scientifique de Villeneuve-d'Ascq.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="card p-8 md:p-10 mb-10 reveal">
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="flex-1">
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">Notre adresse</h2>
                    <div class="space-y-3 text-gray-600">
                        <div class="flex items-start gap-3">
                            <span class="text-xl flex-shrink-0">📍</span>
                            <div>
                                <p class="font-semibold text-gray-800">Maison des Étudiants – Cité Scientifique</p>
                                <p>7 avenue Paul Langevin</p>
                                <p>59650 Villeneuve-d'Ascq</p>
                                <p>France</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xl">✉️</span>
                            <a href="mailto:apeh.france509@gmail.com"
                               class="text-apeh-accent hover:text-apeh-blue transition-colors font-medium">
                                apeh.france509@gmail.com
                            </a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=7+avenue+Paul+Langevin+Cité+Scientifique,+Maison+des+Associations"
                           target="_blank" rel="noopener noreferrer"
                           class="btn-primary text-sm">
                            Obtenir l'itinéraire
                        </a>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="{{ asset('images/Maison-des-etudiants.jpg') }}"
                         alt="Maison des Étudiants – Cité Scientifique"
                         class="w-full rounded-2xl shadow-lg object-cover"
                         style="max-height: 280px;"
                         loading="lazy">
                </div>
            </div>
        </div>

        <div class="text-center reveal">
            <a href="{{ route('poles') }}" class="btn-secondary">Voir nos pôles et contacts</a>
        </div>
    </div>
</section>

@endsection
