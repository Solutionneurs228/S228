<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnrollmentRequested;
use App\Mail\EnrollmentApproved;
use App\Mail\EnrollmentRejected;

class EnrollmentController extends Controller
{
    /**
     * Demande d'inscription à une formation
     */
    public function store(Request $request, Course $course)
    {
        $user = $request->user();

        // Vérifier si déjà inscrit
        $existingEnrollment = Enrollment::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->first();

        if ($existingEnrollment) {
            return redirect()->route('courses.show', $course->slug)
                ->with('info', 'Vous avez déjà une demande en cours pour cette formation.');
        }

        // Créer la demande
        $enrollment = Enrollment::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'status' => 'pending',
        ]);

        // Notifier les admins (à configurer selon votre système de notification)
        // Mail::to(config('mail.admin_address'))->send(new EnrollmentRequested($enrollment));

        return redirect()->route('courses.show', $course->slug)
            ->with('success', 'Votre demande d\'accès a été envoyée. Notre équipe l\'examinera sous 24-48h.');
    }

    /**
     * Annuler une demande d'inscription
     */
    public function destroy(Course $course)
    {
        $enrollment = auth()->user()->enrollments()
            ->where('course_id', $course->id)
            ->where('status', 'pending')
            ->first();

        if ($enrollment) {
            $enrollment->delete();
            return redirect()->route('courses.show', $course->slug)
                ->with('success', 'Votre demande a été annulée.');
        }

        return redirect()->route('courses.show', $course->slug)
            ->with('error', 'Impossible d\'annuler cette demande.');
    }
}