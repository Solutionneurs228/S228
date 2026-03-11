{{-- resources/views/admin/enrollments/index.blade.php --}}
@extends('layouts.base')

@section('title', 'Gestion des Inscriptions')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> --}}
    @vite('resources/css/admin.css')
@endpush

@section('content')
<div class="admin-page">
    <div class="container">
        <header class="admin-header">
            <h1>Gestion des Inscriptions</h1>
            <p>Gérez les demandes d'accès aux formations</p>
        </header>

        {{-- Statistiques rapides --}}
        <div class="stats-grid">
            <div class="stat-card stat-pending">
                <span class="stat-number">{{ $enrollments->where('status', 'pending')->count() }}</span>
                <span class="stat-label">En attente</span>
            </div>
            <div class="stat-card stat-approved">
                <span class="stat-number">{{ $enrollments->where('status', 'approved')->count() }}</span>
                <span class="stat-label">Approuvées</span>
            </div>
            <div class="stat-card stat-rejected">
                <span class="stat-number">{{ $enrollments->where('status', 'rejected')->count() }}</span>
                <span class="stat-label">Refusées</span>
            </div>
            <div class="stat-card stat-suspended">
                <span class="stat-number">{{ $enrollments->where('status', 'suspended')->count() }}</span>
                <span class="stat-label">Suspendues</span>
            </div>
        </div>

        {{-- Filtres --}}
        <div class="filters-section">
            <form method="GET" class="filters-form">
                <div class="filter-group">
                    <label>Statut</label>
                    <select name="status" class="form-control">
                        <option value="all">Tous les statuts</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>En attente</option>
                        <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approuvées</option>
                        <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Refusées</option>
                        <option value="suspended" {{ request('status') == 'suspended' ? 'selected' : '' }}>Suspendues</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label>Formation</label>
                    <select name="course" class="form-control">
                        <option value="all">Toutes les formations</option>
                        @foreach($courses as $id => $title)
                            <option value="{{ $id }}" {{ request('course') == $id ? 'selected' : '' }}>
                                {{ $title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Filtrer</button>
            </form>
        </div>

        {{-- Table des inscriptions --}}
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
                    @forelse($enrollments as $enrollment)
                        <tr class="status-{{ $enrollment->status }}">
                            <td>{{ $enrollment->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <strong>{{ $enrollment->user->name }}</strong><br>
                                <small>{{ $enrollment->user->email }}</small>
                            </td>
                            <td>{{ $enrollment->course->title }}</td>
                            <td>
                                <span class="badge badge-{{ $enrollment->status }}">
                                    {{ [
                                        'pending' => 'En attente',
                                        'approved' => 'Approuvée',
                                        'rejected' => 'Refusée',
                                        'suspended' => 'Suspendue'
                                    ][$enrollment->status] }}
                                </span>
                            </td>
                            <td>
                                {{ $enrollment->approver ? $enrollment->approver->name : '-' }}
                            </td>
                            <td>
                                {{ $enrollment->approved_at ? $enrollment->approved_at->format('d/m/Y') : '-' }}
                            </td>
                            <td class="actions">
                                @if($enrollment->status === 'pending')
                                    <form action="{{ route('admin.enrollments.approve', $enrollment) }}" method="POST" class="inline-form">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Confirmer l\'approbation ?')">
                                            ✓ Approuver
                                        </button>
                                    </form>
                                    
                                    <button type="button" class="btn btn-danger btn-sm" onclick="showRejectModal({{ $enrollment->id }})">
                                        ✕ Refuser
                                    </button>
                                @elseif($enrollment->status === 'approved')
                                    <button type="button" class="btn btn-warning btn-sm" onclick="showSuspendModal({{ $enrollment->id }})">
                                        🚫 Suspendre
                                    </button>
                                @elseif($enrollment->status === 'suspended')
                                    <form action="{{ route('admin.enrollments.reactivate', $enrollment) }}" method="POST" class="inline-form">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">
                                            ↻ Réactiver
                                        </button>
                                    </form>
                                @endif

                                @if($enrollment->admin_notes)
                                    <button type="button" class="btn btn-info btn-sm" onclick="showNotes('{{ addslashes($enrollment->admin_notes) }}')">
                                        📝 Notes
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Aucune inscription trouvée</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $enrollments->withQueryString()->links() }}
    </div>
</div>

{{-- Modal Refus --}}
<div id="rejectModal" class="modal" style="display: none;">
    <div class="modal-content">
        <h3>Refuser la demande</h3>
        <form id="rejectForm" method="POST">
            @csrf
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

{{-- Modal Suspension --}}
<div id="suspendModal" class="modal" style="display: none;">
    <div class="modal-content">
        <h3>Suspendre l'accès</h3>
        <form id="suspendForm" method="POST">
            @csrf
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

{{-- Modal Notes --}}
<div id="notesModal" class="modal" style="display: none;">
    <div class="modal-content">
        <h3>Notes administratives</h3>
        <p id="notesContent"></p>
        <div class="modal-actions">
            <button type="button" class="btn btn-secondary" onclick="closeModal()">Fermer</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
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
@endpush