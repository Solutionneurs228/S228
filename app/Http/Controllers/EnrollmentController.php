<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Affiche le formulaire d'inscription
     */
    public function create(Course $course)
    {
        $existingEnrollment = Auth::user()->enrollments()
            ->where('course_id', $course->id)
            ->first();

        if ($existingEnrollment) {
            return redirect()->route('learning.courses.show', $course)
                ->with('info', 'Vous êtes déjà inscrit à ce cours.');
        }

        return view('learning.enrollments.create', compact('course'));
    }

    /**
     * Traite l'inscription
     */
    public function store(Request $request, Course $course)
    {
        $user = Auth::user();

        if ($user->enrollments()->where('course_id', $course->id)->exists()) {
            return redirect()->route('learning.courses.show', $course)
                ->with('error', 'Vous êtes déjà inscrit.');
        }

        Enrollment::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'status' => 'pending',
        ]);

        return redirect()->route('learning.courses.show', $course)
            ->with('success', 'Inscription réussie !');
    }
}