# Déploiement Laravel Cloud - Espace Admin APEH

## Variables d'environnement à configurer sur Laravel Cloud

Dans le dashboard Laravel Cloud → votre projet → **Environment Variables** :

```
DB_CONNECTION=pgsql
DB_HOST=<host fourni par Laravel Cloud>
DB_PORT=5432
DB_DATABASE=<nom de la base>
DB_USERNAME=<utilisateur>
DB_PASSWORD=<mot de passe>
APP_KEY=<généré automatiquement>
APP_ENV=production
APP_DEBUG=false
```

## Après déploiement — Créer le compte admin

Dans le terminal Laravel Cloud (ou via SSH) :

```bash
php artisan migrate
php artisan db:seed --class=AdminSeeder
```

## Identifiants du président

| Champ | Valeur |
|-------|--------|
| URL | `/admin/login` |
| Username | `president_apeh` |
| Mot de passe | `APEH@2026!Secure` |

> ⚠️ Changer le mot de passe après la première connexion.

## Routes disponibles

- `GET  /admin/login`     → Page de connexion
- `GET  /admin/dashboard` → Tableau de bord (protégé)
- `GET  /admin/articles`  → Gestion des articles (protégé)
