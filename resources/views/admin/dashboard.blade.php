@extends('layouts.base')

@section('title', 'Tableau de bord Admin')

@push('styles')
<style>
.admin-dashboard {
    padding: 2rem 0;
    background: #f8fafc;
    min-height: 100vh;
}

.dashboard-header {
    margin-bottom: 2rem;
}

.dashboard-header h1 {
    font-size: 2rem;
    font-weight: 700;
    color: #1e293b;
}

.welcome-text {
    color: #64748b;
    margin-top: 0.5rem;
}

/* Stats Cards */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: white;
    border-radius: 1rem;
    padding: 1.5rem;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: transform 0.2s, box-shadow 0.2s;
}

.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
}

.stat-icon.blue { background: #dbeafe; }
.stat-icon.green { background: #d1fae5; }
.stat-icon.orange { background: #fef3c7; }
.stat-icon.red { background: #fee2e2; }

.stat-content h3 {
    font-size: 2rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0;
}

.stat-content p {
    color: #64748b;
    margin: 0;
    font-size: 0.875rem;
}

/* Quick Actions */
.quick-actions {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.action-card {
    background: white;
    border-radius: 1rem;
    padding: 1.5rem;
    text-align: center;
    text-decoration: none;
    color: inherit;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    transition: all 0.2s;
}

.action-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.action-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 2.5rem;
}

.action-card.primary .action-icon { background: #4f46e5; color: white; }
.action-card.success .action-icon { background: #10b981; color: white; }
.action-card.warning .action-icon { background: #f59e0b; color: white; }

.action-card h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.action-card p {
    color: #64748b;
    font-size: 0.875rem;
}

/* Tables Section */
.dashboard-tables {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 1.5rem;
}

.table-card {
    background: white;
    border-radius: 1rem;
    padding: 1.5rem;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.table-card h2 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid #e2e8f0;
}

/* Pending Enrollments */
.pending-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.pending-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: #f8fafc;
    border-radius: 0.75rem;
    border-left: 4px solid #f59e0b;
}

.pending-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #4f46e5;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    font-weight: 600;
}

.pending-info {
    flex: 1;
}

.pending-info h4 {
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.pending-info p {
    font-size: 0.875rem;
    color: #64748b;
    margin: 0;
}

.pending-date {
    font-size: 0.75rem;
    color: #94a3b8;
}

.btn-sm {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    border-radius: 0.5rem;
    text-decoration: none;
    font-weight: 500;
}

.btn-primary {
    background: #4f46e5;
    color: white;
}

/* Recent Activity */
.activity-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.activity-item {
    display: flex;
    gap: 1rem;
    padding: 1rem;
    border-bottom: 1px solid #e2e8f0;
}

.activity-item:last-child {
    border-bottom: none;
}

.activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.activity-icon.approved { background: #d1fae5; }
.activity-icon.rejected { background: #fee2e2; }
.activity-icon.new { background: #dbeafe; }

.activity-content p {
    margin: 0;
    font-size: 0.875rem;
}

.activity-content .time {
    font-size: 0.75rem;
    color: #94a3b8;
    margin-top: 0.25rem;
}

.view-all {
    display: block;
    text-align: center;
    margin-top: 1rem;
    padding: 0.75rem;
    background: #f8fafc;
    border-radius: 0.5rem;
    color: #4f46e5;
    text-decoration: none;
    font-weight: 500;
}

.view-all:hover {
    background: #e0e7ff;
}

/* Responsive */
@media (max-width: 1024px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .quick-actions {
        grid-template-columns: 1fr;
    }
    
    .dashboard-tables {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@section('content')
@php
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use App\Models\QuizResult;

// Statistiques
$totalCourses = Course::count();
$totalStudents = Enrollment::approved()->distinct('user_id')->count();
$pendingEnrollments = Enrollment::pending()->count();
$totalCompletions = QuizResult::where('is_passed', true)->count();

// Dernières demandes en attente
$recentPending = Enrollment::pending()
    ->with(['user', 'course'])
    ->latest()
    ->take(5)
    ->get();

// Activité récente
$recentActivity = Enrollment::with(['user', 'course'])
    ->whereIn('status', ['approved', 'rejected'])
    ->latest()
    ->take(5)
    ->get();
@endphp

<div class="admin-dashboard">
    <div class="container">
        
        {{-- Header --}}
        <div class="dashboard-header">
            <h1>Tableau de bord</h1>
            <p class="welcome-text">
                Bienvenue, {{ auth()->user()->name }} | 
                {{ now()->format('d/m/Y') }}
            </p>
        </div>

        {{-- Stats Grid --}}
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">📚</div>
                <div class="stat-content">
                    <h3>{{ $totalCourses }}</h3>
                    <p>Formations publiées</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon green">👨‍🎓</div>
                <div class="stat-content">
                    <h3>{{ $totalStudents }}</h3>
                    <p>Étudiants actifs</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon orange">⏳</div>
                <div class="stat-content">
                    <h3>{{ $pendingEnrollments }}</h3>
                    <p>Demandes en attente</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon red">🏆</div>
                <div class="stat-content">
                    <h3>{{ $totalCompletions }}</h3>
                    <p>Certifications</p>
                </div>
            </div>
        </div>

        {{-- Quick Actions --}}
        <div class="quick-actions">
            <a href="{{ route('admin.enrollments.index') }}" class="action-card primary">
                <div class="action-icon">📋</div>
                <h3>Gérer les inscriptions</h3>
                <p>{{ $pendingEnrollments }} demande(s) en attente de validation</p>
            </a>
            
            <a href="{{ route('admin.formations.create') }}" class="action-card success">
                <div class="action-icon">➕</div>
                <h3>Nouvelle formation</h3>
                <p>Créer et publier une formation</p>
            </a>
            
            <a href="{{ route('admin.formations.index') }}" class="action-card warning">
                <div class="action-icon">✏️</div>
                <h3>Modifier formations</h3>
                <p>Gérer le contenu existant</p>
            </a>
        </div>

        {{-- Tables Section --}}
        <div class="dashboard-tables">
            
            {{-- Demandes en attente --}}
            <div class="table-card">
                <h2>⏳ Demandes en attente</h2>
                
                @if($recentPending->count() > 0)
                    <div class="pending-list">
                        @foreach($recentPending as $enrollment)
                            <div class="pending-item">
                                <div class="pending-avatar">
                                    {{ strtoupper(substr($enrollment->user->name, 0, 2)) }}
                                </div>
                                <div class="pending-info">
                                    <h4>{{ $enrollment->user->name }}</h4>
                                    <p>{{ $enrollment->course->title }}</p>
                                    <span class="pending-date">
                                        {{ $enrollment->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <a href="{{ route('admin.enrollments.index', ['status' => 'pending']) }}" 
                                   class="btn-sm btn-primary">
                                    Traiter
                                </a>
                            </div>
                        @endforeach
                    </div>
                    
                    <a href="{{ route('admin.enrollments.index') }}" class="view-all">
                        Voir toutes les demandes →
                    </a>
                @else
                    <p class="text-center" style="color: #64748b; padding: 2rem;">
                        ✓ Aucune demande en attente
                    </p>
                @endif
            </div>

            {{-- Activité récente --}}
            <div class="table-card">
                <h2>📈 Activité récente</h2>
                
                @if($recentActivity->count() > 0)
                    <div class="activity-list">
                        @foreach($recentActivity as $activity)
                            <div class="activity-item">
                                <div class="activity-icon {{ $activity->status }}">
                                    @if($activity->status === 'approved')
                                        ✓
                                    @else
                                        ✗
                                    @endif
                                </div>
                                <div class="activity-content">
                                    <p>
                                        <strong>{{ $activity->user->name }}</strong>
                                        {{ $activity->status === 'approved' ? 'approuvé' : 'refusé' }}
                                        pour <strong>{{ $activity->course->title }}</strong>
                                    </p>
                                    <span class="time">{{ $activity->updated_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center" style="color: #64748b; padding: 2rem;">
                        Aucune activité récente
                    </p>
                @endif
            </div>
        </div>

    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
    @csrf
    <button type="submit" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline;">
        Déconnexion
    </button>
</form>
    </div>
</div>
@endsection