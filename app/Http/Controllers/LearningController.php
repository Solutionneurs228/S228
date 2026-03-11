<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Module;
use App\Services\ProgressService;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    protected $progressService;

    public function __construct(ProgressService $progressService)
    {
        $this->progressService = $progressService;
    }

    /**
     * Page d'accueil de l'apprentissage (tableau de bord du cours)
     */
    public function index(Course $course)
    {
        $user = auth()->user();
        
        // Vérifier l'inscription
        $enrollment = $user->enrollments()
            ->where('course_id', $course->id)
            ->where('status', 'approved')
            ->firstOrFail();

        // Progression globale
        $progress = $this->progressService->getCourseProgress($user, $course);

        // Modules avec statut d'accessibilité
        $modules = $course->modules()
            ->where('is_published', true)
            ->with(['lessons' => function ($query) {
                $query->where('is_published', true)->orderBy('order');
            }])
            ->orderBy('order')
            ->get()
            ->map(function ($module) use ($user) {
                $module->is_accessible = $this->progressService->canAccessModule($user, $module);
                $module->is_completed = $this->progressService->isModuleCompleted($user, $module);
                
                // Progression du module
                $totalLessons = $module->lessons->count();
                $completedLessons = \App\Models\Progress::where('user_id', $user->id)
                    ->where('module_id', $module->id)
                    ->where('is_completed', true)
                    ->count();
                
                $module->progress_percentage = $totalLessons > 0 
                    ? round(($completedLessons / $totalLessons) * 100) 
                    : 0;
                
                // Leçons avec statut
                $module->lessons->transform(function ($lesson) use ($user) {
                    $lessonProgress = \App\Models\Progress::where('user_id', $user->id)
                        ->where('lesson_id', $lesson->id)
                        ->first();
                    
                    $lesson->is_completed = $lessonProgress && $lessonProgress->is_completed;
                    $lesson->completed_at = $lessonProgress ? $lessonProgress->completed_at : null;
                    
                    return $lesson;
                });

                return $module;
            });

        // Prochaine leçon recommandée
        $nextLesson = $this->progressService->getNextLesson($user, $course);

        return view('courses.learn.index', compact(
            'course', 
            'modules', 
            'progress', 
            'nextLesson',
            'enrollment'
        ));
    }

    /**
     * Affichage d'une leçon spécifique
     */
    public function show(Course $course, Module $module, Lesson $lesson)
    {
        $user = auth()->user();

        // Vérifications de sécurité
        if ($module->course_id !== $course->id || $lesson->module_id !== $module->id) {
            abort(404);
        }

        // Vérifier l'accès au module
        if (!$this->progressService->canAccessModule($user, $module)) {
            return redirect()->route('courses.learn', $course)
                ->with('error', 'Vous devez compléter le module précédent pour accéder à celui-ci.');
        }

        // Progression de la leçon actuelle
        $lessonProgress = \App\Models\Progress::firstOrNew([
            'user_id' => $user->id,
            'lesson_id' => $lesson->id,
        ]);

        // Navigation précédent/suivant
        $adjacent = $this->progressService->getAdjacentLessons($user, $lesson);

        // Progression globale pour la sidebar
        $courseProgress = $this->progressService->getCourseProgress($user, $course);

        // Ressources formatées
        $resources = $lesson->resources ?? [];

        return view('courses.learn.lesson', compact(
            'course',
            'module',
            'lesson',
            'lessonProgress',
            'adjacent',
            'courseProgress',
            'resources'
        ));
    }

    /**
     * Marquer une leçon comme complétée (API)
     */
    public function complete(Request $request, Course $course, Module $module, Lesson $lesson)
    {
        $user = $request->user();

        // Vérifications
        if ($module->course_id !== $course->id || $lesson->module_id !== $module->id) {
            return response()->json(['error' => 'Leçon non trouvée'], 404);
        }

        // Compléter la leçon
        $progress = $this->progressService->completeLesson($user, $lesson);

        // Recalculer la progression
        $courseProgress = $this->progressService->getCourseProgress($user, $course);
        
        // Vérifier si le module est maintenant complété
        $moduleCompleted = $this->progressService->isModuleCompleted($user, $module);

        // Prochaine leçon
        $nextLesson = $this->progressService->getNextLesson($user, $course);

        return response()->json([
            'success' => true,
            'progress' => $courseProgress,
            'module_completed' => $moduleCompleted,
            'next_lesson' => $nextLesson ? [
                'id' => $nextLesson->id,
                'title' => $nextLesson->title,
                'url' => route('courses.lesson', [
                    'course' => $course->slug,
                    'module' => $nextLesson->module->id,
                    'lesson' => $nextLesson->id
                ])
            ] : null,
            'message' => $moduleCompleted 
                ? 'Module terminé ! ' . ($nextLesson ? 'Passez au suivant.' : 'Formation complétée !')
                : 'Leçon marquée comme terminée'
        ]);
    }

    /**
     * Mettre à jour le temps passé (tracking)
     */
    public function trackTime(Request $request, Lesson $lesson)
    {
        $request->validate([
            'time_spent_seconds' => 'required|integer|min:1|max:3600',
        ]);

        $user = $request->user();
        $minutes = ceil($request->time_spent_seconds / 60);

        \App\Models\Progress::updateOrCreate(
            [
                'user_id' => $user->id,
                'lesson_id' => $lesson->id,
            ],
            [
                'module_id' => $lesson->module_id,
                'course_id' => $lesson->module->course_id,
                'time_spent_minutes' => \DB::raw("time_spent_minutes + {$minutes}"),
            ]
        );

        return response()->json(['success' => true]);
    }
}