<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class StaticPageController extends Controller
{
    public function implantation(): View
    {
        return view('public.implantation');
    }

    public function status(): View
    {
        return view('public.status');
    }

    public function mentions(): View
    {
        return view('public.mentions');
    }

    public function privacy(): View
    {
        return view('public.privacy');
    }
}
