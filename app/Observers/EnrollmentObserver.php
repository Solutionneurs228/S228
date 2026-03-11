<?php

namespace App\Observers;

use App\Models\Enrollment;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnrollmentRequestedMail;

class EnrollmentObserver
{
    /**
     * Handle the Enrollment "created" event.
     */
    public function created(Enrollment $enrollment): void
    {
        // Notifier l'admin
        // Mail::to(config('mail.admin_address'))->send(new EnrollmentRequestedMail($enrollment));
    }

    /**
     * Handle the Enrollment "updated" event.
     */
    public function updated(Enrollment $enrollment): void
    {
        if ($enrollment->wasChanged('status')) {
            if ($enrollment->status === 'approved') {
                // Notifier l'utilisateur de l'approbation
            } elseif ($enrollment->status === 'rejected') {
                // Notifier l'utilisateur du refus
            }
        }
    }

    /**
     * Handle the Enrollment "deleted" event.
     */
    public function deleted(Enrollment $enrollment): void
    {
        //
    }
}