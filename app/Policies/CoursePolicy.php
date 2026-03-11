<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;

class CoursePolicy
{
    /**
     * Voir le catalogue (tous les utilisateurs)
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Voir le détail d'une formation
     */
    public function view(?User $user, Course $course): bool
    {
        // Tout le monde peut voir les formations publiées
        return $course->is_published;
    }

    /**
     * S'inscrire à une formation
     */
    public function enroll(User $user, Course $course): bool
    {
        // Pas déjà inscrit
        $existing = $user->enrollments()->where('course_id', $course->id)->exists();
        
        return !$existing && $course->is_published;
    }

    /**
     * Apprendre (accès contenu)
     */
    public function learn(User $user, Course $course): bool
    {
        if ($user->isAdmin()) {
            return true;
        }

        return $user->enrollments()
            ->where('course_id', $course->id)
            ->where('status', 'approved')
            ->exists();
    }

    /**
     * Gérer (admin)
     */
    public function manage(User $user, Course $course): bool
    {
        return $user->isAdmin();
    }

    /**
     * Créer (admin)
     */
    public function create(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Modifier (admin)
     */
    public function update(User $user, Course $course): bool
    {
        return $user->isAdmin();
    }

    /**
     * Supprimer (admin)
     */
    public function delete(User $user, Course $course): bool
    {
        return $user->isAdmin();
    }
}