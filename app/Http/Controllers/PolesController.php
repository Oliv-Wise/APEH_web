<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PolesController extends Controller
{
    public function index(): View
    {
        $poles = [
            ['name' => 'Pôle d\'intégration',                              'responsable' => 'Marcy Leon',          'icon' => '🏠', 'color' => 'blue'],
            ['name' => 'Pôle de soutien et solidarité',                    'responsable' => 'Ifodenet Francois',    'icon' => '🤝', 'color' => 'green'],
            ['name' => 'Pôle de suivis d\'étude et d\'orientation',        'responsable' => 'Camille Anderson',     'icon' => '🎓', 'color' => 'purple'],
            ['name' => 'Pôle événementiel',                                'responsable' => 'Steeve MICHEL',        'icon' => '🎉', 'color' => 'orange'],
            ['name' => 'Pôle culinaire',                                   'responsable' => 'Nathalie Edouard',     'icon' => '🍽️', 'color' => 'red'],
            ['name' => 'Pôle logistique',                                  'responsable' => 'Jean Bertrand',        'icon' => '📦', 'color' => 'gray'],
            ['name' => 'Pôle multimédia et de communication',              'responsable' => 'Ricardine Celestin',   'icon' => '📡', 'color' => 'indigo'],
            ['name' => 'Pôle culturel',                                    'responsable' => 'Florie Dorestin',      'icon' => '🎭', 'color' => 'pink'],
        ];

        return view('public.poles', compact('poles'));
    }
}
