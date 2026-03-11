<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Enregistrement du ProgressService en singleton
        $this->app->singleton(\App\Services\ProgressService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS en production
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        // Configuration des dates locales (optionnel)
        \Carbon\Carbon::setLocale(config('app.locale'));

        // Pagination Bootstrap (si vous utilisez Bootstrap)
        // \Illuminate\Pagination\Paginator::useBootstrap();
    }
}