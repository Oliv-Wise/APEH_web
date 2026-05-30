@extends('layouts.app')

@section('title', 'Devenir membre')
@section('meta_description', 'Rejoignez l\'APEH-France en remplissant le formulaire d\'inscription membre.')

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-20 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge bg-white/20 text-white mb-4">Adhésion gratuite</span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Devenir membre</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto">
            Rejoignez la communauté APEH-France. L'adhésion est gratuite et ouverte à tous.
        </p>
    </div>
</section>

<section class="py-16 bg-apeh-light">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Charte PDF --}}
        <div class="card p-6 mb-8 reveal">
            <h2 class="font-display font-bold text-apeh-blue text-lg mb-3">📄 Charte de l'association</h2>
            <p class="text-gray-500 text-sm mb-4">Veuillez lire le règlement intérieur avant de vous inscrire.</p>
            <iframe src="{{ asset('docs/REGLEMENT INTERIEUR _APEH1.pdf') }}"
                    class="w-full rounded-lg border border-gray-200"
                    style="height: 350px;"
                    title="Règlement intérieur APEH-France"
                    aria-label="Règlement intérieur de l'association">
            </iframe>
        </div>

        {{-- Formulaire --}}
        <div class="card p-8 md:p-10 reveal">
            <h2 class="font-display font-bold text-apeh-blue text-2xl mb-2">Formulaire d'inscription</h2>
            <p class="text-gray-500 text-sm mb-8">Les champs marqués <span class="text-red-500">*</span> sont obligatoires.</p>

            @if($errors->any())
            <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6" role="alert">
                <p class="font-semibold text-red-700 mb-2">Veuillez corriger les erreurs suivantes :</p>
                <ul class="list-disc list-inside text-red-600 text-sm space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('member.store') }}" method="POST" id="registration-form" novalidate>
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    {{-- Nom --}}
                    <div>
                        <label for="lastname" class="form-label">
                            Nom <span class="text-red-500" aria-hidden="true">*</span>
                        </label>
                        <input type="text" id="lastname" name="lastname"
                               value="{{ old('lastname') }}"
                               class="form-input @error('lastname') border-red-400 @enderror"
                               required autocomplete="family-name"
                               aria-required="true"
                               aria-describedby="lastname-error">
                        @error('lastname')
                            <p id="lastname-error" class="form-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Prénom --}}
                    <div>
                        <label for="firstname" class="form-label">
                            Prénom <span class="text-red-500" aria-hidden="true">*</span>
                        </label>
                        <input type="text" id="firstname" name="firstname"
                               value="{{ old('firstname') }}"
                               class="form-input @error('firstname') border-red-400 @enderror"
                               required autocomplete="given-name"
                               aria-required="true"
                               aria-describedby="firstname-error">
                        @error('firstname')
                            <p id="firstname-error" class="form-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    {{-- Email --}}
                    <div>
                        <label for="email" class="form-label">
                            Email <span class="text-red-500" aria-hidden="true">*</span>
                        </label>
                        <input type="email" id="email" name="email"
                               value="{{ old('email') }}"
                               class="form-input @error('email') border-red-400 @enderror"
                               required autocomplete="email"
                               aria-required="true"
                               aria-describedby="email-error">
                        @error('email')
                            <p id="email-error" class="form-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Téléphone --}}
                    <div>
                        <label for="phone" class="form-label">
                            Téléphone <span class="text-red-500" aria-hidden="true">*</span>
                        </label>
                        <input type="tel" id="phone" name="phone"
                               value="{{ old('phone') }}"
                               class="form-input @error('phone') border-red-400 @enderror"
                               required autocomplete="tel"
                               aria-required="true"
                               aria-describedby="phone-error">
                        @error('phone')
                            <p id="phone-error" class="form-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Adresse --}}
                <div class="mb-6">
                    <label for="adresse" class="form-label">
                        Adresse postale complète <span class="text-red-500" aria-hidden="true">*</span>
                    </label>
                    <input type="text" id="adresse" name="adresse"
                           value="{{ old('adresse') }}"
                           class="form-input @error('adresse') border-red-400 @enderror"
                           required autocomplete="street-address"
                           aria-required="true"
                           aria-describedby="adresse-error">
                    @error('adresse')
                        <p id="adresse-error" class="form-error" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Statut --}}
                <div class="mb-6" x-data="{ status: '{{ old('status', '') }}' }">
                    <label for="status" class="form-label">
                        Statut <span class="text-red-500" aria-hidden="true">*</span>
                    </label>
                    <select id="status" name="status"
                            class="form-input @error('status') border-red-400 @enderror"
                            required
                            x-model="status"
                            aria-required="true"
                            aria-describedby="status-error">
                        <option value="">-- Choisir --</option>
                        <option value="étudiant" {{ old('status') === 'étudiant' ? 'selected' : '' }}>Étudiant</option>
                        <option value="professionnel" {{ old('status') === 'professionnel' ? 'selected' : '' }}>Professionnel</option>
                        <option value="autre" {{ old('status') === 'autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                    @error('status')
                        <p id="status-error" class="form-error" role="alert">{{ $message }}</p>
                    @enderror

                    {{-- Champ conditionnel "Autre" --}}
                    <div x-show="status === 'autre'" x-transition class="mt-4">
                        <label for="custom_status" class="form-label">
                            Précisez votre statut <span class="text-red-500" aria-hidden="true">*</span>
                        </label>
                        <input type="text" id="custom_status" name="custom_status"
                               value="{{ old('custom_status') }}"
                               class="form-input"
                               :required="status === 'autre'"
                               aria-describedby="custom-status-error">
                        @error('custom_status')
                            <p id="custom-status-error" class="form-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Domaine --}}
                <div class="mb-6">
                    <label for="domain" class="form-label">
                        Domaine d'études ou d'activités <span class="text-red-500" aria-hidden="true">*</span>
                    </label>
                    <input type="text" id="domain" name="domain"
                           value="{{ old('domain') }}"
                           class="form-input @error('domain') border-red-400 @enderror"
                           required
                           aria-required="true"
                           aria-describedby="domain-error"
                           placeholder="Ex : Informatique, Médecine, Droit...">
                    @error('domain')
                        <p id="domain-error" class="form-error" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    {{-- Contact Haïti --}}
                    <div>
                        <label for="contact" class="form-label">
                            Personne à contacter en Haïti <span class="text-red-500" aria-hidden="true">*</span>
                        </label>
                        <input type="text" id="contact" name="contact"
                               value="{{ old('contact') }}"
                               class="form-input @error('contact') border-red-400 @enderror"
                               required
                               aria-required="true"
                               aria-describedby="contact-error">
                        @error('contact')
                            <p id="contact-error" class="form-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Téléphone contact Haïti --}}
                    <div>
                        <label for="contact_phone" class="form-label">
                            Téléphone du contact en Haïti <span class="text-red-500" aria-hidden="true">*</span>
                        </label>
                        <input type="tel" id="contact_phone" name="contact_phone"
                               value="{{ old('contact_phone') }}"
                               class="form-input @error('contact_phone') border-red-400 @enderror"
                               required
                               aria-required="true"
                               aria-describedby="contact-phone-error">
                        @error('contact_phone')
                            <p id="contact-phone-error" class="form-error" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Consentement RGPD --}}
                <div class="mb-8 p-4 bg-apeh-light rounded-xl">
                    <div class="flex items-start gap-3">
                        <input type="checkbox" id="rgpd_consent" name="rgpd_consent"
                               class="mt-1 w-4 h-4 text-apeh-blue border-gray-300 rounded focus:ring-apeh-accent"
                               required
                               aria-required="true"
                               aria-describedby="rgpd-error"
                               {{ old('rgpd_consent') ? 'checked' : '' }}>
                        <label for="rgpd_consent" class="text-sm text-gray-600 leading-relaxed cursor-pointer">
                            J'accepte que mes données personnelles soient collectées et utilisées par l'APEH-France dans le cadre de la gestion des membres, conformément à la
                            <a href="{{ route('privacy') }}" target="_blank" class="text-apeh-accent hover:underline font-medium">politique de confidentialité</a>.
                            Je comprends que je peux demander la suppression de mes données à tout moment.
                            <span class="text-red-500" aria-hidden="true">*</span>
                        </label>
                    </div>
                    @error('rgpd_consent')
                        <p id="rgpd-error" class="form-error mt-2" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="btn-primary w-full text-base py-4 justify-center">
                    Soumettre mon inscription
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
