<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;

// Routes publiques admin (login/logout)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login',  [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Routes protégées par le middleware AdminAuth
    Route::middleware(AdminAuth::class)->group(function () {
        Route::get('/dashboard', [AdminArticleController::class, 'dashboard'])->name('dashboard');
        Route::get('/articles',  [AdminArticleController::class, 'index'])->name('articles');
        Route::post('/articles', [AdminArticleController::class, 'store'])->name('articles.store');
        Route::delete('/articles/{id}', [AdminArticleController::class, 'destroy'])->name('articles.destroy');
    });
});
