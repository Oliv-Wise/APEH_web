<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DonateController extends Controller
{
    public function index(): View
    {
        $widgetUrl = env(
            'HELLOASSO_WIDGET_URL',
            'https://www.helloasso.com/associations/association-des-professionnels-et-etudiants-haitiens-de-france/formulaires/1/widget-bouton'
        );

        return view('public.donate', compact('widgetUrl'));
    }
}
