
@extends('layouts.base')

@section('title', $course->title . ' - Formation Professionnelle')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/courses.css') }}"> --}}
    @vite('resources/css/courses.css')
@endpush

@section('content')
<div class="course-detail-page">
    {{-- Header de la formation --}}
    <section class="course-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('courses.index') }}">Formations</a>
                <span>/</span>
                <span>{{ $course->title }}</span>
            </nav>

            <div class="course-header-content">
                <div class="course-header-info">
                    <span class="course-category-badge">{{ ucfirst($course->category) }}</span>
                    <h1>{{ $course->title }}</h1>
                    <p class="course-short-desc">{{ $course->short_description }}</p>

                    <div class="course-header-meta">
                        <span class="meta-item">
                            <strong>Niveau :</strong> 
                            {{ ['debutant' => 'Débutant', 'intermediaire' => 'Intermédiaire', 'avance' => 'Avancé'][$course->level] }}
                        </span>
                        <span class="meta-item">
                            <strong>Durée :</strong> {{ $course->duration_hours }} heures
                        </span>
                        <span class="meta-item">
                            <strong>{{ $totalLessons }}</strong> leçons réparties en <strong>{{ $course->modules->count() }}</strong> modules
                        </span>
                    </div>

                    {{-- Actions selon statut --}}
<div class="course-actions">
    @guest
        <a href="{{ route('login', ['redirect' => route('courses.show', $course->slug)]) }}" class="btn btn-primary btn-lg">
                            Connectez-vous pour vous inscrire
                        </a>
                        <p class="access-note">
                            Déjà {{ $course->enrollments()->approved()->count() }} apprenants inscrits
                        </p>
                    @else
                        @if(!$enrollment)
                            <form action="{{ route('courses.enroll', $course) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-lg">
                                    📝 Demander l'accès à cette formation
                                </button>
                            </form>
                            <div class="access-info">
                                <p>✓ Accès validé par notre équipe sous 24-48h</p>
                                <p>✓ Support et mentoring inclus</p>
                                <p>✓ Certificat de fin de formation</p>
                            </div>
                        @elseif($enrollment->status === 'pending')
                            <div class="alert alert-info">
                                <strong>⏳ Demande en cours d'examen</strong>
                                <p>Votre demande a été envoyée le {{ $enrollment->created_at->format('d/m/Y à H:i') }}.</p>
                                <p>Notre équipe l'examine actuellement. Vous serez notifié par email.</p>
                            </div>
                            <form action="{{ route('courses.unenroll', $course) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-secondary" onclick="return confirm('Annuler votre demande ?')">
                                    Annuler ma demande
                                </button>
                            </form>
                        @elseif($enrollment->status === 'approved')
                            <a href="{{ route('courses.learn', $course) }}" class="btn btn-success btn-lg">
                                ▶ Continuer la formation
                                @if($progress && $progress['percentage'] > 0)
                                    <span class="progress-badge">{{ $progress['percentage'] }}%</span>
                                @else
                                    <span class="start-badge">Commencer</span>
                                @endif
                            </a>
                            @if($progress)
                                <div class="progress-mini">
                                    <div class="progress-bar-mini" style="width: {{ $progress['percentage'] }}%"></div>
                                </div>
                                <p class="progress-text-mini">
                                    {{ $progress['completed'] }}/{{ $progress['total'] }} leçons • 
                                    {{ ceil(($progress['remaining'] * 15) / 60) }}h restantes
                                </p>
                            @endif
                        @elseif($enrollment->status === 'rejected')
                            <div class="alert alert-danger">
                                <strong>❌ Demande refusée</strong>
                                @if($enrollment->admin_notes)
                                    <p>Motif : {{ $enrollment->admin_notes }}</p>
                                @endif
                                <p>Contactez l'administration pour plus d'informations.</p>
                            </div>
                        @elseif($enrollment->status === 'suspended')
                            <div class="alert alert-warning">
                                <strong>🚫 Accès suspendu</strong>
                                @if($enrollment->admin_notes)
                                    <p>Motif : {{ $enrollment->admin_notes }}</p>
                                @endif
                                <p>Contactez l'administration pour réactiver votre accès.</p>
                            </div>
                        @endif
                    @endguest
                </div>
                </div>

                <div class="course-header-image">
                    @if($course->image)
                        <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}">
                    @else
                        <div class="course-placeholder-large" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <span class="course-icon-large">📚</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- Contenu détaillé --}}
    <section class="course-content-detail">
        <div class="container">
            <div class="content-grid">
                {{-- Colonne principale --}}
                <div class="main-content">
                    {{-- Description --}}
                    <div class="content-section">
                        <h2>Description de la formation</h2>
                        <div class="description-text">
                            {!! nl2br(e($course->description)) !!}
                        </div>
                    </div>

                    {{-- Objectifs --}}
                    <div class="content-section">
                        <h2>Objectifs pédagogiques</h2>
                        <p>À l'issue de cette formation, vous serez capable de :</p>
                        <ul class="objectives-list">
                            @foreach($course->objectives as $objective)
                                <li>{{ $objective }}</li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Compétences acquises --}}
                    <div class="content-section">
                        <h2>Compétences acquises</h2>
                        <div class="skills-grid">
                            @foreach($course->skills_acquired as $skill)
                                <span class="skill-tag">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    {{-- Programme détaillé --}}
                    <div class="content-section">
                        <h2>Programme détaillé</h2>
                        <div class="modules-accordion">
                            @foreach($course->modules as $index => $module)
                                <div class="module-card">
                                    <div class="module-header">
                                        <span class="module-number">Module {{ $index + 1 }}</span>
                                        <h3>{{ $module->title }}</h3>
                                        <span class="module-duration">{{ ceil($module->duration_minutes / 60) }}h</span>
                                        {{-- @if($module->has_quiz)
                                            <span class="module-quiz-badge">Quiz</span>
                                        @endif --}}


                                        @if($module->has_quiz && $module->quiz)
                                            <span class="quiz-badge">Quiz de validation</span>
                                        @endif


                                    </div>
                                    <div class="module-content">
                                        <p>{{ $module->description }}</p>
                                        
                                        <div class="lessons-preview">
                                            <h4>Contenu du module :</h4>
                                            <ul class="lessons-list">
                                                @foreach($module->lessons as $lesson)
                                                    <li>
                                                        <span class="lesson-type-icon type-{{ $lesson->type }}">
                                                            @switch($lesson->type)
                                                                @case('video') 🎥 @break
                                                                @case('document') 📄 @break
                                                                @case('exercise') ✏️ @break
                                                                @case('project') 🚀 @break
                                                                @case('quiz') ❓ @break
                                                                @default 📚
                                                            @endswitch
                                                        </span>
                                                        <span class="lesson-title-preview">{{ $lesson->title }}</span>
                                                        <span class="lesson-duration">{{ $lesson->duration_minutes }} min</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <aside class="course-sidebar">
                    {{-- Prérequis --}}
                    <div class="sidebar-box">
                        <h3>Prérequis</h3>
                        @if(count($course->prerequisites) > 0)
                            <ul class="prerequisites-list">
                                @foreach($course->prerequisites as $prereq)
                                    <li>{{ $prereq }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>Aucun prérequis technique requis. Cette formation est accessible à tous.</p>
                        @endif
                    </div>

                    {{-- Progression (si inscrit) --}}
                    @if($enrollment && $enrollment->isApproved() && $progress)
                        <div class="sidebar-box">
                            <h3>Votre progression</h3>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: {{ $progress['percentage'] }}%"></div>
                            </div>
                            <p class="progress-text">
                                {{ $progress['completed'] }} / {{ $progress['total'] }} leçons terminées
                            </p>
                            <p class="progress-remaining">
                                Temps estimé restant : {{ ceil(($progress['remaining'] * 15) / 60) }}h
                            </p>
                        </div>
                    @endif

                    {{-- Informations complémentaires --}}
                    <div class="sidebar-box">
                        <h3>Informations</h3>
                        <ul class="info-list">
                            <li>
                                <strong>Accès :</strong> 
                                {{ $course->requires_approval ? 'Sur validation' : 'Immédiat' }}
                            </li>
                            <li>
                                <strong>Certificat :</strong> 
                                Délivré à la fin de la formation
                            </li>
                            <li>
                                <strong>Support :</strong> 
                                Forum et mentoring inclus
                            </li>
                        </ul>
                    </div>

                    {{-- Navigation --}}
                    <div class="sidebar-box">
                        <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary btn-block">
                            ← Retour au catalogue
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/courses.js') }}"></script> --}}
    @vite('resources/js/courses.js')
@endpush