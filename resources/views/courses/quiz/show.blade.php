{{-- resources/views/courses/quiz/show.blade.php --}}
@extends('layouts.base')

@section('title', 'Quiz - ' . $module->title)

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@endpush

@section('content')
<div class="quiz-page">
    <div class="container">
        <div class="quiz-intro">
            <nav class="breadcrumb">
                <a href="{{ route('courses.learn', $course->slug) }}">← Retour au cours</a>
            </nav>

            <div class="quiz-header">
                <span class="quiz-badge">Quiz de validation</span>
                <h1>{{ $quiz->title }}</h1>
                <p class="module-name">Module : {{ $module->title }}</p>
            </div>

            <div class="quiz-info-grid">
                <div class="info-card">
                    <span class="info-icon">❓</span>
                    <span class="info-value">{{ $quiz->questions->count() }}</span>
                    <span class="info-label">Questions</span>
                </div>
                <div class="info-card">
                    <span class="info-icon">⏱</span>
                    <span class="info-value">{{ $quiz->time_limit_minutes ?? '∞' }}</span>
                    <span class="info-label">Minutes</span>
                </div>
                <div class="info-card">
                    <span class="info-icon">🎯</span>
                    <span class="info-value">{{ $quiz->passing_score }}%</span>
                    <span class="info-label">Pour réussir</span>
                </div>
                <div class="info-card">
                    <span class="info-icon">🔄</span>
                    <span class="info-value">{{ $remaining }}/{{ $quiz->max_attempts }}</span>
                    <span class="info-label">Tentatives restantes</span>
                </div>
            </div>

            @if($quiz->description)
                <div class="quiz-description">
                    <h3>Instructions</h3>
                    <p>{{ $quiz->description }}</p>
                </div>
            @endif

            {{-- Historique des tentatives --}}
            @if($previousResults->count() > 0)
                <div class="attempts-history">
                    <h3>Vos tentatives précédentes</h3>
                    <table class="attempts-table">
                        <thead>
                            <tr>
                                <th>Tentative</th>
                                <th>Date</th>
                                <th>Score</th>
                                <th>Résultat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($previousResults as $prev)
                                <tr>
                                    <td>#{{ $prev->attempt_number }}</td>
                                    <td>{{ $prev->started_at->format('d/m/Y H:i') }}</td>
                                    <td>{{ $prev->score }}/{{ $prev->max_score }} ({{ $prev->percentage }}%)</td>
                                    <td>
                                        @if($prev->is_passed)
                                            <span class="badge-success">✓ Réussi</span>
                                        @else
                                            <span class="badge-danger">✗ Échoué</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <div class="quiz-start-section">
                @if($remaining > 0)
                    <form action="{{ route('quiz.start', ['course' => $course->slug, 'module' => $module->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-lg btn-start">
                            ▶ Démarrer le quiz
                        </button>
                    </form>
                    <p class="start-hint">
                        Une fois démarré, le chronomètre se lance @if($quiz->time_limit_minutes)({{ $quiz->time_limit_minutes }} min)@endif.
                        Assurez-vous d'avoir suffisamment de temps devant vous.
                    </p>
                @else
                    <div class="alert alert-danger">
                        Vous avez épuisé toutes vos tentatives pour ce quiz.
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection