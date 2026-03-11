<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [];

    protected $observers = [
        \App\Models\Enrollment::class => \App\Observers\EnrollmentObserver::class,
        \App\Models\Progress::class => \App\Observers\ProgressObserver::class,
    ];

    public function boot(): void
    {
        parent::boot();
    }
}