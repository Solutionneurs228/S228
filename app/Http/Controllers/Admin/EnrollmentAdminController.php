<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnrollmentApproved;
use App\Mail\EnrollmentRejected;

class EnrollmentAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']); // Adaptez selon votre système de rôles
    }

    /**
     * Liste des demandes d'inscription
     */
    public function index(Request $request)
    {
        $query = Enrollment::with(['user', 'course']);

        // Filtre par statut
        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Filtre par formation
        if ($request->has('course') && $request->course !== 'all') {
            $query->where('course_id', $request->course);
        }

        $enrollments = $query->latest()->paginate(20);
        $courses = Course::published()->pluck('title', 'id');

        return view('admin.enrollments.index', compact('enrollments', 'courses'));
    }

    /**
     * Approuver une inscription
     */
    public function approve(Enrollment $enrollment)
    {
        if ($enrollment->status !== 'pending') {
            return back()->with('error', 'Cette demande a déjà été traitée.');
        }

        $enrollment->update([
            'status' => 'approved',
            'approved_at' => now(),
            'approved_by' => auth()->id(),
        ]);

        // Notifier l'utilisateur
        // Mail::to($enrollment->user->email)->send(new EnrollmentApproved($enrollment));

        return back()->with('success', 'Inscription approuvée avec succès.');
    }

    /**
     * Refuser une inscription
     */
    public function reject(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'admin_notes' => 'required|string|max:1000',
        ]);

        if ($enrollment->status !== 'pending') {
            return back()->with('error', 'Cette demande a déjà été traitée.');
        }

        $enrollment->update([
            'status' => 'rejected',
            'admin_notes' => $request->admin_notes,
            'approved_by' => auth()->id(),
        ]);

        // Notifier l'utilisateur
        // Mail::to($enrollment->user->email)->send(new EnrollmentRejected($enrollment));

        return back()->with('success', 'Demande refusée avec notification à l\'utilisateur.');
    }

    /**
     * Suspendre un accès approuvé
     */
    public function suspend(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'admin_notes' => 'required|string|max:1000',
        ]);

        if ($enrollment->status !== 'approved') {
            return back()->with('error', 'Seuls les accès approuvés peuvent être suspendus.');
        }

        $enrollment->update([
            'status' => 'suspended',
            'admin_notes' => $request->admin_notes,
        ]);

        return back()->with('success', 'Accès suspendu. L\'utilisateur a été notifié.');
    }

    /**
     * Réactiver un accès suspendu
     */
    public function reactivate(Enrollment $enrollment)
    {
        if ($enrollment->status !== 'suspended') {
            return back()->with('error', 'Cet accès n\'est pas suspendu.');
        }

        $enrollment->update([
            'status' => 'approved',
            'admin_notes' => null,
        ]);

        return back()->with('success', 'Accès réactivé avec succès.');
    }
}