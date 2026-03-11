<?php

namespace App\Services;

use App\Models\Course;
use App\Models\Module;
use App\Models\Lesson;
use App\Models\Progress;
use App\Models\User;

class ProgressService
{
    /**
     * Marque une leçon comme complétée
     */
    public function completeLesson(User $user, Lesson $lesson): Progress
    {
        $progress = Progress::firstOrNew([
            'user_id' => $user->id,
            'lesson_id' => $lesson->id,
        ]);

        if (!$progress->exists || !$progress->is_completed) {
            $progress->fill([
                'module_id' => $lesson->module_id,
                'course_id' => $lesson->module->course_id,
                'is_completed' => true,
                'completed_at' => now(),
                'time_spent_minutes' => $progress->time_spent_minutes + 15, // Estimation moyenne
            ]);
            $progress->save();
        }

        return $progress;
    }

    /**
     * Vérifie si un module est complété
     */
    public function isModuleCompleted(User $user, Module $module): bool
    {
        $totalLessons = $module->lessons()->where('is_published', true)->count();
        $completedLessons = Progress::where('user_id', $user->id)
            ->where('module_id', $module->id)
            ->where('is_completed', true)
            ->count();

        return $totalLessons > 0 && $completedLessons >= $totalLessons;
    }

    /**
     * Vérifie si l'utilisateur a réussi le quiz du module
     */
    public function hasPassedQuiz(User $user, Module $module): bool
    {
        if (!$module->has_quiz || !$module->quiz || !$module->quiz->is_published) {
            return true; // Pas de quiz = considéré comme réussi
        }

        $bestResult = $module->quiz->getBestResult($user);
        return $bestResult !== null && $bestResult->is_passed;
    }

    /**
     * Vérifie si l'utilisateur peut accéder à un module
     */
    public function canAccessModule(User $user, Module $module): bool
    {
        // Premier module toujours accessible
        if ($module->order === 1 || $module->order === 0) {
            return true;
        }

        // Vérifier que le module précédent est complété ET quiz réussi
        $previousModule = Module::where('course_id', $module->course_id)
            ->where('order', '<', $module->order)
            ->where('is_published', true)
            ->orderBy('order', 'desc')
            ->first();

        if (!$previousModule) {
            return true;
        }

        $previousCompleted = $this->isModuleCompleted($user, $previousModule);
        $previousQuizPassed = $this->hasPassedQuiz($user, $previousModule);

        return $previousCompleted && $previousQuizPassed;
    }

    /**
     * Calcule la progression globale d'un utilisateur sur un cours
     */
    public function getCourseProgress(User $user, Course $course): array
    {
        $totalLessons = $course->modules()
            ->where('is_published', true)
            ->withCount(['lessons' => function ($q) {
                $q->where('is_published', true);
            }])
            ->get()
            ->sum('lessons_count');

        $completedLessons = Progress::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->where('is_completed', true)
            ->count();

        $percentage = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0;

        // Calcul du temps restant estimé
        $remainingLessons = $totalLessons - $completedLessons;
        $estimatedMinutesRemaining = $remainingLessons * 15; // Moyenne 15min par leçon

        // Modules complétés
        $completedModules = 0;
        foreach ($course->modules as $module) {
            if ($this->isModuleCompleted($user, $module)) {
                $completedModules++;
            }
        }

        // return [
        //     'total_lessons' => $totalLessons,
        //     'completed_lessons' => $completedLessons,
        //     'remaining_lessons' => $remainingLessons,
        //     'percentage' => $percentage,
        //     'estimated_hours_remaining' => ceil($estimatedMinutesRemaining / 60),
        //     'total_modules' => $course->modules()->where('is_published', true)->count(),
        //     'completed_modules' => $completedModules,
        //     'is_completed' => $percentage === 100 && $totalLessons > 0,
        // ];

        return [
    // Noms courts (pour la vue)
    'total' => $totalLessons,
    'completed' => $completedLessons,
    'remaining' => $remainingLessons,
    'percentage' => $percentage,
    
    // Noms longs (pour d'autres usages si nécessaire)
    'total_lessons' => $totalLessons,
    'completed_lessons' => $completedLessons,
    'remaining_lessons' => $remainingLessons,
    'estimated_hours_remaining' => ceil($estimatedMinutesRemaining / 60),
    'total_modules' => $course->modules()->where('is_published', true)->count(),
    'completed_modules' => $completedModules,
    'is_completed' => $percentage === 100 && $totalLessons > 0,
];
    }

    /**
     * Récupère la prochaine leçon à suivre
     */
    public function getNextLesson(User $user, Course $course): ?Lesson
    {
        foreach ($course->modules as $module) {
            // Vérifier si le module est accessible
            if (!$this->canAccessModule($user, $module)) {
                continue;
            }

            // Chercher la première leçon non complétée du module
            $completedLessonIds = Progress::where('user_id', $user->id)
                ->where('is_completed', true)
                ->pluck('lesson_id')
                ->toArray();

            $nextLesson = $module->lessons()
                ->where('is_published', true)
                ->whereNotIn('id', $completedLessonIds)
                ->orderBy('order')
                ->first();

            if ($nextLesson) {
                return $nextLesson;
            }
        }

        return null;
    }

    /**
     * Récupère la leçon précédente/suivante pour la navigation
     */
    public function getAdjacentLessons(User $user, Lesson $currentLesson): array
    {
        $module = $currentLesson->module;
        $course = $module->course;

        // Leçon précédente dans le même module
        $previous = Lesson::where('module_id', $module->id)
            ->where('order', '<', $currentLesson->order)
            ->where('is_published', true)
            ->orderBy('order', 'desc')
            ->first();

        // Si pas de précédente, chercher dans le module précédent accessible
        if (!$previous) {
            $prevModule = Module::where('course_id', $course->id)
                ->where('order', '<', $module->order)
                ->where('is_published', true)
                ->orderBy('order', 'desc')
                ->first();

            if ($prevModule && $this->canAccessModule($user, $prevModule)) {
                $previous = $prevModule->lessons()
                    ->where('is_published', true)
                    ->orderBy('order', 'desc')
                    ->first();
            }
        }

        // Leçon suivante dans le même module
        $next = Lesson::where('module_id', $module->id)
            ->where('order', '>', $currentLesson->order)
            ->where('is_published', true)
            ->orderBy('order')
            ->first();

        // Si pas de suivante, chercher dans le module suivant accessible
        if (!$next) {
            $nextModule = Module::where('course_id', $course->id)
                ->where('order', '>', $module->order)
                ->where('is_published', true)
                ->orderBy('order')
                ->first();

            if ($nextModule && $this->canAccessModule($user, $nextModule)) {
                $next = $nextModule->lessons()
                    ->where('is_published', true)
                    ->orderBy('order')
                    ->first();
            }
        }

        return ['previous' => $previous, 'next' => $next];
    }
}