<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\AdminMiddleware;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::middlewareGroup('web', [
            // middleware web Laravel default
        ]);
    }
}
