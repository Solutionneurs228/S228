<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id', 'title', 'description', 'passing_score',
        'time_limit_minutes', 'max_attempts', 'is_published'
    ];

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class)->orderBy('order');
    }

    public function results(): HasMany
    {
        return $this->hasMany(QuizResult::class);
    }

    public function getTotalPointsAttribute(): int
    {
        return $this->questions->sum('points');
    }

    public function getUserAttempts(User $user): int
    {
        return $this->results()
            ->where('user_id', $user->id)
            ->count();
    }

    public function getBestResult(User $user): ?QuizResult
    {
        return $this->results()
            ->where('user_id', $user->id)
            ->where('is_passed', true)
            ->orderBy('percentage', 'desc')
            ->first();
    }

    public function canAttempt(User $user): bool
    {
        $attempts = $this->getUserAttempts($user);
        $bestResult = $this->getBestResult($user);
        
        // Si déjà réussi, ne peut plus retenter
        if ($bestResult) {
            return false;
        }
        
        return $attempts < $this->max_attempts;
    }

    public function getRemainingAttempts(User $user): int
    {
        return $this->max_attempts - $this->getUserAttempts($user);
    }
}