<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue dans l'APEH-France !</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f4f8; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #1d3650, #2980b9); padding: 40px 30px; text-align: center; }
        .header h1 { color: white; font-size: 24px; margin: 0; }
        .header p { color: rgba(255,255,255,0.8); margin: 8px 0 0; font-size: 14px; }
        .body { padding: 40px 30px; }
        .body h2 { color: #1d3650; font-size: 20px; margin-bottom: 16px; }
        .body p { color: #555; line-height: 1.7; margin-bottom: 16px; }
        .cta { display: inline-block; background: #c0392b; color: white; padding: 12px 28px; border-radius: 8px; text-decoration: none; font-weight: bold; margin: 16px 0; }
        .footer { background: #f8f9fa; padding: 20px 30px; text-align: center; font-size: 12px; color: #999; }
        .footer a { color: #2980b9; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🇭🇹 APEH-France</h1>
            <p>Association des Professionnels et Étudiants Haïtiens de France</p>
        </div>
        <div class="body">
            <h2>Bienvenue, {{ $prenom }} !</h2>
            <p>Nous sommes ravis de vous accueillir dans la communauté <strong>APEH-France</strong>. Votre inscription a bien été enregistrée.</p>
            <p>En rejoignant notre association, vous faites partie d'une communauté dynamique de professionnels et d'étudiants haïtiens engagés en France, unis par la solidarité, la culture et la réussite.</p>
            <p>Vous serez informé(e) de nos prochains événements, activités et actualités.</p>
            <a href="{{ url('/') }}" class="cta">Visiter notre site</a>
            <p>Pour toute question, contactez-nous à : <a href="mailto:apeh.france509@gmail.com" style="color: #2980b9;">apeh.france509@gmail.com</a></p>
            <p>À très bientôt,<br><strong>L'équipe APEH-France</strong></p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} APEH-France. Tous droits réservés.</p>
            <p>
                <a href="{{ url('/politique-de-confidentialite') }}">Politique de confidentialité</a> ·
                <a href="{{ url('/mentions-legales') }}">Mentions légales</a>
            </p>
        </div>
    </div>
</body>
</html>
