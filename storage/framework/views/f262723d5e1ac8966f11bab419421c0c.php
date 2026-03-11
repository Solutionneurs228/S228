

<?php use Illuminate\Support\Str; ?>

<?php $__env->startSection('title', $lesson->title . ' - ' . $course->title); ?>

<?php $__env->startPush('styles'); ?>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/learning.css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="lesson-page">
    
    <header class="lesson-header">
        <div class="container">
            <div class="lesson-header-content">
                <div class="breadcrumb-nav">
                    <a href="<?php echo e(route('courses.learn', $course->slug)); ?>">Tableau de bord</a>
                    <span>/</span>
                    <span><?php echo e($module->title); ?></span>
                    <span>/</span>
                    <span class="current"><?php echo e($lesson->title); ?></span>
                </div>
                
                <div class="lesson-progress-mini">
                    <div class="progress-bar-mini">
                        <div class="progress-fill" style="width: <?php echo e($courseProgress['percentage']); ?>%"></div>
                    </div>
                    <span><?php echo e($courseProgress['percentage']); ?>% du cours</span>
                </div>
            </div>
        </div>
    </header>

    <div class="lesson-container">
        
        <aside class="lesson-sidebar">
            <div class="sidebar-course-title">
                <a href="<?php echo e(route('courses.learn', $course->slug)); ?>">
                    ← <?php echo e(Str::limit($course->title, 40)); ?>

                </a>
            </div>
            
            <nav class="sidebar-nav">
                <?php $__currentLoopData = $course->modules()->where('is_published', true)->orderBy('order')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navModule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="nav-module <?php echo e($navModule->id === $module->id ? 'active' : ''); ?>">
                        <h4><?php echo e($navModule->title); ?></h4>
                        <ul>
                            <?php $__currentLoopData = $navModule->lessons()->where('is_published', true)->orderBy('order')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navLesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="<?php echo e($navLesson->id === $lesson->id ? 'current' : ''); ?> <?php echo e($navLesson->is_completed ? 'completed' : ''); ?>">
                                    <a href="<?php echo e(route('courses.lesson', ['course' => $course->slug, 'module' => $navModule->id, 'lesson' => $navLesson->id])); ?>">
                                        <?php if($navLesson->is_completed): ?>
                                            <span class="check">✓</span>
                                        <?php else: ?>
                                            <span class="dot"></span>
                                        <?php endif; ?>
                                        <?php echo e(Str::limit($navLesson->title, 35)); ?>

                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>
        </aside>

        
        <main class="lesson-content-main">
            <div class="lesson-content-wrap">
                
                <div class="lesson-meta-header">
                    <span class="lesson-type-badge type-<?php echo e($lesson->type); ?>">
                        <?php echo e($lesson->type); ?>

                    </span>
                    <span class="lesson-duration"><?php echo e($lesson->duration_minutes); ?> min</span>
                    <?php if($lessonProgress->is_completed): ?>
                        <span class="completed-badge">✓ Terminé le <?php echo e($lessonProgress->completed_at->format('d/m/Y')); ?></span>
                    <?php endif; ?>
                </div>

                <h1 class="lesson-title"><?php echo e($lesson->title); ?></h1>
                
                <?php if($lesson->description): ?>
                    <p class="lesson-description"><?php echo e($lesson->description); ?></p>
                <?php endif; ?>

                
                <div class="lesson-body">
                    <?php switch($lesson->type):
                        case ('video'): ?>
                            <div class="video-container">
                                <?php if(str_contains($lesson->content, 'youtube.com/embed') || str_contains($lesson->content, 'youtu.be')): ?>
                                    <iframe 
                                        src="<?php echo e($lesson->content); ?>" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                <?php else: ?>
                                    <video controls class="video-player">
                                        <source src="<?php echo e($lesson->content); ?>" type="video/mp4">
                                        Votre navigateur ne supporte pas la lecture vidéo.
                                    </video>
                                <?php endif; ?>
                            </div>
                            <?php break; ?>

                        <?php case ('document'): ?>
                            <div class="document-content">
                                <?php echo nl2br(e($lesson->content)); ?>

                            </div>
                            <?php break; ?>

                        <?php case ('exercise'): ?>
                        <?php case ('project'): ?>
                            <div class="exercise-content">
                                <div class="exercise-instructions">
                                    <h3>📝 Instructions</h3>
                                    <?php echo nl2br(e($lesson->content)); ?>

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
                            <?php break; ?>

                        <?php case ('quiz'): ?>
                            <div class="quiz-content">
                                <?php echo $lesson->content; ?>

                            </div>
                            <?php break; ?>

                        <?php default: ?>
                            <div class="generic-content">
                                <?php echo nl2br(e($lesson->content)); ?>

                            </div>
                    <?php endswitch; ?>
                </div>

                
                <?php if(count($resources) > 0): ?>
                    <div class="lesson-resources">
                        <h3>📎 Ressources</h3>
                        <ul>
                            <?php $__currentLoopData = $resources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e($resource['url'] ?? '#'); ?>" target="_blank" class="resource-link">
                                        <span class="resource-icon">📥</span>
                                        <span class="resource-name"><?php echo e($resource['name'] ?? 'Ressource'); ?></span>
                                        <span class="resource-type"><?php echo e($resource['type'] ?? 'Fichier'); ?></span>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                
                <div class="lesson-footer">
                    <div class="lesson-navigation">
                        <?php if($adjacent['previous']): ?>
                            <a href="<?php echo e(route('courses.lesson', ['course' => $course->slug, 'module' => $adjacent['previous']->module_id, 'lesson' => $adjacent['previous']->id])); ?>" 
                               class="nav-btn nav-prev">
                                <span class="nav-label">← Précédent</span>
                                <span class="nav-title"><?php echo e(Str::limit($adjacent['previous']->title, 40)); ?></span>
                            </a>
                        <?php else: ?>
                            <div></div>
                        <?php endif; ?>

                        <?php if($adjacent['next']): ?>
                            <a href="<?php echo e(route('courses.lesson', ['course' => $course->slug, 'module' => $adjacent['next']->module_id, 'lesson' => $adjacent['next']->id])); ?>" 
                               class="nav-btn nav-next">
                                <span class="nav-label">Suivant →</span>
                                <span class="nav-title"><?php echo e(Str::limit($adjacent['next']->title, 40)); ?></span>
                            </a>
                        <?php else: ?>
                            <div></div>
                        <?php endif; ?>
                    </div>

                    <div class="lesson-completion">
                        <?php if(!$lessonProgress->is_completed): ?>
                            <button id="completeBtn" class="btn btn-success btn-lg btn-complete" onclick="markAsComplete()">
                                ✓ Marquer comme terminé
                            </button>
                            <p class="completion-hint">Cliquez ci-dessus pour valider cette leçon et débloquer la suite</p>
                        <?php else: ?>
                            <div class="already-completed">
                                <span class="check-large">✓</span>
                                <p>Leçon terminée</p>
                                <?php if($adjacent['next']): ?>
                                    <a href="<?php echo e(route('courses.lesson', ['course' => $course->slug, 'module' => $adjacent['next']->module_id, 'lesson' => $adjacent['next']->id])); ?>" 
                                       class="btn btn-primary">
                                        Continuer →
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('courses.learn', $course->slug)); ?>" class="btn btn-primary">
                                        Retour au tableau de bord
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
// Configuration
const courseSlug = '<?php echo e($course->slug); ?>';
const moduleId = <?php echo e($module->id); ?>;
const lessonId = <?php echo e($lesson->id); ?>;
const csrfToken = '<?php echo e(csrf_token()); ?>';

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
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1SSD\ProjetWeb\S228\resources\views/courses/learn/lesson.blade.php ENDPATH**/ ?>