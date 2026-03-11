<?php

namespace App\Console\Commands;

use App\Models\Course;
use App\Models\Module;
use App\Models\Lesson;
use App\Models\Quiz;
use Illuminate\Console\Command;

class VerifyCoursesIntegrity extends Command
{
    protected $signature = 'courses:verify';
    protected $description = 'Vérifie l\'intégrité des données des formations';

    public function handle(): int
    {
        $this->info('Vérification de l\'intégrité des formations...');

        $errors = [];

        // 1. Vérifier les cours sans modules
        $coursesWithoutModules = Course::doesntHave('modules')->count();
        if ($coursesWithoutModules > 0) {
            $errors[] = "{$coursesWithoutModules} cours sans modules";
        }

        // 2. Vérifier les modules sans leçons
        $modulesWithoutLessons = Module::doesntHave('lessons')->count();
        if ($modulesWithoutLessons > 0) {
            $errors[] = "{$modulesWithoutLessons} modules sans leçons";
        }

        // 3. Vérifier les ordres en double
        $duplicateOrders = Module::select('course_id', 'order')
            ->groupBy('course_id', 'order')
            ->havingRaw('COUNT(*) > 1')
            ->count();
        if ($duplicateOrders > 0) {
            $errors[] = "{$duplicateOrders} ordres de modules en double";
        }

        // 4. Vérifier les quiz orphelins (module supprimé)
        $orphanQuizzes = Quiz::whereDoesntHave('module')->count();
        if ($orphanQuizzes > 0) {
            $errors[] = "{$orphanQuizzes} quiz sans module";
        }

        // 5. Vérifier les leçons avec contenu vide
        $emptyLessons = Lesson::whereNull('content')->orWhere('content', '')->count();
        if ($emptyLessons > 0) {
            $errors[] = "{$emptyLessons} leçons sans contenu";
        }

        if (count($errors) > 0) {
            $this->error('Problèmes détectés :');
            foreach ($errors as $error) {
                $this->error("  - {$error}");
            }
            return 1;
        }

        $this->info('✓ Toutes les vérifications sont passées !');
        return 0;
    }
}