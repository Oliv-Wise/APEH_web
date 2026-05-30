<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $recentArticles = Article::orderByDesc('date_publication')->limit(3)->get();

        return view('public.home', compact('recentArticles'));
    }
}
