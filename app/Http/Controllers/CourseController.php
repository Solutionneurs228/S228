<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CourseController extends Controller
{
    /**
     * Affiche le catalogue des formations
     */
    public function index(Request $request)
    {
        // Cache des catégories (1 heure)
        $categories = Cache::remember('course_categories', 3600, function () {
            return Course::published()->distinct()->pluck('category');
        });

        $query = Course::published()
            ->withCount(['modules' => function ($q) {
                $q->where('is_published', true);
            }])
            // Compter les leçons VIA les modules (relation indirecte)
            ->with(['modules' => function ($q) {
                $q->where('is_published', true)
                  ->withCount(['lessons' => function ($q) {
                      $q->where('is_published', true);
                  }]);
            }]);

        // Filtres...
        if ($request->has('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        if ($request->has('level') && $request->level !== 'all') {
            $query->where('level', $request->level);
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        $courses = $query->orderBy('created_at', 'desc')->paginate(9);

        // Calculer le total des leçons pour chaque cours
        foreach ($courses as $course) {
            $course->lessons_count = $course->modules->sum('lessons_count');
        }

        $levels = [
            'debutant' => 'Débutant', 
            'intermediaire' => 'Intermédiaire', 
            'avance' => 'Avancé'
        ];

        return view('courses.index', compact('courses', 'categories', 'levels'));
    }

    /**
     * Affiche le détail d'une formation
     */
public function show(string $slug)
{
    $cacheKey = "course_{$slug}";
    
    $course = Cache::remember($cacheKey, 1800, function () use ($slug) {
        return Course::where('slug', $slug)
            ->published()
            ->with([
                'modules' => function ($q) {
                    $q->where('is_published', true)
                      ->orderBy('order')
                      ->with([
                          'lessons' => function ($q) {
                              $q->where('is_published', true)->orderBy('order');
                          },
                          'quiz' => function ($q) {
                              $q->where('is_published', true);
                          }
                      ]);
                }
            ])
            ->firstOrFail();
    });

    $totalLessons = $course->modules->sum(function ($module) {
        return $module->lessons->count();
    });

    // ✅ INITIALISATION PAR DÉFAUT
    $enrollment = null;
    $progress = [
        'completed' => 0,
        'total' => 0,
        'percentage' => 0,
        'remaining' => 0
    ];
    
    if (auth()->check()) {
        $user = auth()->user();
        
        $enrollment = $user->enrollments()
            ->where('course_id', $course->id)
            ->first();

        if ($enrollment?->isApproved()) {
            $progress = app(\App\Services\ProgressService::class)->getCourseProgress($user, $course);
        }
    }

    return view('courses.show', compact('course', 'totalLessons', 'enrollment', 'progress'));
}
}