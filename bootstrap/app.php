<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
<<<<<<< HEAD
=======
        api: __DIR__.'/../routes/api.php',
>>>>>>> 8016f7055a9b01486f6766ac6bc6554732c86933
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
<<<<<<< HEAD
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);
=======
        //
>>>>>>> 8016f7055a9b01486f6766ac6bc6554732c86933
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
