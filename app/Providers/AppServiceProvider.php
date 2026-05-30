<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Paginator::useTailwind();

        // Force la création des tables si la base PostgreSQL du Cloud est vide
        if (config('app.env') === 'production' && !Schema::hasTable('articles')) {
            Artisan::call('migrate', ['--force' => true]);
        }
    }
}