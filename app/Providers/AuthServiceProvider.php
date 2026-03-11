<?php

namespace App\Providers;

use App\Models\Course;
use App\Policies\CoursePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Les policies de l'application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Course::class => CoursePolicy::class,
    ];

    /**
     * Enregistrement des policies et gates.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate pour vérifier rapidement l'accès formation
        Gate::define('access-course', function ($user, $course) {
            return $user->isAdmin() || 
                   $user->enrollments()
                       ->where('course_id', $course->id)
                       ->where('status', 'approved')
                       ->exists();
        });

        // Gate pour vérifier si l'utilisateur peut s'inscrire
        Gate::define('enroll-course', function ($user, $course) {
            $existing = $user->enrollments()
                ->where('course_id', $course->id)
                ->exists();
            
            return !$existing && $course->is_published;
        });

        // Gate pour la gestion admin
        Gate::define('manage-courses', function ($user) {
            return $user->isAdmin();
        });
    }
}