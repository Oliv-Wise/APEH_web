# APEH-France – Version Laravel Modernisée

Site vitrine modernisé de l'Association des Professionnels et Étudiants Haïtiens de France.

## Stack technique

- **Framework** : Laravel 11
- **Templates** : Blade
- **CSS** : Tailwind CSS 3
- **JS** : Alpine.js (interactions légères)
- **Base de données** : PostgreSQL
- **Build** : Vite

---

## Installation

### Prérequis

- PHP 8.1+
- Composer
- Node.js 18+
- PostgreSQL
- Extension PHP : `pdo_pgsql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`

### Étapes

```bash
# 1. Aller dans le dossier Laravel
cd apeh-laravel

# 2. Installer les dépendances PHP
composer install

# 3. Installer les dépendances Node
npm install

# 4. Copier le fichier d'environnement
cp .env.example .env

# 5. Générer la clé d'application
php artisan key:generate

# 6. Configurer la base de données dans .env
# DB_CONNECTION=pgsql
# DB_HOST=127.0.0.1
# DB_PORT=5432
# DB_DATABASE=apeh_france
# DB_USERNAME=postgres
# DB_PASSWORD=votre_mot_de_passe

# 7. Créer la base de données PostgreSQL
createdb apeh_france

# 8. Lancer les migrations (crée les tables + admin par défaut)
php artisan migrate

# 9. Compiler les assets CSS/JS
npm run build

# 10. Lancer le serveur de développement
php artisan serve
```

Le site sera accessible sur : **http://localhost:8000**

---

## Développement (hot reload)

```bash
# Terminal 1 : serveur Laravel
php artisan serve

# Terminal 2 : Vite (hot reload CSS/JS)
npm run dev
```

---

## Accès administrateur

- URL : `http://localhost:8000/admin/connexion`
- Identifiant par défaut : `admin`
- Mot de passe par défaut : `ChangeMe2024!`

> ⚠️ **IMPORTANT** : Changez le mot de passe admin immédiatement après la première connexion !

Pour changer le mot de passe via Artisan :
```bash
php artisan tinker
>>> \App\Models\Admin::first()->update(['password_hash' => \Hash::make('VotreNouveauMotDePasse')]);
```

---

## Configuration email (SMTP)

Dans `.env` :
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=votre@gmail.com
MAIL_PASSWORD=votre_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=apeh.france509@gmail.com
MAIL_FROM_NAME="APEH-France"
```

---

## Structure des dossiers

```
apeh-laravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/          # Contrôleurs admin
│   │   │   ├── HomeController.php
│   │   │   ├── AboutController.php
│   │   │   ├── ArticleController.php
│   │   │   ├── DonateController.php
│   │   │   ├── MemberController.php
│   │   │   ├── PolesController.php
│   │   │   └── StaticPageController.php
│   │   └── Middleware/
│   │       └── AdminMiddleware.php
│   ├── Models/
│   │   ├── Admin.php
│   │   ├── Article.php
│   │   └── User.php
│   └── Providers/
│       └── AppServiceProvider.php
├── database/migrations/        # Migrations PostgreSQL
├── resources/
│   ├── css/app.css             # Tailwind CSS
│   ├── js/app.js               # Alpine.js
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php   # Layout public
│       │   └── admin.blade.php # Layout admin
│       ├── components/
│       │   ├── header.blade.php
│       │   └── footer.blade.php
│       ├── public/             # Pages publiques
│       ├── admin/              # Pages admin
│       └── emails/             # Templates email
├── routes/web.php              # Toutes les routes
├── tailwind.config.js
├── vite.config.js
└── .env.example
```

---

## Routes principales

| Route | URL | Description |
|-------|-----|-------------|
| `home` | `/` | Page d'accueil |
| `about` | `/qui-sommes-nous` | Qui sommes-nous |
| `values` | `/valeurs-et-vision` | Valeurs & Vision |
| `join` | `/pourquoi-nous-rejoindre` | Pourquoi rejoindre |
| `poles` | `/poles-et-contact` | Pôles & Contact |
| `implantation` | `/implantation` | Implantation |
| `articles.index` | `/articles` | Liste des articles |
| `articles.show` | `/articles/{id}` | Article détail |
| `donate` | `/faire-un-don` | Faire un don |
| `member.create` | `/devenir-membre` | Formulaire inscription |
| `status` | `/statut` | Statut association |
| `mentions` | `/mentions-legales` | Mentions légales |
| `privacy` | `/politique-de-confidentialite` | Politique RGPD |
| `admin.login` | `/admin/connexion` | Connexion admin |
| `admin.dashboard` | `/admin/tableau-de-bord` | Tableau de bord |
| `admin.articles.*` | `/admin/articles` | Gestion articles |
| `admin.members.*` | `/admin/membres` | Gestion membres |

---

## Checklist de test

### Pages publiques
- [ ] Page d'accueil s'affiche avec hero, missions, valeurs, pôles, articles
- [ ] Navigation desktop et mobile fonctionnelle
- [ ] Page "Qui sommes-nous" avec réalisations et activités
- [ ] Page "Valeurs & Vision" avec slogan
- [ ] Page "Pourquoi nous rejoindre"
- [ ] Page "Pôles & Contact" avec les 8 pôles
- [ ] Page "Implantation" avec adresse
- [ ] Page "Articles" avec pagination
- [ ] Page article individuel avec sidebar
- [ ] Page "Faire un don" avec widget HelloAsso
- [ ] Page "Devenir membre" avec formulaire complet
- [ ] Confirmation d'inscription après soumission
- [ ] Page "Statut" avec contenu complet
- [ ] Mentions légales
- [ ] Politique de confidentialité
- [ ] Footer avec liens réseaux sociaux

### Formulaire d'inscription
- [ ] Validation côté serveur (champs requis, email unique, RGPD)
- [ ] Messages d'erreur accessibles (aria-describedby)
- [ ] Champ "Autre statut" conditionnel (Alpine.js)
- [ ] Protection CSRF active
- [ ] Email de confirmation envoyé (si SMTP configuré)
- [ ] Redirection vers page de confirmation

### Administration
- [ ] Connexion admin avec identifiants corrects
- [ ] Redirection si non connecté (middleware)
- [ ] Tableau de bord avec statistiques
- [ ] Création d'article
- [ ] Modification d'article
- [ ] Suppression d'article (avec confirmation)
- [ ] Liste des membres avec pagination
- [ ] Suppression membre (RGPD)
- [ ] Déconnexion sécurisée

### Sécurité
- [ ] CSRF sur tous les formulaires POST
- [ ] Middleware admin sur toutes les routes protégées
- [ ] Échappement HTML (Blade `{{ }}`)
- [ ] Validation serveur stricte
- [ ] Session régénérée à la connexion
- [ ] Mots de passe hashés (bcrypt)

### Responsive
- [ ] Mobile (320px+)
- [ ] Tablette (768px+)
- [ ] Desktop (1024px+)

### Accessibilité
- [ ] Labels sur tous les champs de formulaire
- [ ] aria-required, aria-describedby
- [ ] Navigation clavier (focus visible)
- [ ] Contraste suffisant
- [ ] Alt text sur les images

---

## Copier les assets de l'ancien site

```bash
# Depuis la racine du projet (dossier parent)
cp -r images/ apeh-laravel/public/images/
cp -r docs/ apeh-laravel/public/docs/
```

---

## Déploiement

1. Configurer `.env` avec les vraies valeurs (DB, SMTP, APP_KEY, APP_URL)
2. `composer install --optimize-autoloader --no-dev`
3. `npm run build`
4. `php artisan config:cache`
5. `php artisan route:cache`
6. `php artisan view:cache`
7. `php artisan migrate --force`
8. Configurer le serveur web (Apache/Nginx) pour pointer vers `public/`

---

## Sécurité en production

- Changer le mot de passe admin par défaut
- Mettre `APP_DEBUG=false`
- Configurer HTTPS
- Vérifier les permissions des dossiers `storage/` et `bootstrap/cache/`
