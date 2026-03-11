<?php $__env->startSection('title', 'Catalogue des Formations Professionnelles'); ?>

<?php $__env->startPush('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/courses.css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="courses-page">
    
    <section class="courses-hero">
        <div class="container">
            <h1>Catalogue des Formations</h1>
            <p class="lead">Développez vos compétences avec nos formations professionnelles conçues par des experts du métier.</p>
        </div>
    </section>

    
    <section class="courses-filters">
        <div class="container">
            <form method="GET" action="<?php echo e(route('courses.index')); ?>" class="filters-form">
                <div class="filter-group">
                    <label for="search">Rechercher</label>
                    <input type="text" 
                           name="search" 
                           id="search" 
                           value="<?php echo e(request('search')); ?>" 
                           placeholder="Nom de formation..."
                           class="form-control">
                </div>

                <div class="filter-group">
                    <label for="category">Catégorie</label>
                    <select name="category" id="category" class="form-control">
                        <option value="all">Toutes les catégories</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat); ?>" <?php echo e(request('category') == $cat ? 'selected' : ''); ?>>
                                <?php echo e(ucfirst($cat)); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="level">Niveau</label>
                    <select name="level" id="level" class="form-control">
                        <option value="all">Tous niveaux</option>
                        <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key); ?>" <?php echo e(request('level') == $key ? 'selected' : ''); ?>>
                                <?php echo e($label); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="filter-actions">
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                    <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-secondary">Réinitialiser</a>
                </div>
            </form>
        </div>
    </section>

    
    <section class="courses-grid-section">
        <div class="container">
            <?php if($courses->count() > 0): ?>
                <div class="courses-grid">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="course-card">
                            <div class="course-image">
                                <?php if($course->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $course->image)); ?>" alt="<?php echo e($course->title); ?>">
                                <?php else: ?>
                                    <div class="course-placeholder" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                        <span class="course-icon">📚</span>
                                    </div>
                                <?php endif; ?>
                                <span class="course-level badge-<?php echo e($course->level); ?>">
                                    <?php echo e($levels[$course->level] ?? $course->level); ?>

                                </span>
                            </div>

                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="course-category"><?php echo e(ucfirst($course->category)); ?></span>
                                    <span class="course-duration"><?php echo e($course->duration_hours); ?>h</span>
                                </div>

                                <h2 class="course-title">
                                    <a href="<?php echo e(route('courses.show', $course->slug)); ?>">
                                        <?php echo e($course->title); ?>

                                    </a>
                                </h2>

                                <p class="course-description"><?php echo e($course->short_description); ?></p>

                                <div class="course-stats">
                                    <span class="stat">
                                        <i class="icon-modules"></i>
                                        <?php echo e($course->modules_count); ?> modules
                                    </span>
                                    <span class="stat">
                                        <i class="icon-lessons"></i>
                                        <?php echo e($course->lessons_count); ?> leçons
                                    </span>
                                </div>

                                <div class="course-footer">
                                    <a href="<?php echo e(route('courses.show', $course->slug)); ?>" class="btn btn-outline-primary">
                                        Découvrir la formation
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <div class="pagination-container">
                    <?php echo e($courses->withQueryString()->links()); ?>

                </div>
            <?php else: ?>
                <div class="no-results">
                    <div class="no-results-icon">🔍</div>
                    <h3>Aucune formation trouvée</h3>
                    <p>Essayez de modifier vos critères de recherche ou consultez toutes nos formations.</p>
                    <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-primary">Voir toutes les formations</a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    
    <section class="courses-cta">
        <div class="container">
            <div class="cta-box">
                <h2>Vous ne trouvez pas ce que vous cherchez ?</h2>
                <p>Nous développons constamment de nouvelles formations. Contactez-nous pour des besoins spécifiques.</p>
                <a href="<?php echo e(route('contact')); ?>" class="btn btn-primary btn-lg">Demander une formation sur mesure</a>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/courses.js'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1SSD\ProjetWeb\S228\resources\views/courses/index.blade.php ENDPATH**/ ?>