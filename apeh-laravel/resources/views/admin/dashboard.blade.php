<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Admin APEH</title>
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
        .topbar a {
            color: #aac4e8;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .topbar a:hover { color: white; }
        .container { max-width: 900px; margin: 3rem auto; padding: 0 1rem; }
        h2 { color: #0f3460; margin-bottom: 1.5rem; }
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem; }
        .card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            text-decoration: none;
            color: #333;
            transition: transform 0.2s, box-shadow 0.2s;
            display: block;
        }
        .card:hover { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,0.12); }
        .card .icon { font-size: 2.5rem; margin-bottom: 1rem; }
        .card h3 { font-size: 1.1rem; color: #0f3460; }
        .card p { font-size: 0.85rem; color: #666; margin-top: 0.4rem; }
    </style>
</head>
<body>
    <div class="topbar">
        <h1>Bienvenue, {{ session('admin_username') }}</h1>
        <form method="POST" action="{{ route('admin.logout') }}" style="display:inline">
            @csrf
            <button type="submit" style="background:none;border:none;cursor:pointer;color:#aac4e8;font-size:0.9rem;">
                Se déconnecter
            </button>
        </form>
    </div>

    <div class="container">
        <h2>Que souhaitez-vous faire ?</h2>
        <div class="cards">
            <a href="{{ route('admin.articles') }}" class="card">
                <div class="icon">📝</div>
                <h3>Gérer les articles</h3>
                <p>Publier, modifier ou supprimer des articles</p>
            </a>
        </div>
    </div>
</body>
</html>
