<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'short_description',
        'category', 'level', 'duration_hours', 'image',
        'objectives', 'skills_acquired', 'prerequisites',
        'is_published', 'requires_approval'
    ];

    protected $casts = [
        'objectives' => 'array',
        'skills_acquired' => 'array',
        'prerequisites' => 'array',
        'is_published' => 'boolean',
        'requires_approval' => 'boolean',
    ];

    protected static function boot(): void
    {
        parent::boot();
        static::creating(function ($course) {
            if (empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }
        });
    }

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class)->orderBy('order');
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    public function progress(): HasMany
    {
        return $this->hasMany(Progress::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }


    /**
 * Accessor pour compter toutes les leçons du cours
 */
public function getTotalLessonsAttribute(): int
{
    return $this->modules->sum(function ($module) {
        return $module->lessons->count();
    });
}

/**
 * Relation hasManyThrough alternative (si vous préférez)
 */
public function allLessons()
{
    return $this->hasManyThrough(
        Lesson::class,
        Module::class,
        'course_id', // Clé étrangère sur modules
        'module_id', // Clé étrangère sur lessons
        'id', // Clé locale sur courses
        'id' // Clé locale sur modules
    )->where('lessons.is_published', true);
}
}