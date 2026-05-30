@extends('layouts.app')

@section('title', 'Politique de confidentialité')
@section('meta_description', 'Politique de confidentialité et protection des données personnelles de l\'APEH-France.')

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-16 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-display text-4xl font-bold mb-3">Politique de confidentialité</h1>
        <p class="text-white/70">Conformément au Règlement Général sur la Protection des Données (RGPD)</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="card p-8 md:p-12 reveal">
            <div class="prose prose-lg max-w-none text-gray-700 space-y-8">

                <p class="text-lg leading-relaxed">
                    Cette politique de confidentialité vous informe sur la manière dont l'association APEH-France collecte, utilise, conserve et protège vos données personnelles, conformément au RGPD.
                </p>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">1. Données collectées</h2>
                    <p>Lors de votre inscription, nous collectons :</p>
                    <ul class="list-disc list-inside space-y-1 text-gray-600 text-sm mt-3">
                        <li>Nom, prénom</li>
                        <li>Email et numéro de téléphone</li>
                        <li>Adresse postale</li>
                        <li>Statut (étudiant, professionnel, autre)</li>
                        <li>Domaine d'activité ou d'étude</li>
                        <li>Nom et téléphone d'une personne à contacter en Haïti</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">2. Finalité de la collecte</h2>
                    <p>Ces données sont utilisées uniquement pour :</p>
                    <ul class="list-disc list-inside space-y-1 text-gray-600 text-sm mt-3">
                        <li>L'organisation des activités et événements de l'association</li>
                        <li>La communication avec les membres</li>
                        <li>La gestion interne de APEH-France</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">3. Durée de conservation</h2>
                    <p>Les données sont conservées aussi longtemps que vous êtes membre actif de l'association. Vous pouvez demander leur suppression à tout moment.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">4. Accès aux données</h2>
                    <p>Seuls les responsables de l'association ont accès à vos données. Elles ne seront jamais partagées ni vendues à des tiers.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">5. Vos droits (RGPD)</h2>
                    <p>Conformément au RGPD, vous disposez des droits suivants :</p>
                    <ul class="list-disc list-inside space-y-1 text-gray-600 text-sm mt-3">
                        <li>Droit d'accès à vos données personnelles</li>
                        <li>Droit de rectification ou de mise à jour</li>
                        <li>Droit à l'effacement (« droit à l'oubli »)</li>
                        <li>Droit à la portabilité des données</li>
                        <li>Droit d'opposition au traitement</li>
                    </ul>
                    <p class="mt-4">Pour exercer vos droits, contactez-nous à :
                        <a href="mailto:apeh.france509@gmail.com" class="text-apeh-accent hover:underline font-medium">apeh.france509@gmail.com</a>
                    </p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">6. Sécurité des données</h2>
                    <p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos données contre tout accès non autorisé, perte ou divulgation.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">7. Cookies</h2>
                    <p>Ce site utilise uniquement des cookies techniques nécessaires au bon fonctionnement (session, CSRF). Aucun cookie de traçage ou publicitaire n'est utilisé.</p>
                </div>

                <div class="bg-apeh-light rounded-xl p-6 text-sm text-gray-600">
                    <p><strong>Dernière mise à jour :</strong> {{ date('d/m/Y') }}</p>
                    <p><strong>Contact DPO :</strong> <a href="mailto:apeh.france509@gmail.com" class="text-apeh-accent hover:underline">apeh.france509@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
