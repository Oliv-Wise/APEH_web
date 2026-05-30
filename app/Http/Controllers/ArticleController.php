<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::orderByDesc('date_publication')->paginate(9);

        return view('public.articles', compact('articles'));
    }

    public function show(int $id): View|RedirectResponse
    {
        $article = Article::find($id);

        if (! $article) {
            return redirect()->route('articles.index')
                ->with('error', 'Article introuvable.');
        }

        $recent = Article::where('id', '!=', $id)
            ->orderByDesc('date_publication')
            ->limit(3)
            ->get();

        return view('public.article-show', compact('article', 'recent'));
    }
}
