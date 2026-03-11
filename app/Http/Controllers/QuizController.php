<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\Quiz;
use App\Models\QuizResult;
use App\Services\ProgressService;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    protected $progressService;

    public function __construct(ProgressService $progressService)
    {
        $this->progressService = $progressService;
    }

    /**
     * Affiche la page de démarrage du quiz
     */
    public function show(Course $course, Module $module)
    {
        $user = auth()->user();

        // Vérifications
        if ($module->course_id !== $course->id) {
            abort(404);
        }

        // Vérifier que le module est complété (toutes leçons faites)
        if (!$this->progressService->isModuleCompleted($user, $module)) {
            return redirect()->route('courses.learn', $course)
                ->with('error', 'Vous devez terminer toutes les leçons du module avant de passer le quiz.');
        }

        $quiz = $module->quiz;

        if (!$quiz || !$quiz->is_published) {
            return redirect()->route('courses.learn', $course)
                ->with('info', 'Ce module ne nécessite pas de quiz de validation.');
        }

        // Vérifier si déjà réussi
        $bestResult = $quiz->getBestResult($user);
        if ($bestResult) {
            return view('courses.quiz.result', compact('course', 'module', 'quiz', 'bestResult'));
        }

        // Vérifier les tentatives restantes
        $attempts = $quiz->getUserAttempts($user);
        $remaining = $quiz->getRemainingAttempts($user);

        if ($remaining <= 0) {
            // Dernier résultat pour affichage
            $lastResult = $quiz->results()
                ->where('user_id', $user->id)
                ->orderBy('attempt_number', 'desc')
                ->first();
                
            return view('courses.quiz.exhausted', compact('course', 'module', 'quiz', 'lastResult'));
        }

        // Résultats précédents
        $previousResults = $quiz->results()
            ->where('user_id', $user->id)
            ->orderBy('attempt_number')
            ->get();

        return view('courses.quiz.show', compact(
            'course', 'module', 'quiz', 'attempts', 'remaining', 'previousResults'
        ));
    }

    /**
     * Démarre le quiz (créer une session)
     */
    public function start(Course $course, Module $module)
    {
        $user = auth()->user();
        $quiz = $module->quiz;

        if (!$quiz || !$quiz->canAttempt($user)) {
            return redirect()->back()->with('error', 'Vous ne pouvez pas passer ce quiz.');
        }

        // Créer le résultat de tentative
        $attemptNumber = $quiz->getUserAttempts($user) + 1;
        
        $result = QuizResult::create([
            'user_id' => $user->id,
            'quiz_id' => $quiz->id,
            'score' => 0,
            'max_score' => $quiz->total_points,
            'percentage' => 0,
            'is_passed' => false,
            'attempt_number' => $attemptNumber,
            'started_at' => now(),
        ]);

        return redirect()->route('quiz.take', [
            'course' => $course->slug,
            'module' => $module->id,
            'result' => $result->id
        ]);
    }

    /**
     * Affiche le quiz en cours de passation
     */
    public function take(Course $course, Module $module, QuizResult $result)
    {
        $user = auth()->user();

        // Vérifications de sécurité
        if ($result->user_id !== $user->id || $result->quiz->module_id !== $module->id) {
            abort(403);
        }

        if ($result->completed_at) {
            return redirect()->route('quiz.result.show', [
                'course' => $course->slug,
                'module' => $module->id,
                'result' => $result->id
            ]);
        }

        $quiz = $result->quiz;
        $questions = $quiz->questions;
        
        // Calculer le temps restant si limité
        $timeRemaining = null;
        if ($quiz->time_limit_minutes) {
            $elapsed = now()->diffInSeconds($result->started_at);
            $limit = $quiz->time_limit_minutes * 60;
            $timeRemaining = max(0, $limit - $elapsed);
        }

        return view('courses.quiz.take', compact(
            'course', 'module', 'quiz', 'result', 'questions', 'timeRemaining'
        ));
    }

    /**
     * Soumet les réponses et corrige
     */
    public function submit(Request $request, Course $course, Module $module, QuizResult $result)
    {
        $user = auth()->user();

        if ($result->user_id !== $user->id || $result->completed_at) {
            abort(403);
        }

        $quiz = $result->quiz;
        $questions = $quiz->questions;
        
        $answers = [];
        $score = 0;
        $maxScore = $quiz->total_points;

        foreach ($questions as $question) {
            $answer = $request->input("question_{$question->id}");
            $answers[] = [
                'question_id' => $question->id,
                'question_text' => $question->question_text,
                'given_answer' => $answer,
                'correct_answer' => $question->type === 'text' ? $question->correct_answer : $question->options,
                'is_correct' => $question->isCorrect($answer),
                'points_earned' => $question->isCorrect($answer) ? $question->points : 0,
                'explanation' => $question->explanation,
            ];

            if ($question->isCorrect($answer)) {
                $score += $question->points;
            }
        }

        $percentage = $maxScore > 0 ? round(($score / $maxScore) * 100) : 0;
        $isPassed = $percentage >= $quiz->passing_score;

        // Mettre à jour le résultat
        $result->update([
            'score' => $score,
            'max_score' => $maxScore,
            'percentage' => $percentage,
            'is_passed' => $isPassed,
            'answers' => $answers,
            'completed_at' => now(),
            'time_spent_seconds' => now()->diffInSeconds($result->started_at),
        ]);

        return redirect()->route('quiz.result.show', [
            'course' => $course->slug,
            'module' => $module->id,
            'result' => $result->id
        ]);
    }

    /**
     * Affiche le résultat détaillé
     */
    public function result(Course $course, Module $module, QuizResult $result)
    {
        $user = auth()->user();

        if ($result->user_id !== $user->id) {
            abort(403);
        }

        $quiz = $result->quiz;
        
        // Déterminer l'action suivante
        $nextAction = null;
        if ($result->is_passed) {
            // Chercher le module suivant
            $nextModule = Module::where('course_id', $course->id)
                ->where('order', '>', $module->order)
                ->where('is_published', true)
                ->orderBy('order')
                ->first();
                
            if ($nextModule) {
                $nextAction = [
                    'type' => 'next_module',
                    'text' => 'Continuer vers le module suivant',
                    'url' => route('courses.learn', $course->slug) . '#module-' . $nextModule->id,
                ];
            } else {
                $nextAction = [
                    'type' => 'course_complete',
                    'text' => 'Formation terminée ! Voir le récapitulatif',
                    'url' => route('courses.learn', $course->slug),
                ];
            }
        } else {
            $remaining = $quiz->getRemainingAttempts($user);
            if ($remaining > 0) {
                $nextAction = [
                    'type' => 'retry',
                    'text' => "Réessayer ({$remaining} tentative" . ($remaining > 1 ? 's' : '') . " restante" . ($remaining > 1 ? 's' : '') . ")",
                    'url' => route('quiz.show', ['course' => $course->slug, 'module' => $module->id]),
                ];
            } else {
                $nextAction = [
                    'type' => 'exhausted',
                    'text' => 'Contactez le support',
                    'url' => route('contact'),
                ];
            }
        }

        return view('courses.quiz.result', compact(
            'course', 'module', 'quiz', 'result', 'nextAction'
        ));
    }
}