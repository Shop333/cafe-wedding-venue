<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Baris penting 1

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Baris penting 2: Paksa Laravel pakai HTTPS di server
        if (config('app.env') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
