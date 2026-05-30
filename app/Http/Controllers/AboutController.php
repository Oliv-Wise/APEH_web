<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $achievements = [
            ['title' => 'Tournoi sportif',              'image' => 'images/tournoi_sportif.jpeg',          'description' => 'Un moment de cohésion et de compétition amicale pour renforcer les liens entre membres.'],
            ['title' => 'Formation',                    'image' => 'images/formation.jpg',                 'description' => 'Des sessions de renforcement de compétences pour étudiants et professionnels.'],
            ['title' => 'Orientation professionnelle',  'image' => 'images/orientation.jpeg',              'description' => 'Des rencontres et ateliers pour guider les membres dans leur parcours professionnel.'],
            ['title' => 'Célébration du bicolore',      'image' => 'images/bicolores.jpeg',                'description' => 'Un moment fort de fierté culturelle et de partage autour de la culture haïtienne.'],
            ['title' => 'Welcome to France',            'image' => 'images/welcome.jpeg',                  'description' => 'Un accueil chaleureux pour les nouveaux membres et étudiants.'],
            ['title' => 'Gala',                         'image' => 'images/events/gala.jpg',               'description' => 'Un événement prestigieux pour célébrer les réussites de l\'association.'],
            ['title' => 'Talkshow',                     'image' => 'images/Talkshow.jpeg',                 'description' => 'Des discussions inspirantes avec des invités spéciaux et des experts engagés.'],
        ];

        $activities = [
            ['img' => 'images/formation.jpg',                        'title' => 'Formation'],
            ['img' => 'images/orientation_professionnelle.png',      'title' => 'Orientation professionnelle'],
            ['img' => 'images/events/sortie_explorative.png',        'title' => 'Sortie explorative'],
            ['img' => 'images/events/img1.jpeg',                     'title' => 'Célébration du bicolore haïtien'],
            ['img' => 'images/welcome.jpeg',                         'title' => 'Welcome to France'],
        ];

        return view('public.about', compact('achievements', 'activities'));
    }

    public function values(): View
    {
        $values = [
            ['icon' => '🤝', 'title' => 'Solidarité',       'description' => 'Nous nous soutenons mutuellement dans les moments difficiles comme dans les réussites.'],
            ['icon' => '🎓', 'title' => 'Excellence',        'description' => 'Nous encourageons chaque membre à donner le meilleur de lui-même dans ses études et sa carrière.'],
            ['icon' => '🌍', 'title' => 'Ouverture',         'description' => 'Nous valorisons la diversité culturelle et l\'échange entre les peuples.'],
            ['icon' => '🇭🇹', 'title' => 'Fierté haïtienne', 'description' => 'Nous célébrons notre culture, notre histoire et notre identité haïtienne avec fierté.'],
            ['icon' => '🏗️', 'title' => 'Engagement',        'description' => 'Nous agissons concrètement pour le développement de notre communauté en France et en Haïti.'],
            ['icon' => '🤲', 'title' => 'Entraide',          'description' => 'Nous créons des liens durables basés sur la confiance, l\'amitié et le partage.'],
        ];

        return view('public.values', compact('values'));
    }

    public function join(): View
    {
        $reasons = [
            ['icon' => '🌐', 'title' => 'Un réseau solide',          'description' => 'Rejoignez une communauté de professionnels et d\'étudiants haïtiens engagés en France.'],
            ['icon' => '📚', 'title' => 'Soutien académique',         'description' => 'Bénéficiez d\'un accompagnement dans vos études et votre orientation professionnelle.'],
            ['icon' => '🎉', 'title' => 'Événements enrichissants',   'description' => 'Participez à des galas, talkshows, sorties culturelles et célébrations haïtiennes.'],
            ['icon' => '💼', 'title' => 'Insertion professionnelle',  'description' => 'Accédez à des opportunités professionnelles grâce à notre réseau de membres.'],
            ['icon' => '🏠', 'title' => 'Accueil et intégration',     'description' => 'Soyez accompagné dès votre arrivée en France avec notre programme Welcome to France.'],
            ['icon' => '🇭🇹', 'title' => 'Culture et identité',       'description' => 'Préservez et célébrez votre culture haïtienne au cœur de la France.'],
        ];

        return view('public.join', compact('reasons'));
    }
}
