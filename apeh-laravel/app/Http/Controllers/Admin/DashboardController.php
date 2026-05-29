<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'articles' => Article::count(),
            'members'  => User::count(),
        ];

        $recentArticles = Article::orderByDesc('date_publication')->limit(5)->get();
        $recentMembers  = User::orderByDesc('date_inscription')->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'recentArticles', 'recentMembers'));
    }
}
