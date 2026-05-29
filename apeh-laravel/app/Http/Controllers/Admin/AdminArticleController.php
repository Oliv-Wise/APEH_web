<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdminArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::orderByDesc('date_publication')->paginate(15);

        return view('admin.articles.index', compact('articles'));
    }

    public function create(): View
    {
        return view('admin.articles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'titre'   => ['required', 'string', 'max:255'],
            'contenu' => ['required', 'string'],
        ], [
            'titre.required'   => 'Le titre est obligatoire.',
            'contenu.required' => 'Le contenu est obligatoire.',
        ]);

        Article::create([
            'titre'            => $validated['titre'],
            'contenu'          => $validated['contenu'],
            'date_publication' => now(),
        ]);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article publié avec succès.');
    }

    public function edit(int $id): View|RedirectResponse
    {
        $article = Article::find($id);

        if (! $article) {
            return redirect()->route('admin.articles.index')
                ->with('error', 'Article introuvable.');
        }

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $article = Article::find($id);

        if (! $article) {
            return redirect()->route('admin.articles.index')
                ->with('error', 'Article introuvable.');
        }

        $validated = $request->validate([
            'titre'   => ['required', 'string', 'max:255'],
            'contenu' => ['required', 'string'],
        ]);

        $article->update($validated);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article mis à jour avec succès.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $article = Article::find($id);

        if ($article) {
            $article->delete();
        }

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article supprimé.');
    }
}
