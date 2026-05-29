@extends('layouts.app')

@section('title', 'Mentions légales')
@section('meta_description', 'Mentions légales de l\'APEH-France.')

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-16 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-display text-4xl font-bold mb-3">Mentions légales</h1>
        <p class="text-white/70">Informations légales relatives au site APEH-France</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="card p-8 md:p-12 reveal">
            <div class="prose prose-lg max-w-none text-gray-700 space-y-8">

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">Informations sur l'association</h2>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><strong>Dénomination :</strong> ASSOCIATION DES PROFESSIONNELS ET ETUDIANTS HAITIENS DE FRANCE</li>
                        <li><strong>Active depuis :</strong> 11/05/2023</li>
                        <li><strong>SIREN :</strong> 923 557 375</li>
                        <li><strong>SIRET du siège :</strong> 923 557 375 00022</li>
                        <li><strong>Catégorie juridique :</strong> 9220 – Association déclarée</li>
                        <li><strong>N° RNA :</strong> W595042228</li>
                        <li><strong>APE :</strong> 94.99Z – Autres organisations fonctionnant par adhésion volontaire</li>
                        <li><strong>ESS :</strong> Oui</li>
                        <li><strong>Adresse :</strong> MAISON DES ETUDIANTS CITE SCIENTIFIQUE, 7 AVENUE PAUL LANGEVIN, 59650 VILLENEUVE-D'ASCQ</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">Éditeur du site</h2>
                    <p><strong>Nom du site :</strong> APEH-France – Association des Professionnels et Étudiants Haïtiens de France</p>
                    <p><strong>Conception et développement :</strong> Marvens Oliver Joseph – Développeur web bénévole</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">Hébergement</h2>
                    <p>Le site est en cours d'hébergement. Les mentions légales seront mises à jour dès la mise en ligne officielle.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">Propriété intellectuelle</h2>
                    <p>L'ensemble du site, sa structure, ses textes, images, graphismes, logos et codes sources sont la propriété exclusive de l'association APEH-France et de son développeur, sauf mentions contraires.</p>
                    <p>Toute reproduction sans autorisation préalable écrite est interdite (Articles L.335-2 et suivants du Code de la propriété intellectuelle).</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">Protection des données</h2>
                    <p>Conformément au RGPD, les données collectées sont utilisées uniquement à des fins associatives et ne sont jamais transmises à des tiers sans consentement explicite.</p>
                    <p>Contact : <a href="mailto:apeh.france509@gmail.com" class="text-apeh-accent hover:underline">apeh.france509@gmail.com</a></p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-apeh-blue mb-4">Crédits</h2>
                    <p>Certaines images appartiennent à l'association. D'autres proviennent de ressources libres de droits ou ont été générées par intelligence artificielle. Les crédits sont indiqués sur les pages concernées.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
