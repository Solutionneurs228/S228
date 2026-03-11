{{-- resources/views/courses/learn/lesson.blade.php --}}
@extends('layouts.base')
@php use Illuminate\Support\Str; @endphp

@section('title', $lesson->title . ' - ' . $course->title)

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/learning.css') }}"> --}}
    @vite('resources/css/learning.css')
@endpush

@section('content')
<div class="lesson-page">
    {{-- Header de la leçon --}}
    <header class="lesson-header">
        <div class="container">
            <div class="lesson-header-content">
                <div class="breadcrumb-nav">
                    <a href="{{ route('courses.learn', $course->slug) }}">Tableau de bord</a>
                    <span>/</span>
                    <span>{{ $module->title }}</span>
                    <span>/</span>
                    <span class="current">{{ $lesson->title }}</span>
                </div>
                
                <div class="lesson-progress-mini">
                    <div class="progress-bar-mini">
                        <div class="progress-fill" style="width: {{ $courseProgress['percentage'] }}%"></div>
                    </div>
                    <span>{{ $courseProgress['percentage'] }}% du cours</span>
                </div>
            </div>
        </div>
    </header>

    <div class="lesson-container">
        {{-- Sidebar de navigation --}}
        <aside class="lesson-sidebar">
            <div class="sidebar-course-title">
                <a href="{{ route('courses.learn', $course->slug) }}">
                    ← {{ Str::limit($course->title, 40) }}
                </a>
            </div>
            
            <nav class="sidebar-nav">
                @foreach($course->modules()->where('is_published', true)->orderBy('order')->get() as $navModule)
                    <div class="nav-module {{ $navModule->id === $module->id ? 'active' : '' }}">
                        <h4>{{ $navModule->title }}</h4>
                        <ul>
                            @foreach($navModule->lessons()->where('is_published', true)->orderBy('order')->get() as $navLesson)
                                <li class="{{ $navLesson->id === $lesson->id ? 'current' : '' }} {{ $navLesson->is_completed ? 'completed' : '' }}">
                                    <a href="{{ route('courses.lesson', ['course' => $course->slug, 'module' => $navModule->id, 'lesson' => $navLesson->id]) }}">
                                        @if($navLesson->is_completed)
                                            <span class="check">✓</span>
                                        @else
                                            <span class="dot"></span>
                                        @endif
                                        {{ Str::limit($navLesson->title, 35) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </nav>
        </aside>

        {{-- Contenu principal de la leçon --}}
        <main class="lesson-content-main">
            <div class="lesson-content-wrap">
                {{-- Titre et méta --}}
                <div class="lesson-meta-header">
                    <span class="lesson-type-badge type-{{ $lesson->type }}">
                        {{ $lesson->type }}
                    </span>
                    <span class="lesson-duration">{{ $lesson->duration_minutes }} min</span>
                    @if($lessonProgress->is_completed)
                        <span class="completed-badge">✓ Terminé le {{ $lessonProgress->completed_at->format('d/m/Y') }}</span>
                    @endif
                </div>

                <h1 class="lesson-title">{{ $lesson->title }}</h1>
                
                @if($lesson->description)
                    <p class="lesson-description">{{ $lesson->description }}</p>
                @endif

                {{-- Contenu selon le type --}}
                <div class="lesson-body">
                    @switch($lesson->type)
                        @case('video')
                            <div class="video-container">
                                @if(str_contains($lesson->content, 'youtube.com/embed') || str_contains($lesson->content, 'youtu.be'))
                                    <iframe 
                                        src="{{ $lesson->content }}" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                @else
                                    <video controls class="video-player">
                                        <source src="{{ $lesson->content }}" type="video/mp4">
                                        Votre navigateur ne supporte pas la lecture vidéo.
                                    </video>
                                @endif
                            </div>
                            @break

                        @case('document')
                            <div class="document-content">
                                {!! nl2br(e($lesson->content)) !!}
                            </div>
                            @break

                        @case('exercise')
                        @case('project')
                            <div class="exercise-content">
                                <div class="exercise-instructions">
                                    <h3>📝 Instructions</h3>
                                    {!! nl2br(e($lesson->content)) !!}
                                </div>
                                
                                <div class="exercise-workspace">
                                    <h4>Votre espace de travail</h4>
                                    <textarea class="exercise-textarea" placeholder="Rédigez votre réponse ici..."></textarea>
                                    <div class="exercise-actions">
                                        <button class="btn btn-secondary" onclick="saveDraft()">Sauvegarder le brouillon</button>
                                        <button class="btn btn-primary" onclick="submitExercise()">Soumettre pour validation</button>
                                    </div>
                                </div>
                            </div>
                            @break

                        @case('quiz')
                            <div class="quiz-content">
                                {!! $lesson->content !!}
                            </div>
                            @break

                        @default
                            <div class="generic-content">
                                {!! nl2br(e($lesson->content)) !!}
                            </div>
                    @endswitch
                </div>

                {{-- Ressources --}}
                @if(count($resources) > 0)
                    <div class="lesson-resources">
                        <h3>📎 Ressources</h3>
                        <ul>
                            @foreach($resources as $resource)
                                <li>
                                    <a href="{{ $resource['url'] ?? '#' }}" target="_blank" class="resource-link">
                                        <span class="resource-icon">📥</span>
                                        <span class="resource-name">{{ $resource['name'] ?? 'Ressource' }}</span>
                                        <span class="resource-type">{{ $resource['type'] ?? 'Fichier' }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Navigation et validation --}}
                <div class="lesson-footer">
                    <div class="lesson-navigation">
                        @if($adjacent['previous'])
                            <a href="{{ route('courses.lesson', ['course' => $course->slug, 'module' => $adjacent['previous']->module_id, 'lesson' => $adjacent['previous']->id]) }}" 
                               class="nav-btn nav-prev">
                                <span class="nav-label">← Précédent</span>
                                <span class="nav-title">{{ Str::limit($adjacent['previous']->title, 40) }}</span>
                            </a>
                        @else
                            <div></div>
                        @endif

                        @if($adjacent['next'])
                            <a href="{{ route('courses.lesson', ['course' => $course->slug, 'module' => $adjacent['next']->module_id, 'lesson' => $adjacent['next']->id]) }}" 
                               class="nav-btn nav-next">
                                <span class="nav-label">Suivant →</span>
                                <span class="nav-title">{{ Str::limit($adjacent['next']->title, 40) }}</span>
                            </a>
                        @else
                            <div></div>
                        @endif
                    </div>

                    <div class="lesson-completion">
                        @if(!$lessonProgress->is_completed)
                            <button id="completeBtn" class="btn btn-success btn-lg btn-complete" onclick="markAsComplete()">
                                ✓ Marquer comme terminé
                            </button>
                            <p class="completion-hint">Cliquez ci-dessus pour valider cette leçon et débloquer la suite</p>
                        @else
                            <div class="already-completed">
                                <span class="check-large">✓</span>
                                <p>Leçon terminée</p>
                                @if($adjacent['next'])
                                    <a href="{{ route('courses.lesson', ['course' => $course->slug, 'module' => $adjacent['next']->module_id, 'lesson' => $adjacent['next']->id]) }}" 
                                       class="btn btn-primary">
                                        Continuer →
                                    </a>
                                @else
                                    <a href="{{ route('courses.learn', $course->slug) }}" class="btn btn-primary">
                                        Retour au tableau de bord
                                    </a>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

{{-- Modal de confirmation module terminé --}}
<div id="moduleCompleteModal" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-icon">🎉</div>
        <h3>Module terminé !</h3>
        <p>Félicitations, vous avez complété toutes les leçons de ce module.</p>
        <div id="quizPrompt" style="display: none;">
            <p>Passez le quiz de validation pour débloquer le module suivant.</p>
            <button class="btn btn-primary" onclick="startQuiz()">Commencer le quiz</button>
        </div>
        <div id="nextModulePrompt" style="display: none;">
            <p>Le module suivant est maintenant accessible.</p>
            <a href="#" id="nextModuleLink" class="btn btn-primary">Continuer</a>
        </div>
        <button class="btn btn-secondary" onclick="closeModal()">Fermer</button>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Configuration
const courseSlug = '{{ $course->slug }}';
const moduleId = {{ $module->id }};
const lessonId = {{ $lesson->id }};
const csrfToken = '{{ csrf_token() }}';

// Tracking du temps
let timeSpent = 0;
let trackingInterval;

function startTracking() {
    trackingInterval = setInterval(() => {
        timeSpent += 10; // Toutes les 10 secondes
        
        // Envoyer toutes les 60 secondes
        if (timeSpent % 60 === 0) {
            saveTimeSpent();
        }
    }, 10000);
}

function saveTimeSpent() {
    fetch(`/api/lessons/${lessonId}/track-time`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ time_spent_seconds: 60 })
    }).catch(err => console.error('Erreur tracking:', err));
}

// Marquer comme terminé
async function markAsComplete() {
    const btn = document.getElementById('completeBtn');
    btn.disabled = true;
    btn.textContent = 'Validation...';

    try {
        const response = await fetch(`/formations/${courseSlug}/apprendre/${moduleId}/${lessonId}/complete`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            }
        });

        const data = await response.json();

        if (data.success) {
            // Mettre à jour l'UI
            btn.style.display = 'none';
            document.querySelector('.completion-hint').style.display = 'none';
            
            // Afficher message de succès
            const successDiv = document.createElement('div');
            successDiv.className = 'completion-success';
            successDiv.innerHTML = `
                <span class="check-large">✓</span>
                <p>${data.message}</p>
            `;
            document.querySelector('.lesson-completion').prepend(successDiv);

            // Si module complété, afficher modal
            if (data.module_completed) {
                showModuleCompleteModal(data.next_lesson);
            } else if (data.next_lesson) {
                // Redirection automatique après 2s
                setTimeout(() => {
                    window.location.href = data.next_lesson.url;
                }, 2000);
            }
        }
    } catch (error) {
        console.error('Erreur:', error);
        btn.disabled = false;
        btn.textContent = '✓ Marquer comme terminé';
        alert('Une erreur est survenue. Veuillez réessayer.');
    }
}

function showModuleCompleteModal(nextLesson) {
    const modal = document.getElementById('moduleCompleteModal');
    
    if (nextLesson) {
        document.getElementById('nextModulePrompt').style.display = 'block';
        document.getElementById('nextModuleLink').href = nextLesson.url;
    } else {
        document.getElementById('quizPrompt').style.display = 'block';
    }
    
    modal.style.display = 'flex';
}

function closeModal() {
    document.getElementById('moduleCompleteModal').style.display = 'none';
}

function startQuiz() {
    // Redirection vers le quiz du module
    window.location.href = `/formations/${courseSlug}/quiz/${moduleId}`;
}

// Sauvegarde brouillon exercice
function saveDraft() {
    const content = document.querySelector('.exercise-textarea').value;
    localStorage.setItem(`draft_${lessonId}`, content);
    alert('Brouillon sauvegardé localement');
}

function submitExercise() {
    alert('Exercice soumis pour validation par un formateur');
}

// Restaurer brouillon au chargement
document.addEventListener('DOMContentLoaded', () => {
    const draft = localStorage.getItem(`draft_${lessonId}`);
    if (draft) {
        document.querySelector('.exercise-textarea').value = draft;
    }
    
    // Démarrer le tracking
    startTracking();
});

// Nettoyage
window.addEventListener('beforeunload', () => {
    clearInterval(trackingInterval);
    saveTimeSpent();
});
</script>
@endpush