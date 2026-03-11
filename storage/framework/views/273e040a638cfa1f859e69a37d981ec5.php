<?php $__env->startSection('title', $course->title . ' - Formation Professionnelle'); ?>

<?php $__env->startPush('styles'); ?>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/courses.css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="course-detail-page">
    
    <section class="course-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="<?php echo e(route('courses.index')); ?>">Formations</a>
                <span>/</span>
                <span><?php echo e($course->title); ?></span>
            </nav>

            <div class="course-header-content">
                <div class="course-header-info">
                    <span class="course-category-badge"><?php echo e(ucfirst($course->category)); ?></span>
                    <h1><?php echo e($course->title); ?></h1>
                    <p class="course-short-desc"><?php echo e($course->short_description); ?></p>

                    <div class="course-header-meta">
                        <span class="meta-item">
                            <strong>Niveau :</strong> 
                            <?php echo e(['debutant' => 'Débutant', 'intermediaire' => 'Intermédiaire', 'avance' => 'Avancé'][$course->level]); ?>

                        </span>
                        <span class="meta-item">
                            <strong>Durée :</strong> <?php echo e($course->duration_hours); ?> heures
                        </span>
                        <span class="meta-item">
                            <strong><?php echo e($totalLessons); ?></strong> leçons réparties en <strong><?php echo e($course->modules->count()); ?></strong> modules
                        </span>
                    </div>

                    
<div class="course-actions">
    <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('login', ['redirect' => route('courses.show', $course->slug)])); ?>" class="btn btn-primary btn-lg">
                            Connectez-vous pour vous inscrire
                        </a>
                        <p class="access-note">
                            Déjà <?php echo e($course->enrollments()->approved()->count()); ?> apprenants inscrits
                        </p>
                    <?php else: ?>
                        <?php if(!$enrollment): ?>
                            <form action="<?php echo e(route('courses.enroll', $course)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    📝 Demander l'accès à cette formation
                                </button>
                            </form>
                            <div class="access-info">
                                <p>✓ Accès validé par notre équipe sous 24-48h</p>
                                <p>✓ Support et mentoring inclus</p>
                                <p>✓ Certificat de fin de formation</p>
                            </div>
                        <?php elseif($enrollment->status === 'pending'): ?>
                            <div class="alert alert-info">
                                <strong>⏳ Demande en cours d'examen</strong>
                                <p>Votre demande a été envoyée le <?php echo e($enrollment->created_at->format('d/m/Y à H:i')); ?>.</p>
                                <p>Notre équipe l'examine actuellement. Vous serez notifié par email.</p>
                            </div>
                            <form action="<?php echo e(route('courses.unenroll', $course)); ?>" method="POST" class="mt-2">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-secondary" onclick="return confirm('Annuler votre demande ?')">
                                    Annuler ma demande
                                </button>
                            </form>
                        <?php elseif($enrollment->status === 'approved'): ?>
                            <a href="<?php echo e(route('courses.learn', $course)); ?>" class="btn btn-success btn-lg">
                                ▶ Continuer la formation
                                <?php if($progress && $progress['percentage'] > 0): ?>
                                    <span class="progress-badge"><?php echo e($progress['percentage']); ?>%</span>
                                <?php else: ?>
                                    <span class="start-badge">Commencer</span>
                                <?php endif; ?>
                            </a>
                            <?php if($progress): ?>
                                <div class="progress-mini">
                                    <div class="progress-bar-mini" style="width: <?php echo e($progress['percentage']); ?>%"></div>
                                </div>
                                <p class="progress-text-mini">
                                    <?php echo e($progress['completed']); ?>/<?php echo e($progress['total']); ?> leçons • 
                                    <?php echo e(ceil(($progress['remaining'] * 15) / 60)); ?>h restantes
                                </p>
                            <?php endif; ?>
                        <?php elseif($enrollment->status === 'rejected'): ?>
                            <div class="alert alert-danger">
                                <strong>❌ Demande refusée</strong>
                                <?php if($enrollment->admin_notes): ?>
                                    <p>Motif : <?php echo e($enrollment->admin_notes); ?></p>
                                <?php endif; ?>
                                <p>Contactez l'administration pour plus d'informations.</p>
                            </div>
                        <?php elseif($enrollment->status === 'suspended'): ?>
                            <div class="alert alert-warning">
                                <strong>🚫 Accès suspendu</strong>
                                <?php if($enrollment->admin_notes): ?>
                                    <p>Motif : <?php echo e($enrollment->admin_notes); ?></p>
                                <?php endif; ?>
                                <p>Contactez l'administration pour réactiver votre accès.</p>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                </div>

                <div class="course-header-image">
                    <?php if($course->image): ?>
                        <img src="<?php echo e(asset('storage/' . $course->image)); ?>" alt="<?php echo e($course->title); ?>">
                    <?php else: ?>
                        <div class="course-placeholder-large" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <span class="course-icon-large">📚</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    
    <section class="course-content-detail">
        <div class="container">
            <div class="content-grid">
                
                <div class="main-content">
                    
                    <div class="content-section">
                        <h2>Description de la formation</h2>
                        <div class="description-text">
                            <?php echo nl2br(e($course->description)); ?>

                        </div>
                    </div>

                    
                    <div class="content-section">
                        <h2>Objectifs pédagogiques</h2>
                        <p>À l'issue de cette formation, vous serez capable de :</p>
                        <ul class="objectives-list">
                            <?php $__currentLoopData = $course->objectives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $objective): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($objective); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    
                    <div class="content-section">
                        <h2>Compétences acquises</h2>
                        <div class="skills-grid">
                            <?php $__currentLoopData = $course->skills_acquired; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="skill-tag"><?php echo e($skill); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    
                    <div class="content-section">
                        <h2>Programme détaillé</h2>
                        <div class="modules-accordion">
                            <?php $__currentLoopData = $course->modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="module-card">
                                    <div class="module-header">
                                        <span class="module-number">Module <?php echo e($index + 1); ?></span>
                                        <h3><?php echo e($module->title); ?></h3>
                                        <span class="module-duration"><?php echo e(ceil($module->duration_minutes / 60)); ?>h</span>
                                        


                                        <?php if($module->has_quiz && $module->quiz): ?>
                                            <span class="quiz-badge">Quiz de validation</span>
                                        <?php endif; ?>


                                    </div>
                                    <div class="module-content">
                                        <p><?php echo e($module->description); ?></p>
                                        
                                        <div class="lessons-preview">
                                            <h4>Contenu du module :</h4>
                                            <ul class="lessons-list">
                                                <?php $__currentLoopData = $module->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <span class="lesson-type-icon type-<?php echo e($lesson->type); ?>">
                                                            <?php switch($lesson->type):
                                                                case ('video'): ?> 🎥 <?php break; ?>
                                                                <?php case ('document'): ?> 📄 <?php break; ?>
                                                                <?php case ('exercise'): ?> ✏️ <?php break; ?>
                                                                <?php case ('project'): ?> 🚀 <?php break; ?>
                                                                <?php case ('quiz'): ?> ❓ <?php break; ?>
                                                                <?php default: ?> 📚
                                                            <?php endswitch; ?>
                                                        </span>
                                                        <span class="lesson-title-preview"><?php echo e($lesson->title); ?></span>
                                                        <span class="lesson-duration"><?php echo e($lesson->duration_minutes); ?> min</span>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                
                <aside class="course-sidebar">
                    
                    <div class="sidebar-box">
                        <h3>Prérequis</h3>
                        <?php if(count($course->prerequisites) > 0): ?>
                            <ul class="prerequisites-list">
                                <?php $__currentLoopData = $course->prerequisites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prereq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($prereq); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php else: ?>
                            <p>Aucun prérequis technique requis. Cette formation est accessible à tous.</p>
                        <?php endif; ?>
                    </div>

                    
                    <?php if($enrollment && $enrollment->isApproved() && $progress): ?>
                        <div class="sidebar-box">
                            <h3>Votre progression</h3>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: <?php echo e($progress['percentage']); ?>%"></div>
                            </div>
                            <p class="progress-text">
                                <?php echo e($progress['completed']); ?> / <?php echo e($progress['total']); ?> leçons terminées
                            </p>
                            <p class="progress-remaining">
                                Temps estimé restant : <?php echo e(ceil(($progress['remaining'] * 15) / 60)); ?>h
                            </p>
                        </div>
                    <?php endif; ?>

                    
                    <div class="sidebar-box">
                        <h3>Informations</h3>
                        <ul class="info-list">
                            <li>
                                <strong>Accès :</strong> 
                                <?php echo e($course->requires_approval ? 'Sur validation' : 'Immédiat'); ?>

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

                    
                    <div class="sidebar-box">
                        <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-outline-secondary btn-block">
                            ← Retour au catalogue
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/courses.js'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1SSD\ProjetWeb\S228\resources\views/courses/show.blade.php ENDPATH**/ ?>