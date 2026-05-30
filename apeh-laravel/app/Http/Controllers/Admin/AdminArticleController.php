<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminArticleController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $articles = DB::table('articles')
            ->orderBy('date_publication', 'desc')
            ->get();

        return view('admin.articles', compact('articles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre'   => 'required|string|max:255',
            'contenu' => 'required|string',
        ]);

        DB::table('articles')->insert([
            'titre'            => $request->titre,
            'contenu'          => $request->contenu,
            'date_publication' => now(),
        ]);

        return back()->with('success', 'Article publié avec succès.');
    }

    public function destroy($id)
    {
        DB::table('articles')->where('id', $id)->delete();
        return redirect()->route('admin.articles')->with('success', 'Article supprimé.');
    }
}
