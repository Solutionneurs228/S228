@extends('layouts.base')

@section('title', 'Portfolio - Nos Réalisations | Solutionneurs228')

@section('meta-description', 'Découvrez nos projets IT, web, design graphique et production audiovisuelle. Des solutions digitales sur mesure pour entreprises et particuliers au Togo.')

@section('content')

<section class="portfolio-hero">
    <div class="container">
        <div class="portfolio-hero-content">
            <span class="section-badge">Nos Réalisations</span>
            <h1>Portfolio de nos <span class="gradient-text">projets</span></h1>
            <p>Explorez nos créations digitales : sites web modernes, identités visuelles percutantes et productions audiovisuelles professionnelles.</p>
            
            <!-- Filtres -->
            <div class="portfolio-filters">
                <button class="filter-btn active" data-filter="all">
                    <span class="filter-icon">⊞</span> Tous les projets
                </button>
                <button class="filter-btn" data-filter="web">
                    <span class="filter-icon">💻</span> Web & Apps
                </button>
                <button class="filter-btn" data-filter="design">
                    <span class="filter-icon">🎨</span> Design
                </button>
                <button class="filter-btn" data-filter="photo">
                    <span class="filter-icon">📷</span> Photographie
                </button>
                <button class="filter-btn" data-filter="video">
                    <span class="filter-icon">🎬</span> Vidéo
                </button>
            </div>
        </div>
    </div>
    <div class="hero-glow"></div>
</section>

<section class="portfolio-grid-section">
    <div class="container">
        <div class="portfolio-grid" id="portfolio-grid">
            
            <!-- PROJET 1: Site E-commerce -->
            <article class="portfolio-item" data-category="web">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="image-placeholder web-bg">
                            <div class="placeholder-content">
                                <span class="project-icon">🛒</span>
                                <span class="project-type">E-commerce</span>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="portfolio-actions">
                            <button class="action-btn view-btn" onclick="openModal('projet1')">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Voir détails
                            </button>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-meta">
                            <span class="project-category">Développement Web</span>
                            <span class="project-date">2024</span>
                        </div>
                        <h3>Marketplace Afrique Shop</h3>
                        <p>Plateforme e-commerce multi-vendeurs avec paiement mobile intégré (TMoney, Flooz) et gestion logistique.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Laravel</span>
                            <span class="tag">Vue.js</span>
                            <span class="tag">API Mobile</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROJET 2: Branding Microfinance -->
            <article class="portfolio-item" data-category="design">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="image-placeholder design-bg">
                            <div class="placeholder-content">
                                <span class="project-icon">🏦</span>
                                <span class="project-type">Identité visuelle</span>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="portfolio-actions">
                            <button class="action-btn view-btn" onclick="openModal('projet2')">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Voir détails
                            </button>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-meta">
                            <span class="project-category">Design Graphique</span>
                            <span class="project-date">2024</span>
                        </div>
                        <h3>Finances Plus Microfinance</h3>
                        <p>Création complète de l'identité visuelle : logo, charte graphique, supports papeterie et signalétique agence.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Branding</span>
                            <span class="tag">Illustrator</span>
                            <span class="tag">Print</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROJET 3: Couverture Événementielle -->
            <article class="portfolio-item" data-category="photo video">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="image-placeholder photo-bg">
                            <div class="placeholder-content">
                                <span class="project-icon">🎉</span>
                                <span class="project-type">Événement</span>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="portfolio-actions">
                            <button class="action-btn view-btn" onclick="openModal('projet3')">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Voir détails
                            </button>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-meta">
                            <span class="project-category">Photo & Vidéo</span>
                            <span class="project-date">2024</span>
                        </div>
                        <h3>Sommet Tech Africa 2024</h3>
                        <p>Couverture complète du sommet : photos corporate, interviews, aftermovie et diffusion live des keynotes.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Événementiel</span>
                            <span class="tag">Drone</span>
                            <span class="tag">Live</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROJET 4: Application Mobile -->
            <article class="portfolio-item" data-category="web">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="image-placeholder web-bg alt">
                            <div class="placeholder-content">
                                <span class="project-icon">📱</span>
                                <span class="project-type">Application</span>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="portfolio-actions">
                            <button class="action-btn view-btn" onclick="openModal('projet4')">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Voir détails
                            </button>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-meta">
                            <span class="project-category">Développement Web</span>
                            <span class="project-date">2023</span>
                        </div>
                        <h3>App Livraison Express "Koliko"</h3>
                        <p>Application de livraison de repas avec géolocalisation temps réel, système de notation et paiement intégré.</p>
                        <div class="portfolio-tags">
                            <span class="tag">React Native</span>
                            <span class="tag">Node.js</span>
                            <span class="tag">Maps API</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROJET 5: Campagne Publicitaire -->
            <article class="portfolio-item" data-category="design video">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="image-placeholder video-bg">
                            <div class="placeholder-content">
                                <span class="project-icon">📺</span>
                                <span class="project-type">Publicité</span>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="portfolio-actions">
                            <button class="action-btn view-btn" onclick="openModal('projet5')">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Voir détails
                            </button>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-meta">
                            <span class="project-category">Vidéo & Design</span>
                            <span class="project-date">2023</span>
                        </div>
                        <h3>Spot TV "Togo Émergent"</h3>
                        <p>Production d'un spot publicitaire 30s pour une campagne gouvernementale, incluant tournage, montage et motion design.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Tournage</span>
                            <span class="tag">After Effects</span>
                            <span class="tag">Motion</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROJET 6: Shooting Corporate -->
            <article class="portfolio-item" data-category="photo">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="image-placeholder photo-bg alt">
                            <div class="placeholder-content">
                                <span class="project-icon">👔</span>
                                <span class="project-type">Corporate</span>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="portfolio-actions">
                            <button class="action-btn view-btn" onclick="openModal('projet6')">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Voir détails
                            </button>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-meta">
                            <span class="project-category">Photographie</span>
                            <span class="project-date">2023</span>
                        </div>
                        <h3>Shooting Équipe Directoire</h3>
                        <p>Séance photo professionnelle pour le renouvellement de l'image corporate d'un cabinet d'avocats international.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Portrait</span>
                            <span class="tag">Studio</span>
                            <span class="tag">Retouche</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROJET 7: Site Vitrine Restaurant -->
            <article class="portfolio-item" data-category="web">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="image-placeholder web-bg">
                            <div class="placeholder-content">
                                <span class="project-icon">🍽️</span>
                                <span class="project-type">Site vitrine</span>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="portfolio-actions">
                            <button class="action-btn view-btn" onclick="openModal('projet7')">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Voir détails
                            </button>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-meta">
                            <span class="project-category">Développement Web</span>
                            <span class="project-date">2023</span>
                        </div>
                        <h3>Restaurant "Saveurs d'Afrique"</h3>
                        <p>Site vitrine avec menu interactif, système de réservation en ligne et galerie photos dynamique.</p>
                        <div class="portfolio-tags">
                            <span class="tag">WordPress</span>
                            <span class="tag">PHP</span>
                            <span class="tag">Réservation</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROJET 8: Packaging -->
            <article class="portfolio-item" data-category="design">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="image-placeholder design-bg alt">
                            <div class="placeholder-content">
                                <span class="project-icon">📦</span>
                                <span class="project-type">Packaging</span>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="portfolio-actions">
                            <button class="action-btn view-btn" onclick="openModal('projet8')">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Voir détails
                            </button>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-meta">
                            <span class="project-category">Design Graphique</span>
                            <span class="project-date">2022</span>
                        </div>
                        <h3>Ligne de Cosmétiques "Natura"</h3>
                        <p>Conception packaging complet : boîtes, étiquettes, mockups 3D et guides d'impression pour une marque bio.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Packaging</span>
                            <span class="tag">3D Mockup</span>
                            <span class="tag">Print</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PROJET 9: Documentaire -->
            <article class="portfolio-item" data-category="video">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="image-placeholder video-bg alt">
                            <div class="placeholder-content">
                                <span class="project-icon">🎥</span>
                                <span class="project-type">Documentaire</span>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="portfolio-actions">
                            <button class="action-btn view-btn" onclick="openModal('projet9')">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Voir détails
                            </button>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <div class="portfolio-meta">
                            <span class="project-category">Production Vidéo</span>
                            <span class="project-date">2022</span>
                        </div>
                        <h3>Documentaire "Tech au Féminin"</h3>
                        <p>Documentaire 15 min sur les femmes dans la tech au Togo, diffusé lors du festival international du film.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Documentaire</span>
                            <span class="tag">Interview</span>
                            <span class="tag">Color grading</span>
                        </div>
                    </div>
                </div>
            </article>

        </div>

        <!-- Empty State (caché par défaut) -->
        <div class="empty-state" id="empty-state" style="display: none;">
            <div class="empty-icon">🔍</div>
            <h3>Aucun projet dans cette catégorie</h3>
            <p>Revenez bientôt, nous ajoutons régulièrement de nouvelles réalisations !</p>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="portfolio-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Vous avez un projet similaire ?</h2>
            <p>Discutons de vos idées et transformons-les en réalité digitale.</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="btn-primary">
                    <span>📧 Nous contacter</span>
                </a>
                <a href="{{ route('devis') }}" class="btn-secondary">
                    <span>📋 Demander un devis</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modal pour détails projet -->
<div class="portfolio-modal" id="portfolio-modal">
    <div class="modal-overlay" onclick="closeModal()"></div>
    <div class="modal-content">
        <button class="modal-close" onclick="closeModal()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <div class="modal-body" id="modal-body">
            <!-- Contenu injecté par JS -->
        </div>
    </div>
</div>

@endsection

    @vite(['resources/css/portfolio.css', 'resources/js/portfolio.js'])