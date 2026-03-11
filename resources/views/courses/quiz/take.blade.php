{{-- resources/views/courses/quiz/take.blade.php --}}
@extends('layouts.base')

@section('title', 'Quiz en cours - ' . $quiz->title)

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@endpush

@section('content')
<div class="quiz-taking-page">
    {{-- Header avec timer --}}
    <header class="quiz-header-sticky">
        <div class="container">
            <div class="quiz-header-content">
                <div class="quiz-title-sm">
                    <span class="quiz-label">Quiz en cours</span>
                    <h1>{{ $quiz->title }}</h1>
                </div>
                
                @if($timeRemaining !== null)
                    <div class="timer-container" id="timerContainer">
                        <span class="timer-icon">⏱</span>
                        <span class="timer-value" id="timer">{{ gmdate('i:s', $timeRemaining) }}</span>
                    </div>
                @endif

                <div class="progress-indicator">
                    Question <span id="currentQuestion">1</span>/{{ $questions->count() }}
                </div>
            </div>
        </div>
    </header>

    <form id="quizForm" action="{{ route('quiz.submit', ['course' => $course->slug, 'module' => $module->id, 'result' => $result->id]) }}" method="POST" class="quiz-form">
        @csrf
        
        <div class="container">
            <div class="questions-container">
                @foreach($questions as $index => $question)
                    <div class="question-card" id="question-{{ $index }}" style="{{ $index === 0 ? '' : 'display: none;' }}" data-index="{{ $index }}">
                        <div class="question-number">Question {{ $index + 1 }}</div>
                        <h2 class="question-text">{{ $question->question_text }}</h2>
                        
                        <div class="answers-container type-{{ $question->type }}">
                            @switch($question->type)
                                @case('single_choice')
                                    @foreach($question->options as $optionIndex => $option)
                                        <label class="answer-option">
                                            <input type="radio" name="question_{{ $question->id }}" value="{{ $optionIndex }}" required>
                                            <span class="option-marker">{{ chr(65 + $optionIndex) }}</span>
                                            <span class="option-text">{{ $option['text'] }}</span>
                                        </label>
                                    @endforeach
                                    @break

                                @case('multiple_choice')
                                    @foreach($question->options as $optionIndex => $option)
                                        <label class="answer-option">
                                            <input type="checkbox" name="question_{{ $question->id }}[]" value="{{ $optionIndex }}">
                                            <span class="option-marker">☐</span>
                                            <span class="option-text">{{ $option['text'] }}</span>
                                        </label>
                                    @endforeach
                                    @break

                                @case('true_false')
                                    <label class="answer-option">
                                        <input type="radio" name="question_{{ $question->id }}" value="true" required>
                                        <span class="option-marker">V</span>
                                        <span class="option-text">Vrai</span>
                                    </label>
                                    <label class="answer-option">
                                        <input type="radio" name="question_{{ $question->id }}" value="false" required>
                                        <span class="option-marker">F</span>
                                        <span class="option-text">Faux</span>
                                    </label>
                                    @break

                                @case('text')
                                    <textarea name="question_{{ $question->id }}" 
                                              class="text-answer" 
                                              rows="4" 
                                              placeholder="Votre réponse..."
                                              required></textarea>
                                    @break
                            @endswitch
                        </div>

                        <div class="question-navigation">
                            @if($index > 0)
                                <button type="button" class="btn btn-secondary" onclick="showQuestion({{ $index - 1 }})">
                                    ← Précédent
                                </button>
                            @else
                                <div></div>
                            @endif

                            @if($index < $questions->count() - 1)
                                <button type="button" class="btn btn-primary" onclick="showQuestion({{ $index + 1 }})">
                                    Suivant →
                                </button>
                            @else
                                <button type="submit" class="btn btn-success btn-submit" onclick="return confirm('Soumettre vos réponses ? Vous ne pourrez plus modifier.')">
                                    ✓ Terminer le quiz
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Indicateur de progression questions --}}
            <div class="questions-dots">
                @foreach($questions as $index => $q)
                    <span class="dot" id="dot-{{ $index }}" onclick="showQuestion({{ $index }})"></span>
                @endforeach
            </div>
        </div>
    </form>
</div>

{{-- Modal temps écoulé --}}
<div id="timeUpModal" class="modal" style="display: none;">
    <div class="modal-content">
        <h3>⏱ Temps écoulé !</h3>
        <p>Le temps imparti est terminé. Vos réponses vont être soumises automatiquement.</p>
    </div>
</div>
@endsection

@push('scripts')
<script>
let currentQuestion = 0;
const totalQuestions = {{ $questions->count() }};
const timeLimit = {{ $quiz->time_limit_minutes ? $quiz->time_limit_minutes * 60 : 'null' }};
let timeRemaining = {{ $timeRemaining ?? 'null' }};

function showQuestion(index) {
    // Masquer question actuelle
    document.getElementById(`question-${currentQuestion}`).style.display = 'none';
    document.getElementById(`dot-${currentQuestion}`).classList.remove('active');
    
    // Afficher nouvelle question
    currentQuestion = index;
    document.getElementById(`question-${currentQuestion}`).style.display = 'block';
    document.getElementById(`dot-${currentQuestion}`).classList.add('active');
    
    // Mettre à jour compteur
    document.getElementById('currentQuestion').textContent = currentQuestion + 1;
    
    // Scroll en haut
    window.scrollTo(0, 0);
}

// Timer
@if($timeRemaining !== null)
function startTimer() {
    const timerEl = document.getElementById('timer');
    const container = document.getElementById('timerContainer');
    
    const interval = setInterval(() => {
        timeRemaining--;
        
        // Format MM:SS
        const minutes = Math.floor(timeRemaining / 60);
        const seconds = timeRemaining % 60;
        timerEl.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        
        // Alertes visuelles
        if (timeRemaining <= 60) {
            container.classList.add('timer-danger');
        } else if (timeRemaining <= 300) {
            container.classList.add('timer-warning');
        }
        
        // Temps écoulé
        if (timeRemaining <= 0) {
            clearInterval(interval);
            document.getElementById('timeUpModal').style.display = 'flex';
            setTimeout(() => {
                document.getElementById('quizForm').submit();
            }, 3000);
        }
    }, 1000);
}

startTimer();
@endif

// Sauvegarde automatique des réponses dans localStorage
function saveAnswers() {
    const formData = new FormData(document.getElementById('quizForm'));
    const answers = {};
    for (let [key, value] of formData.entries()) {
        if (answers[key]) {
            if (!Array.isArray(answers[key])) {
                answers[key] = [answers[key]];
            }
            answers[key].push(value);
        } else {
            answers[key] = value;
        }
    }
    localStorage.setItem('quiz_{{ $result->id }}', JSON.stringify(answers));
}

// Restaurer les réponses
function restoreAnswers() {
    const saved = localStorage.getItem('quiz_{{ $result->id }}');
    if (saved) {
        const answers = JSON.parse(saved);
        for (let [key, value] of Object.entries(answers)) {
            const inputs = document.getElementsByName(key);
            inputs.forEach(input => {
                if (Array.isArray(value)) {
                    input.checked = value.includes(input.value);
                } else {
                    if (input.type === 'radio' || input.type === 'checkbox') {
                        input.checked = input.value === value;
                    } else {
                        input.value = value;
                    }
                }
            });
        }
    }
}

// Auto-save toutes les 30 secondes
setInterval(saveAnswers, 30000);

// Restaurer au chargement
document.addEventListener('DOMContentLoaded', restoreAnswers);

// Nettoyer après soumission
document.getElementById('quizForm').addEventListener('submit', () => {
    localStorage.removeItem('quiz_{{ $result->id }}');
});
</script>
@endpush