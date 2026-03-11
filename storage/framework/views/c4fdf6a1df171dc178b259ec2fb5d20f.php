


<?php $__env->startSection('title', 'Gestion des Inscriptions'); ?>

<?php $__env->startPush('styles'); ?>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/admin.css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="admin-page">
    <div class="container">
        <header class="admin-header">
            <h1>Gestion des Inscriptions</h1>
            <p>Gérez les demandes d'accès aux formations</p>
        </header>

        
        <div class="stats-grid">
            <div class="stat-card stat-pending">
                <span class="stat-number"><?php echo e($enrollments->where('status', 'pending')->count()); ?></span>
                <span class="stat-label">En attente</span>
            </div>
            <div class="stat-card stat-approved">
                <span class="stat-number"><?php echo e($enrollments->where('status', 'approved')->count()); ?></span>
                <span class="stat-label">Approuvées</span>
            </div>
            <div class="stat-card stat-rejected">
                <span class="stat-number"><?php echo e($enrollments->where('status', 'rejected')->count()); ?></span>
                <span class="stat-label">Refusées</span>
            </div>
            <div class="stat-card stat-suspended">
                <span class="stat-number"><?php echo e($enrollments->where('status', 'suspended')->count()); ?></span>
                <span class="stat-label">Suspendues</span>
            </div>
        </div>

        
        <div class="filters-section">
            <form method="GET" class="filters-form">
                <div class="filter-group">
                    <label>Statut</label>
                    <select name="status" class="form-control">
                        <option value="all">Tous les statuts</option>
                        <option value="pending" <?php echo e(request('status') == 'pending' ? 'selected' : ''); ?>>En attente</option>
                        <option value="approved" <?php echo e(request('status') == 'approved' ? 'selected' : ''); ?>>Approuvées</option>
                        <option value="rejected" <?php echo e(request('status') == 'rejected' ? 'selected' : ''); ?>>Refusées</option>
                        <option value="suspended" <?php echo e(request('status') == 'suspended' ? 'selected' : ''); ?>>Suspendues</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label>Formation</label>
                    <select name="course" class="form-control">
                        <option value="all">Toutes les formations</option>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>" <?php echo e(request('course') == $id ? 'selected' : ''); ?>>
                                <?php echo e($title); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Filtrer</button>
            </form>
        </div>

        
        <div class="table-container">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Utilisateur</th>
                        <th>Formation</th>
                        <th>Statut</th>
                        <th>Traité par</th>
                        <th>Date traitement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="status-<?php echo e($enrollment->status); ?>">
                            <td><?php echo e($enrollment->created_at->format('d/m/Y H:i')); ?></td>
                            <td>
                                <strong><?php echo e($enrollment->user->name); ?></strong><br>
                                <small><?php echo e($enrollment->user->email); ?></small>
                            </td>
                            <td><?php echo e($enrollment->course->title); ?></td>
                            <td>
                                <span class="badge badge-<?php echo e($enrollment->status); ?>">
                                    <?php echo e([
                                        'pending' => 'En attente',
                                        'approved' => 'Approuvée',
                                        'rejected' => 'Refusée',
                                        'suspended' => 'Suspendue'
                                    ][$enrollment->status]); ?>

                                </span>
                            </td>
                            <td>
                                <?php echo e($enrollment->approver ? $enrollment->approver->name : '-'); ?>

                            </td>
                            <td>
                                <?php echo e($enrollment->approved_at ? $enrollment->approved_at->format('d/m/Y') : '-'); ?>

                            </td>
                            <td class="actions">
                                <?php if($enrollment->status === 'pending'): ?>
                                    <form action="<?php echo e(route('admin.enrollments.approve', $enrollment)); ?>" method="POST" class="inline-form">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Confirmer l\'approbation ?')">
                                            ✓ Approuver
                                        </button>
                                    </form>
                                    
                                    <button type="button" class="btn btn-danger btn-sm" onclick="showRejectModal(<?php echo e($enrollment->id); ?>)">
                                        ✕ Refuser
                                    </button>
                                <?php elseif($enrollment->status === 'approved'): ?>
                                    <button type="button" class="btn btn-warning btn-sm" onclick="showSuspendModal(<?php echo e($enrollment->id); ?>)">
                                        🚫 Suspendre
                                    </button>
                                <?php elseif($enrollment->status === 'suspended'): ?>
                                    <form action="<?php echo e(route('admin.enrollments.reactivate', $enrollment)); ?>" method="POST" class="inline-form">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-success btn-sm">
                                            ↻ Réactiver
                                        </button>
                                    </form>
                                <?php endif; ?>

                                <?php if($enrollment->admin_notes): ?>
                                    <button type="button" class="btn btn-info btn-sm" onclick="showNotes('<?php echo e(addslashes($enrollment->admin_notes)); ?>')">
                                        📝 Notes
                                    </button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="text-center">Aucune inscription trouvée</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php echo e($enrollments->withQueryString()->links()); ?>

    </div>
</div>


<div id="rejectModal" class="modal" style="display: none;">
    <div class="modal-content">
        <h3>Refuser la demande</h3>
        <form id="rejectForm" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Motif du refus (visible par l'utilisateur) :</label>
                <textarea name="admin_notes" required rows="4" class="form-control" placeholder="Expliquez pourquoi la demande est refusée..."></textarea>
            </div>
            <div class="modal-actions">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Annuler</button>
                <button type="submit" class="btn btn-danger">Confirmer le refus</button>
            </div>
        </form>
    </div>
</div>


<div id="suspendModal" class="modal" style="display: none;">
    <div class="modal-content">
        <h3>Suspendre l'accès</h3>
        <form id="suspendForm" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Motif de la suspension :</label>
                <textarea name="admin_notes" required rows="4" class="form-control" placeholder="Expliquez la raison de la suspension..."></textarea>
            </div>
            <div class="modal-actions">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Annuler</button>
                <button type="submit" class="btn btn-warning">Confirmer la suspension</button>
            </div>
        </form>
    </div>
</div>


<div id="notesModal" class="modal" style="display: none;">
    <div class="modal-content">
        <h3>Notes administratives</h3>
        <p id="notesContent"></p>
        <div class="modal-actions">
            <button type="button" class="btn btn-secondary" onclick="closeModal()">Fermer</button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
function showRejectModal(enrollmentId) {
    document.getElementById('rejectForm').action = '/admin/inscriptions/' + enrollmentId + '/refuser';
    document.getElementById('rejectModal').style.display = 'block';
}

function showSuspendModal(enrollmentId) {
    document.getElementById('suspendForm').action = '/admin/inscriptions/' + enrollmentId + '/suspendre';
    document.getElementById('suspendModal').style.display = 'block';
}

function showNotes(notes) {
    document.getElementById('notesContent').textContent = notes;
    document.getElementById('notesModal').style.display = 'block';
}

function closeModal() {
    document.querySelectorAll('.modal').forEach(m => m.style.display = 'none');
}

// Fermer en cliquant à l'extérieur
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        closeModal();
    }
}
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1SSD\ProjetWeb\S228\resources\views/admin/enrollments/index.blade.php ENDPATH**/ ?>