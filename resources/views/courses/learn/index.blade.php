{{-- resources/views/courses/learn/index.blade.php --}}
@extends('layouts.base')
@php use Illuminate\Support\Str; @endphp

@section('title', 'Apprendre - ' . $course->title)

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/learning.css') }}"> --}}
    @vite('resources/css/learning.css')
@endpush

@section('content')
<div class="learning-dashboard">
    {{-- Header sticky avec progression --}}
    <header class="learning-header">
        <div class="container">
            <div class="learning-header-content">
                <div class="course-info">
                    <a href="{{ route('courses.show', $course->slug) }}" class="back-link">
                        ← Retour au cours
                    </a>
                    <h1>{{ $course->title }}</h1>
                </div>
                
                <div class="progress-global">
                    <div class="progress-text">
                        <span class="progress-percentage">{{ $progress['percentage'] }}%</span>
                        <span class="progress-detail">
                            {{ $progress['completed_lessons'] }}/{{ $progress['total_lessons'] }} leçons
                        </span>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar" style="width: {{ $progress['percentage'] }}%"></div>
                    </div>
                    @if($progress['estimated_hours_remaining'] > 0)
                        <span class="time-remaining">
                            ≈ {{ $progress['estimated_hours_remaining'] }}h restantes
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <div class="learning-container">
        {{-- Sidebar avec modules --}}
        <aside class="learning-sidebar">
            <div class="sidebar-header">
                <h2>Contenu du cours</h2>
                <span class="modules-count">{{ $progress['completed_modules'] }}/{{ $progress['total_modules'] }} modules</span>
            </div>

            <nav class="modules-nav">
                @foreach($modules as $moduleIndex => $module)
                    <div class="module-section {{ $module->is_accessible ? 'accessible' : 'locked' }} {{ $module->is_completed ? 'completed' : '' }}">
                        <div class="module-header" onclick="toggleModule({{ $moduleIndex }})">
                            <span class="module-status-icon">
                                @if($module->is_completed)
                                    ✓
                                @elseif($module->is_accessible)
                                    ▶
                                @else
                                    🔒
                                @endif
                            </span>
                            <div class="module-title-wrap">
                                <h3 class="module-title">{{ $module->title }}</h3>
                                <div class="module-meta">
                                    <span class="module-progress">{{ $module->progress_percentage }}%</span>
                                    <span class="module-duration">{{ ceil($module->duration_minutes / 60) }}h</span>
                                </div>
                            </div>
                            <span class="toggle-icon" id="toggle-{{ $moduleIndex }}">▼</span>
                        </div>

                        <div class="module-lessons" id="module-{{ $moduleIndex }}" style="{{ $module->is_accessible && !$module->is_completed ? 'display: block;' : 'display: none;' }}">
                            @foreach($module->lessons as $lesson)
                                <a href="{{ $module->is_accessible ? route('courses.lesson', ['course' => $course->slug, 'module' => $module->id, 'lesson' => $lesson->id]) : '#' }}" 
                                   class="lesson-item {{ $lesson->is_completed ? 'completed' : '' }} {{ !$module->is_accessible ? 'disabled' : '' }}">
                                    <span class="lesson-status">
                                        @if($lesson->is_completed)
                                            <span class="check-icon">✓</span>
                                        @else
                                            <span class="circle-icon"></span>
                                        @endif
                                    </span>
                                    <span class="lesson-type-icon">
                                        @switch($lesson->type)
                                            @case('video') 🎥 @break
                                            @case('document') 📄 @break
                                            @case('exercise') ✏️ @break
                                            @case('project') 🚀 @break
                                            @case('quiz') ❓ @break
                                            @default 📚
                                        @endswitch
                                    </span>
                                    <span class="lesson-title">{{ $lesson->title }}</span>
                                    <span class="lesson-duration">{{ $lesson->duration_minutes }}min</span>
                                </a>
                            @endforeach

                            @if($module->has_quiz && $module->is_accessible)
                                <div class="quiz-item {{ $module->is_completed ? 'available' : 'locked' }}">
                                    <span class="quiz-icon">📝</span>
                                    <span class="quiz-title">Quiz de validation du module</span>
                                    @if($module->is_completed)
                                        <span class="quiz-status">Disponible</span>
                                    @else
                                        <span class="quiz-status">Terminez toutes les leçons</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </nav>
        </aside>

        {{-- Contenu principal --}}
        <main class="learning-main">
            @if($nextLesson)
                <div class="continue-learning">
                    <h2>Reprendre où vous en étiez</h2>
                    <div class="next-lesson-card">
                        <div class="next-lesson-info">
                            <span class="next-label">Prochaine leçon</span>
                            <h3>{{ $nextLesson->title }}</h3>
                            <p>{{ $nextLesson->module->title }}</p>
                            <div class="lesson-meta">
                                <span class="type-badge">{{ $nextLesson->type }}</span>
                                <span class="duration">{{ $nextLesson->duration_minutes }} minutes</span>
                            </div>
                        </div>
                        <a href="{{ route('courses.lesson', ['course' => $course->slug, 'module' => $nextLesson->module_id, 'lesson' => $nextLesson->id]) }}" 
                           class="btn btn-primary btn-lg">
                            Continuer ▶
                        </a>
                    </div>
                </div>
            @else
                <div class="course-completed">
                    <div class="completion-celebration">
                        <span class="trophy-icon">🏆</span>
                        <h2>Félicitations !</h2>
                        <p>Vous avez terminé toutes les leçons de cette formation.</p>
                        <div class="completion-stats">
                            <div class="stat">
                                <span class="stat-value">{{ $progress['total_lessons'] }}</span>
                                <span class="stat-label">Leçons complétées</span>
                            </div>
                            <div class="stat">
                                <span class="stat-value">{{ $progress['total_modules'] }}</span>
                                <span class="stat-label">Modules terminés</span>
                            </div>
                        </div>
                        <a href="{{ route('courses.show', $course->slug) }}" class="btn btn-outline-primary">
                            Voir le récapitulatif
                        </a>
                    </div>
                </div>
            @endif

            {{-- Vue d'ensemble --}}
            <div class="course-overview">
                <h2>Vue d'ensemble de votre progression</h2>
                
                <div stats-grid="">
                    <div class="stat-card">
                        <div class="stat-icon">📚</div>
                        <div class="stat-value">{{ $progress['percentage'] }}%</div>
                        <div class="stat-label">Progression globale</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">✓</div>
                        <div class="stat-value">{{ $progress['completed_lessons'] }}</div>
                        <div class="stat-label">Leçons terminées</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🎯</div>
                        <div class="stat-value">{{ $progress['completed_modules'] }}</div>
                        <div class="stat-label">Modules validés</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">⏱</div>
                        <div class="stat-value">{{ $progress['estimated_hours_remaining'] }}h</div>
                        <div class="stat-label">Temps restant estimé</div>
                    </div>
                </div>

                {{-- Graphique de progression (placeholder pour implémentation future) --}}
                <div class="progress-chart">
                    <h3>Progression par module</h3>
                    <div class="modules-progress-bars">
                        @foreach($modules as $module)
                            <div class="module-progress-row">
                                <span class="module-name">{{ Str::limit($module->title, 30) }}</span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar-bg">
                                        <div class="progress-bar-fill {{ $module->is_completed ? 'completed' : ($module->is_accessible ? 'in-progress' : 'locked') }}" 
                                             style="width: {{ $module->progress_percentage }}%"></div>
                                    </div>
                                </div>
                                <span class="module-percent">{{ $module->progress_percentage }}%</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

@push('scripts')
<script>
function toggleModule(index) {
    const content = document.getElementById('module-' + index);
    const toggle = document.getElementById('toggle-' + index);
    
    if (content.style.display === 'none') {
        content.style.display = 'block';
        toggle.textContent = '▼';
    } else {
        content.style.display = 'none';
        toggle.textContent = '▶';
    }
}

// Auto-scroll vers le module en cours
document.addEventListener('DOMContentLoaded', function() {
    const activeModule = document.querySelector('.module-section.accessible:not(.completed)');
    if (activeModule) {
        activeModule.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});
</script>
@endpush