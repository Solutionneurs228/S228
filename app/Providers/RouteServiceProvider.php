<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Le namespace du contrôleur par défaut.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Le chemin vers les fichiers de routes.
     *
     * @var string
     */
    public const HOME = '/dashboard'; // Ou '/home' selon votre config

    /**
     * Enregistrement des services de routage.
     */
    public function register(): void
    {
        parent::register();
    }

    /**
     * Boot des routes et configurations.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();
        $this->configureRoutes();
        $this->configureBindings();
    }

    /**
     * Configuration du rate limiting pour la plateforme e-learning.
     */
    protected function configureRateLimiting(): void
    {
            // Limitation des tentatives de quiz (anti-triche / spam)
    RateLimiter::for('quiz', function (Request $request) {
        return Limit::perMinute(10)->by(
            $request->user()?->id ?: $request->ip()
        )->response(function () {
            return response()->json([
                'error' => 'Trop de tentatives. Veuillez patienter.'
            ], 429);
        });
        });

           // Limitation des demandes d'inscription (anti-spam)
    RateLimiter::for('enrollment', function (Request $request) {
        return Limit::perDay(5)->by(
            $request->user()?->id ?: $request->ip()
        )->response(function () {
            return redirect()->back()
                ->with('error', 'Limite de demandes atteinte. Réessayez demain.');
        });
    });

        // API progression (tracking temps réel)
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(
                $request->user()?->id ?: $request->ip()
            );
        });

        // Limitation globale pour les routes d'apprentissage
        RateLimiter::for('learning', function (Request $request) {
            return Limit::perMinute(100)->by(
                $request->user()?->id ?: $request->ip()
            );
        });

        // Limitation des uploads (si vous ajoutez des fichiers)
        RateLimiter::for('uploads', function (Request $request) {
            return Limit::perHour(10)->by(
                $request->user()?->id ?: $request->ip()
            );
        });

        // Route par défaut pour l'API
        RateLimiter::for('api-default', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    /**
     * Configuration des routes de l'application.
     */
    protected function configureRoutes(): void
    {
        // Routes API
        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));
        });

        // Routes Web
        $this->routes(function () {
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });

        // Routes E-Learning spécifiques (chargement conditionnel)
        $this->mapLearningRoutes();
    }

    /**
     * Routes spécifiques à la plateforme e-learning.
     */
    protected function mapLearningRoutes(): void
    {
        // Vérifier si les tables existent (évite erreurs lors de migrate:fresh)
        if (!app()->runningInConsole() || app()->runningUnitTests()) {
            try {
                Route::middleware(['web', 'auth'])
                    ->prefix('formations')
                    ->name('learning.')
                    ->group(function () {
                        // Ces routes sont définies dans web.php mais on peut
                        // ajouter ici des routes dynamiques si nécessaire
                    });
            } catch (\Exception $e) {
                // Ignorer si BDD non disponible
            }
        }
    }

    /**
     * Configuration des bindings de route modèles.
     */
    protected function configureBindings(): void
    {
        // Binding explicite pour les slugs de cours
        Route::bind('course', function ($value) {
 // Si c'est un nombre, cherche par ID, sinon par slug
    if (is_numeric($value)) {
        return \App\Models\Course::where('id', $value)
            ->where('is_published', true)
            ->firstOrFail();
    }
    
    return \App\Models\Course::where('slug', $value)
        ->where('is_published', true)
        ->firstOrFail();
        });


        

        // Binding pour les modules avec vérification d'appartenance
        Route::bind('module', function ($value) {
            return \App\Models\Module::where('id', $value)
                ->where('is_published', true)
                ->firstOrFail();
        });

        // Binding pour les leçons
        Route::bind('lesson', function ($value) {
            return \App\Models\Lesson::where('id', $value)
                ->where('is_published', true)
                ->firstOrFail();
        });

        // Binding pour les résultats de quiz (sécurité utilisateur)
        Route::bind('result', function ($value) {
            $result = \App\Models\QuizResult::findOrFail($value);
            
            // Vérification propriétaire (sauf admin)
            if (!auth()->user()?->isAdmin() && $result->user_id !== auth()->id()) {
                abort(403, 'Accès non autorisé à ce résultat.');
            }
            
            return $result;
        });
    }

    /**
     * Configuration du rate limiting pour les routes spécifiques.
     * Méthode legacy pour compatibilité Laravel < 8
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}