<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Les écouteurs d'événements de l'application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [
        // Événements d'inscription
        \App\Events\EnrollmentRequested::class => [
            \App\Listeners\NotifyAdminOfEnrollment::class,
        ],
        
        \App\Events\EnrollmentApproved::class => [
            \App\Listeners\NotifyUserOfApproval::class,
            \App\Listeners\GrantCourseAccess::class,
        ],
        
        // Événements de progression
        \App\Events\LessonCompleted::class => [
            \App\Listeners\UpdateCourseProgress::class,
        ],
        
        \App\Events\ModuleCompleted::class => [
            \App\Listeners\CheckQuizEligibility::class,
        ],
        
        \App\Events\QuizPassed::class => [
            \App\Listeners\UnlockNextModule::class,
        ],
        
        // Événement formation terminée
        \App\Events\CourseCompleted::class => [
            \App\Listeners\GenerateCertificate::class,
            \App\Listeners\NotifyCompletion::class,
        ],
    ];

    /**
     * Les modèles à observer.
     *
     * @var array<string, string>
     */
    protected $observers = [
        \App\Models\Enrollment::class => \App\Observers\EnrollmentObserver::class,
        \App\Models\Progress::class => \App\Observers\ProgressObserver::class,
    ];

    /**
     * Enregistrement des événements.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Détermine si les événements et les listeners doivent être découverts automatiquement.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}