<?php

namespace App\Observers;

use App\Models\Progress;

class ProgressObserver
{
    /**
     * Handle the Progress "created" event.
     */
    public function created(Progress $progress): void
    {
        // Mettre à jour les statistiques si nécessaire
    }

    /**
     * Handle the Progress "updated" event.
     */
    public function updated(Progress $progress): void
    {
        if ($progress->wasChanged('is_completed') && $progress->is_completed) {
            // Vérifier si le module/cours est complété
        }
    }
}