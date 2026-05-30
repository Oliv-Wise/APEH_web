<?php
\Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PolesController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminMemberController;

/*
|--------------------------------------------------------------------------
| Pages publiques
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/qui-sommes-nous', [AboutController::class, 'index'])->name('about');
Route::get('/valeurs-et-vision', [AboutController::class, 'values'])->name('values');
Route::get('/pourquoi-nous-rejoindre', [AboutController::class, 'join'])->name('join');
Route::get('/poles-et-contact', [PolesController::class, 'index'])->name('poles');
Route::get('/implantation', [StaticPageController::class, 'implantation'])->name('implantation');
Route::get('/statut', [StaticPageController::class, 'status'])->name('status');
Route::get('/mentions-legales', [StaticPageController::class, 'mentions'])->name('mentions');
Route::get('/politique-de-confidentialite', [StaticPageController::class, 'privacy'])->name('privacy');

// Articles publics
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

// Don
Route::get('/faire-un-don', [DonateController::class, 'index'])->name('donate');

// Inscription membre
Route::get('/devenir-membre', [MemberController::class, 'create'])->name('member.create');
Route::post('/devenir-membre', [MemberController::class, 'store'])->name('member.store');
Route::get('/inscription-confirmee', [MemberController::class, 'confirmation'])->name('member.confirmation');

/*
|--------------------------------------------------------------------------
| Administration
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {
    // Auth
    Route::get('/connexion', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/connexion', [AuthController::class, 'login'])->name('login.post');
    Route::post('/deconnexion', [AuthController::class, 'logout'])->name('logout');

    // Pages protégées
    Route::middleware('admin')->group(function () {
        Route::get('/tableau-de-bord', [DashboardController::class, 'index'])->name('dashboard');

        // Articles
        Route::get('/articles', [AdminArticleController::class, 'index'])->name('articles.index');
        Route::get('/articles/creer', [AdminArticleController::class, 'create'])->name('articles.create');
        Route::post('/articles', [AdminArticleController::class, 'store'])->name('articles.store');
        Route::get('/articles/{id}/modifier', [AdminArticleController::class, 'edit'])->name('articles.edit');
        Route::put('/articles/{id}', [AdminArticleController::class, 'update'])->name('articles.update');
        Route::delete('/articles/{id}', [AdminArticleController::class, 'destroy'])->name('articles.destroy');

        // Membres inscrits
        Route::get('/membres', [AdminMemberController::class, 'index'])->name('members.index');
        Route::delete('/membres/{id}', [AdminMemberController::class, 'destroy'])->name('members.destroy');
    });
});
