
@extends('layouts.base')

@section('title', 'Catalogue des Formations Professionnelles')

@push('styles')
    @vite('resources/css/courses.css')
@endpush

@section('content')
<div class="courses-page">
    {{-- Header du catalogue --}}
    <section class="courses-hero">
        <div class="container">
            <h1>Catalogue des Formations</h1>
            <p class="lead">Développez vos compétences avec nos formations professionnelles conçues par des experts du métier.</p>
        </div>
    </section>

    {{-- Filtres --}}
    <section class="courses-filters">
        <div class="container">
            <form method="GET" action="{{ route('courses.index') }}" class="filters-form">
                <div class="filter-group">
                    <label for="search">Rechercher</label>
                    <input type="text" 
                           name="search" 
                           id="search" 
                           value="{{ request('search') }}" 
                           placeholder="Nom de formation..."
                           class="form-control">
                </div>

                <div class="filter-group">
                    <label for="category">Catégorie</label>
                    <select name="category" id="category" class="form-control">
                        <option value="all">Toutes les catégories</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                                {{ ucfirst($cat) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="filter-group">
                    <label for="level">Niveau</label>
                    <select name="level" id="level" class="form-control">
                        <option value="all">Tous niveaux</option>
                        @foreach($levels as $key => $label)
                            <option value="{{ $key }}" {{ request('level') == $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="filter-actions">
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Réinitialiser</a>
                </div>
            </form>
        </div>
    </section>

    {{-- Grille des formations --}}
    <section class="courses-grid-section">
        <div class="container">
            @if($courses->count() > 0)
                <div class="courses-grid">
                    @foreach($courses as $course)
                        <article class="course-card">
                            <div class="course-image">
                                @if($course->image)
                                    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}">
                                @else
                                    <div class="course-placeholder" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                        <span class="course-icon">📚</span>
                                    </div>
                                @endif
                                <span class="course-level badge-{{ $course->level }}">
                                    {{ $levels[$course->level] ?? $course->level }}
                                </span>
                            </div>

                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="course-category">{{ ucfirst($course->category) }}</span>
                                    <span class="course-duration">{{ $course->duration_hours }}h</span>
                                </div>

                                <h2 class="course-title">
                                    <a href="{{ route('courses.show', $course->slug) }}">
                                        {{ $course->title }}
                                    </a>
                                </h2>

                                <p class="course-description">{{ $course->short_description }}</p>

                                <div class="course-stats">
                                    <span class="stat">
                                        <i class="icon-modules"></i>
                                        {{ $course->modules_count }} modules
                                    </span>
                                    <span class="stat">
                                        <i class="icon-lessons"></i>
                                        {{ $course->lessons_count }} leçons
                                    </span>
                                </div>

                                <div class="course-footer">
                                    <a href="{{ route('courses.show', $course->slug) }}" class="btn btn-outline-primary">
                                        Découvrir la formation
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="pagination-container">
                    {{ $courses->withQueryString()->links() }}
                </div>
            @else
                <div class="no-results">
                    <div class="no-results-icon">🔍</div>
                    <h3>Aucune formation trouvée</h3>
                    <p>Essayez de modifier vos critères de recherche ou consultez toutes nos formations.</p>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary">Voir toutes les formations</a>
                </div>
            @endif
        </div>
    </section>

    {{-- Section CTA --}}
    <section class="courses-cta">
        <div class="container">
            <div class="cta-box">
                <h2>Vous ne trouvez pas ce que vous cherchez ?</h2>
                <p>Nous développons constamment de nouvelles formations. Contactez-nous pour des besoins spécifiques.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Demander une formation sur mesure</a>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    @vite('resources/js/courses.js')
@endpush