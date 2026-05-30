<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles - Admin APEH</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', sans-serif; background: #f4f6f9; }
        .topbar {
            background: #0f3460;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .topbar h1 { font-size: 1.3rem; }
        .topbar-links a, .topbar-links button {
            color: #aac4e8;
            text-decoration: none;
            font-size: 0.9rem;
            background: none;
            border: none;
            cursor: pointer;
            margin-left: 1.5rem;
        }
        .topbar-links a:hover, .topbar-links button:hover { color: white; }
        .container { max-width: 900px; margin: 2rem auto; padding: 0 1rem; }
        .alert-success {
            background: #d1fae5;
            color: #065f46;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border-left: 4px solid #10b981;
        }
        .card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }
        h2 { color: #0f3460; margin-bottom: 1.5rem; font-size: 1.2rem; }
        .form-group { margin-bottom: 1.2rem; }
        label { display: block; font-size: 0.85rem; font-weight: 600; color: #333; margin-bottom: 0.4rem; }
        input[type="text"], textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            outline: none;
            transition: border-color 0.2s;
        }
        input[type="text"]:focus, textarea:focus { border-color: #0f3460; }
        textarea { resize: vertical; min-height: 150px; }
        .btn-primary {
            background: #0f3460;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-primary:hover { background: #16213e; }
        .btn-danger {
            background: none;
            color: #dc2626;
            border: none;
            cursor: pointer;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.3rem 0.6rem;
            border-radius: 6px;
            transition: background 0.2s;
        }
        .btn-danger:hover { background: #fee2e2; }
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 0.75rem 1rem; font-size: 0.8rem; color: #666; text-transform: uppercase; border-bottom: 2px solid #f0f0f0; }
        td { padding: 0.9rem 1rem; border-bottom: 1px solid #f0f0f0; font-size: 0.95rem; }
        tr:last-child td { border-bottom: none; }
        .empty { text-align: center; color: #999; padding: 2rem; }
    </style>
</head>
<body>
    <div class="topbar">
        <h1>Gestion des articles</h1>
        <div class="topbar-links">
            <a href="{{ route('admin.dashboard') }}">← Dashboard</a>
            <form method="POST" action="{{ route('admin.logout') }}" style="display:inline">
                @csrf
                <button type="submit">Se déconnecter</button>
            </form>
        </div>
    </div>

    <div class="container">
        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <h2>Publier un nouvel article</h2>
            <form method="POST" action="{{ route('admin.articles.store') }}">
                @csrf
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre"
                           value="{{ old('titre') }}" required>
                    @error('titre')<p style="color:#dc2626;font-size:0.8rem;margin-top:0.3rem">{{ $message }}</p>@enderror
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea id="contenu" name="contenu" required>{{ old('contenu') }}</textarea>
                    @error('contenu')<p style="color:#dc2626;font-size:0.8rem;margin-top:0.3rem">{{ $message }}</p>@enderror
                </div>
                <button type="submit" class="btn-primary">Publier l'article</button>
            </form>
        </div>

        <div class="card">
            <h2>Articles publiés</h2>
            @if ($articles->isEmpty())
                <p class="empty">Aucun article publié pour le moment.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->titre }}</td>
                            <td>{{ \Carbon\Carbon::parse($article->date_publication)->format('d/m/Y') }}</td>
                            <td>
                                <form method="POST"
                                      action="{{ route('admin.articles.destroy', $article->id) }}"
                                      onsubmit="return confirm('Supprimer cet article ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</body>
</html>
