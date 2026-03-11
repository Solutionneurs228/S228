<?php

namespace App\Http\Middleware;

use App\Models\Course;
use App\Models\Module;
use App\Services\ProgressService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CourseAccess
{
    protected $progressService;

    public function __construct(ProgressService $progressService)
    {
        $this->progressService = $progressService;
    }

    /**
     * Vérifie l'accès complet à une formation ou ressource
     */
    public function handle(Request $request, Closure $next, string $accessLevel = 'learn'): Response
    {
        $user = $request->user();
        
        // 1. Vérifier authentification
        if (!$user) {
            return redirect()->route('login', ['redirect' => $request->url()])
                ->with('error', 'Veuillez vous connecter pour accéder à cette formation.');
        }

        // 2. Admin a tous les droits
        if ($user->isAdmin()) {
            return $next($request);
        }

        // 3. Récupérer la formation depuis la route
        $course = $request->route('course');
        if (!$course instanceof Course) {
            $course = Course::where('slug', $course)->firstOrFail();
        }

        // 4. Vérifier que la formation est publiée
        if (!$course->is_published) {
            abort(404, 'Cette formation n\'est pas disponible.');
        }

        // 5. Vérifier l'inscription approuvée
        $enrollment = $user->enrollments()
            ->where('course_id', $course->id)
            ->where('status', 'approved')
            ->first();

        if (!$enrollment) {
            return redirect()->route('courses.show', $course->slug)
                ->with('error', 'Vous n\'avez pas accès à cette formation. Demandez l\'inscription.');
        }

        // 6. Vérifier non suspension
        if ($enrollment->status === 'suspended') {
            return redirect()->route('courses.show', $course->slug)
                ->with('error', 'Votre accès à cette formation a été suspendu. Contactez l\'administration.');
        }

        // 7. Niveaux d'accès spécifiques
        switch ($accessLevel) {
            case 'view':
                // Accès simple (déjà vérifié ci-dessus)
                return $next($request);
                
            case 'learn':
                // Accès apprentissage (déjà vérifié ci-dessus)
                return $next($request);
                
            case 'quiz':
                // Vérifier module spécifique pour quiz
                $module = $request->route('module');
                if ($module && !$this->progressService->isModuleCompleted($user, $module)) {
                    return redirect()->route('courses.learn', $course->slug)
                        ->with('error', 'Vous devez terminer toutes les leçons avant le quiz.');
                }
                return $next($request);
                
            default:
                return $next($request);
        }
    }
}