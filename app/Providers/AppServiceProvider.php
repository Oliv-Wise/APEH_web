<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
=======
>>>>>>> 8016f7055a9b01486f6766ac6bc6554732c86933

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
<<<<<<< HEAD
        Paginator::useTailwind();
=======
        //
>>>>>>> 8016f7055a9b01486f6766ac6bc6554732c86933
    }
}
