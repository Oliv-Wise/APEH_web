@extends('layouts.app')

@section('title', 'Statut de l\'association')
@section('meta_description', 'Statut officiel de l\'APEH-France, association loi 1901.')

@section('content')

<section class="bg-gradient-to-br from-apeh-blue to-apeh-dark py-20 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge bg-white/20 text-white mb-4">Documents officiels</span>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Statut de APEH-France</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto">
            Association déclarée selon la loi 1901, fondée par les étudiants et professionnels haïtiens de France.
        </p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="card p-8 md:p-12 reveal">
            <div class="prose prose-lg max-w-none text-gray-700">

                <p class="text-lg leading-relaxed mb-8">
                    Selon la loi 1901, les associations sont des regroupements de personnes autour d'intérêts communs. C'est sur cette base juridique que les étudiants et professionnels Haïtiens de France ont décidé de se constituer en collectif.
                </p>

                <h2 class="font-display text-2xl font-bold text-apeh-blue mt-8 mb-4">Préambule</h2>
                <p class="leading-relaxed mb-4">La formation à la pratique d'activités au service de l'intérêt général, l'exercice des compétences permettant de surmonter les difficultés de la vie étudiante, l'apport d'une expérience favorable à l'éclosion des qualités en complément des formations proposées par les établissements d'enseignement supérieur, la pratique de l'exercice civique et démocratique, l'ouverture à un réseau diversifié, sont les principaux éléments résumant le rôle des associations étudiantes.</p>
                <p class="leading-relaxed mb-4">Conscients que leur parcours universitaire connaît, en plus des difficultés classiques des étudiants, celles liées au parcours d'étudiants étrangers, les étudiants haïtiens de Lille ont choisi de se fédérer au sein de structures et autour d'objectifs communs.</p>
                <p class="leading-relaxed mb-4">Cette association œuvre pour la réussite de ses adhérents, comprenant également l'adaptation et l'intégration sociale des membres de différentes disciplines, cultures et nations.</p>
                <p class="leading-relaxed mb-8">Approuvons et adoptons librement et solennellement le présent statut comme texte régissant la vie et le fonctionnement de APEH-France.</p>

                <h2 class="font-display text-2xl font-bold text-apeh-blue mt-8 mb-4">TITRE I – Dénomination, nature, objectifs</h2>

                <h3 class="font-bold text-apeh-blue text-lg mt-6 mb-2">Article 1 – Dénomination</h3>
                <p class="leading-relaxed mb-4">Association des Professionnels et Étudiants Haïtiens de France, en abrégé <strong>APEH-FRANCE</strong>.</p>

                <h3 class="font-bold text-apeh-blue text-lg mt-6 mb-2">Article 2 – Nature</h3>
                <p class="leading-relaxed mb-4">APEH-FRANCE est une organisation <strong>apolitique et à but non lucratif</strong>.</p>

                <h3 class="font-bold text-apeh-blue text-lg mt-6 mb-2">Article 3 – Objectifs</h3>
                <ul class="list-disc list-inside space-y-2 mb-6 text-gray-600">
                    <li>Accompagner les membres à s'intégrer</li>
                    <li>Promouvoir l'interdisciplinarité</li>
                    <li>Faciliter l'insertion professionnelle</li>
                    <li>Valoriser la culture haïtienne</li>
                    <li>Encourager les membres à mettre leurs compétences au service d'Haïti</li>
                </ul>

                <h3 class="font-bold text-apeh-blue text-lg mt-6 mb-2">Article 4 – Moyens d'action</h3>
                <ul class="list-disc list-inside space-y-2 mb-6 text-gray-600">
                    <li>Rencontres, ateliers, conférences</li>
                    <li>Suivi académique et tutorat</li>
                    <li>Collaborations avec les autorités</li>
                    <li>Journées d'accueil et culturelles</li>
                    <li>Accompagnement administratif</li>
                    <li>Création d'un annuaire de diplômés</li>
                </ul>

                <h2 class="font-display text-2xl font-bold text-apeh-blue mt-8 mb-4">TITRE II – Siège social</h2>
                <p class="leading-relaxed mb-4">Le siège social de l'association est fixé à : <strong>Maison des Étudiants, Cité Scientifique, 7 avenue Paul Langevin, 59650 Villeneuve-d'Ascq</strong>.</p>

                <h2 class="font-display text-2xl font-bold text-apeh-blue mt-8 mb-4">TITRE III – Membres</h2>
                <p class="leading-relaxed mb-4">L'association est composée de membres actifs, de membres bienfaiteurs et de membres d'honneur. L'adhésion est ouverte à tout professionnel, étudiant ou sympathisant haïtien résidant en France, ainsi qu'à toute personne partageant les valeurs de l'association.</p>

                <h2 class="font-display text-2xl font-bold text-apeh-blue mt-8 mb-4">Informations légales</h2>
                <div class="bg-apeh-light rounded-xl p-6 text-sm text-gray-600 space-y-2">
                    <p><strong>SIREN :</strong> 923 557 375</p>
                    <p><strong>SIRET :</strong> 923 557 375 00022</p>
                    <p><strong>N° RNA :</strong> W595042228</p>
                    <p><strong>Catégorie juridique :</strong> 9220 – Association déclarée</p>
                    <p><strong>APE :</strong> 94.99Z – Autres organisations fonctionnant par adhésion volontaire</p>
                    <p><strong>Fondée le :</strong> 11 mai 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
