<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Course;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin' => 'boolean',
    ];

    public function isAdmin(): bool
    {
        return $this->is_admin === true;
    }

    /**
     * Relations
     */
    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    public function progress(): HasMany
    {
        return $this->hasMany(Progress::class);
    }

    public function enrolledCourses(): BelongsToMany  // ← Ajoutez aussi le type de retour ici
    {
        return $this->belongsToMany(Course::class, 'enrollments')
            ->withPivot('status', 'approved_at')
            ->withTimestamps();
    }

    public function hasAccessTo(Course $course): bool
    {
        if ($this->isAdmin()) {
            return true;
        }

        $enrollment = $this->enrollments()
            ->where('course_id', $course->id)
            ->where('status', 'approved')
            ->first();

        return $enrollment !== null;
    }

    public function getProgressForCourse(Course $course): array
    {
        $totalLessons = $course->total_lessons;
        $completedLessons = $this->progress()
            ->where('course_id', $course->id)
            ->where('is_completed', true)
            ->count();

        $percentage = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0;

        return [
            'completed' => $completedLessons,
            'total' => $totalLessons,
            'percentage' => $percentage,
            'remaining' => $totalLessons - $completedLessons
        ];
    }
}