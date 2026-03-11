

<?php use Illuminate\Support\Str; ?>

<?php $__env->startSection('title', 'Apprendre - ' . $course->title); ?>

<?php $__env->startPush('styles'); ?>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/learning.css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="learning-dashboard">
    
    <header class="learning-header">
        <div class="container">
            <div class="learning-header-content">
                <div class="course-info">
                    <a href="<?php echo e(route('courses.show', $course->slug)); ?>" class="back-link">
                        ← Retour au cours
                    </a>
                    <h1><?php echo e($course->title); ?></h1>
                </div>
                
                <div class="progress-global">
                    <div class="progress-text">
                        <span class="progress-percentage"><?php echo e($progress['percentage']); ?>%</span>
                        <span class="progress-detail">
                            <?php echo e($progress['completed_lessons']); ?>/<?php echo e($progress['total_lessons']); ?> leçons
                        </span>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar" style="width: <?php echo e($progress['percentage']); ?>%"></div>
                    </div>
                    <?php if($progress['estimated_hours_remaining'] > 0): ?>
                        <span class="time-remaining">
                            ≈ <?php echo e($progress['estimated_hours_remaining']); ?>h restantes
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

    <div class="learning-container">
        
        <aside class="learning-sidebar">
            <div class="sidebar-header">
                <h2>Contenu du cours</h2>
                <span class="modules-count"><?php echo e($progress['completed_modules']); ?>/<?php echo e($progress['total_modules']); ?> modules</span>
            </div>

            <nav class="modules-nav">
                <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moduleIndex => $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="module-section <?php echo e($module->is_accessible ? 'accessible' : 'locked'); ?> <?php echo e($module->is_completed ? 'completed' : ''); ?>">
                        <div class="module-header" onclick="toggleModule(<?php echo e($moduleIndex); ?>)">
                            <span class="module-status-icon">
                                <?php if($module->is_completed): ?>
                                    ✓
                                <?php elseif($module->is_accessible): ?>
                                    ▶
                                <?php else: ?>
                                    🔒
                                <?php endif; ?>
                            </span>
                            <div class="module-title-wrap">
                                <h3 class="module-title"><?php echo e($module->title); ?></h3>
                                <div class="module-meta">
                                    <span class="module-progress"><?php echo e($module->progress_percentage); ?>%</span>
                                    <span class="module-duration"><?php echo e(ceil($module->duration_minutes / 60)); ?>h</span>
                                </div>
                            </div>
                            <span class="toggle-icon" id="toggle-<?php echo e($moduleIndex); ?>">▼</span>
                        </div>

                        <div class="module-lessons" id="module-<?php echo e($moduleIndex); ?>" style="<?php echo e($module->is_accessible && !$module->is_completed ? 'display: block;' : 'display: none;'); ?>">
                            <?php $__currentLoopData = $module->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($module->is_accessible ? route('courses.lesson', ['course' => $course->slug, 'module' => $module->id, 'lesson' => $lesson->id]) : '#'); ?>" 
                                   class="lesson-item <?php echo e($lesson->is_completed ? 'completed' : ''); ?> <?php echo e(!$module->is_accessible ? 'disabled' : ''); ?>">
                                    <span class="lesson-status">
                                        <?php if($lesson->is_completed): ?>
                                            <span class="check-icon">✓</span>
                                        <?php else: ?>
                                            <span class="circle-icon"></span>
                                        <?php endif; ?>
                                    </span>
                                    <span class="lesson-type-icon">
                                        <?php switch($lesson->type):
                                            case ('video'): ?> 🎥 <?php break; ?>
                                            <?php case ('document'): ?> 📄 <?php break; ?>
                                            <?php case ('exercise'): ?> ✏️ <?php break; ?>
                                            <?php case ('project'): ?> 🚀 <?php break; ?>
                                            <?php case ('quiz'): ?> ❓ <?php break; ?>
                                            <?php default: ?> 📚
                                        <?php endswitch; ?>
                                    </span>
                                    <span class="lesson-title"><?php echo e($lesson->title); ?></span>
                                    <span class="lesson-duration"><?php echo e($lesson->duration_minutes); ?>min</span>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if($module->has_quiz && $module->is_accessible): ?>
                                <div class="quiz-item <?php echo e($module->is_completed ? 'available' : 'locked'); ?>">
                                    <span class="quiz-icon">📝</span>
                                    <span class="quiz-title">Quiz de validation du module</span>
                                    <?php if($module->is_completed): ?>
                                        <span class="quiz-status">Disponible</span>
                                    <?php else: ?>
                                        <span class="quiz-status">Terminez toutes les leçons</span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>
        </aside>

        
        <main class="learning-main">
            <?php if($nextLesson): ?>
                <div class="continue-learning">
                    <h2>Reprendre où vous en étiez</h2>
                    <div class="next-lesson-card">
                        <div class="next-lesson-info">
                            <span class="next-label">Prochaine leçon</span>
                            <h3><?php echo e($nextLesson->title); ?></h3>
                            <p><?php echo e($nextLesson->module->title); ?></p>
                            <div class="lesson-meta">
                                <span class="type-badge"><?php echo e($nextLesson->type); ?></span>
                                <span class="duration"><?php echo e($nextLesson->duration_minutes); ?> minutes</span>
                            </div>
                        </div>
                        <a href="<?php echo e(route('courses.lesson', ['course' => $course->slug, 'module' => $nextLesson->module_id, 'lesson' => $nextLesson->id])); ?>" 
                           class="btn btn-primary btn-lg">
                            Continuer ▶
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="course-completed">
                    <div class="completion-celebration">
                        <span class="trophy-icon">🏆</span>
                        <h2>Félicitations !</h2>
                        <p>Vous avez terminé toutes les leçons de cette formation.</p>
                        <div class="completion-stats">
                            <div class="stat">
                                <span class="stat-value"><?php echo e($progress['total_lessons']); ?></span>
                                <span class="stat-label">Leçons complétées</span>
                            </div>
                            <div class="stat">
                                <span class="stat-value"><?php echo e($progress['total_modules']); ?></span>
                                <span class="stat-label">Modules terminés</span>
                            </div>
                        </div>
                        <a href="<?php echo e(route('courses.show', $course->slug)); ?>" class="btn btn-outline-primary">
                            Voir le récapitulatif
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            
            <div class="course-overview">
                <h2>Vue d'ensemble de votre progression</h2>
                
                <div stats-grid="">
                    <div class="stat-card">
                        <div class="stat-icon">📚</div>
                        <div class="stat-value"><?php echo e($progress['percentage']); ?>%</div>
                        <div class="stat-label">Progression globale</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">✓</div>
                        <div class="stat-value"><?php echo e($progress['completed_lessons']); ?></div>
                        <div class="stat-label">Leçons terminées</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🎯</div>
                        <div class="stat-value"><?php echo e($progress['completed_modules']); ?></div>
                        <div class="stat-label">Modules validés</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">⏱</div>
                        <div class="stat-value"><?php echo e($progress['estimated_hours_remaining']); ?>h</div>
                        <div class="stat-label">Temps restant estimé</div>
                    </div>
                </div>

                
                <div class="progress-chart">
                    <h3>Progression par module</h3>
                    <div class="modules-progress-bars">
                        <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="module-progress-row">
                                <span class="module-name"><?php echo e(Str::limit($module->title, 30)); ?></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar-bg">
                                        <div class="progress-bar-fill <?php echo e($module->is_completed ? 'completed' : ($module->is_accessible ? 'in-progress' : 'locked')); ?>" 
                                             style="width: <?php echo e($module->progress_percentage); ?>%"></div>
                                    </div>
                                </div>
                                <span class="module-percent"><?php echo e($module->progress_percentage); ?>%</span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
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
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1SSD\ProjetWeb\S228\resources\views/courses/learn/index.blade.php ENDPATH**/ ?>