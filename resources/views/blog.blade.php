@extends('layouts.base')

@section('title', 'Blog - Actualités Tech & Digital | Solutionneurs228')
@section('meta_description', 'Découvrez nos articles sur la tech, le digital et l\'innovation au Togo. Conseils IT, tendances web et actualités de Solutionneurs228.')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/formation.css') }}"> --}}
    @vite(['resources/css/blog.css'])
@endpush

@section('content')
    <!-- Hero Section Blog -->
    <section class="blog-hero">
        <div class="container">
            <h1 class="blog-hero__title">Notre Blog</h1>
            <p class="blog-hero__subtitle">
                Insights, conseils et actualités sur la technologie et le digital au Togo
            </p>

            <!-- Filtres par catégorie -->
            <div class="blog-filters">
                <button class="blog-filter active" data-filter="all">Tous</button>
                <button class="blog-filter" data-filter="tech">Tech & IT</button>
                <button class="blog-filter" data-filter="web">Web & Design</button>
                <button class="blog-filter" data-filter="media">Photo & Vidéo</button>
                <button class="blog-filter" data-filter="business">Business</button>
            </div>
        </div>
    </section>

    <!-- Featured Article -->
    <section class="blog-featured">
        <div class="container">
            <article class="featured-card">
                <div class="featured-card__image">
                    <img src="{{ asset('images/blog/cloud-computing-togo.jpg') }}" alt="Cloud Computing Togo">
                    <span class="featured-badge">À la une</span>
                </div>
                <div class="featured-card__content">
                    <div class="blog-meta">
                        <span class="blog-category tech">Tech & IT</span>
                        <span class="blog-date">28 Mars 2026</span>
                        <span class="blog-readtime">8 min de lecture</span>
                    </div>
                    <h2 class="featured-card__title">
                        Pourquoi le Cloud Computing révolutionne les PME togolaises en 2026
                    </h2>
                    <p class="featured-card__excerpt">
                        Découvrez comment la migration vers le cloud permet aux entreprises togolaises
                        de réduire leurs coûts IT de 40% tout en améliorant leur sécurité et leur flexibilité.
                    </p>
                    <a href="#" class="btn btn-primary">Lire l'article</a>
                </div>
            </article>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="blog-grid-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Derniers Articles</h2>
                <div class="blog-search">
                    <input type="text" placeholder="Rechercher un article..." class="search-input">
                    <button class="search-btn">
                        <i class="icon-search"></i>
                    </button>
                </div>
            </div>

            <div class="blog-grid">
                <!-- Article 1 -->
                <article class="blog-card" data-category="web">
                    <div class="blog-card__image">
                        <img src="{{ asset('images/blog/seo-togo-2026.jpg') }}" alt="SEO Togo 2026">
                        <span class="blog-category web">Web</span>
                    </div>
                    <div class="blog-card__content">
                        <div class="blog-meta">
                            <span class="blog-date">25 Mars 2026</span>
                            <span class="blog-readtime">5 min</span>
                        </div>
                        <h3 class="blog-card__title">
                            SEO local : Comment apparaître premier sur Google au Togo
                        </h3>
                        <p class="blog-card__excerpt">
                            Stratégies concrètes pour optimiser votre référencement local et attirer
                            des clients togolais via Google.
                        </p>
                        <a href="#" class="read-more">Lire la suite <i class="icon-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="blog-card" data-category="media">
                    <div class="blog-card__image">
                        <img src="{{ asset('images/blog/video-corporate.jpg') }}" alt="Vidéo Corporate">
                        <span class="blog-category media">Photo & Vidéo</span>
                    </div>
                    <div class="blog-card__content">
                        <div class="blog-meta">
                            <span class="blog-date">20 Mars 2026</span>
                            <span class="blog-readtime">6 min</span>
                        </div>
                        <h3 class="blog-card__title">
                            5 tendances vidéo qui dominent les réseaux sociaux en 2026
                        </h3>
                        <p class="blog-card__excerpt">
                            De la vidéo verticale au contenu UGC, ce qui fonctionne pour engager
                            votre audience togolaise.
                        </p>
                        <a href="#" class="read-more">Lire la suite <i class="icon-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="blog-card" data-category="tech">
                    <div class="blog-card__image">
                        <img src="{{ asset('images/blog/cybersecurite-pme.jpg') }}" alt="Cybersécurité">
                        <span class="blog-category tech">Tech & IT</span>
                    </div>
                    <div class="blog-card__content">
                        <div class="blog-meta">
                            <span class="blog-date">15 Mars 2026</span>
                            <span class="blog-readtime">7 min</span>
                        </div>
                        <h3 class="blog-card__title">
                            Cybersécurité : Les 3 erreurs qui coûtent cher aux PME togolaises
                        </h3>
                        <p class="blog-card__excerpt">
                            Antivirus obsolète, mots de passe faibles... Comment protéger efficacement
                            votre entreprise des cybermenaces.
                        </p>
                        <a href="#" class="read-more">Lire la suite <i class="icon-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 4 -->
                <article class="blog-card" data-category="business">
                    <div class="blog-card__image">
                        <img src="{{ asset('images/blog/transformation-digitale.jpg') }}" alt="Transformation Digitale">
                        <span class="blog-category business">Business</span>
                    </div>
                    <div class="blog-card__content">
                        <div class="blog-meta">
                            <span class="blog-date">10 Mars 2026</span>
                            <span class="blog-readtime">4 min</span>
                        </div>
                        <h3 class="blog-card__title">
                            Transformation digitale : Par où commencer en 2026 ?
                        </h3>
                        <p class="blog-card__excerpt">
                            Guide pratique pour les entrepreneurs togolais qui veulent digitaliser
                            leur business étape par étape.
                        </p>
                        <a href="#" class="read-more">Lire la suite <i class="icon-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 5 -->
                <article class="blog-card" data-category="web">
                    <div class="blog-card__image">
                        <img src="{{ asset('images/blog/ecommerce-togo.jpg') }}" alt="E-commerce Togo">
                        <span class="blog-category web">Web</span>
                    </div>
                    <div class="blog-card__content">
                        <div class="blog-meta">
                            <span class="blog-date">5 Mars 2026</span>
                            <span class="blog-readtime">6 min</span>
                        </div>
                        <h3 class="blog-card__title">
                            E-commerce au Togo : Opportunités et défis pour 2026
                        </h3>
                        <p class="blog-card__excerpt">
                            Analyse du marché e-commerce togolais et conseils pour lancer votre
                            boutique en ligne avec succès.
                        </p>
                        <a href="#" class="read-more">Lire la suite <i class="icon-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 6 -->
                <article class="blog-card" data-category="media">
                    <div class="blog-card__image">
                        <img src="{{ asset('images/blog/photo-produit.jpg') }}" alt="Photo Produit">
                        <span class="blog-category media">Photo & Vidéo</span>
                    </div>
                    <div class="blog-card__content">
                        <div class="blog-meta">
                            <span class="blog-date">1 Mars 2026</span>
                            <span class="blog-readtime">5 min</span>
                        </div>
                        <h3 class="blog-card__title">
                            Photographie produit : Boostez vos ventes en ligne
                        </h3>
                        <p class="blog-card__excerpt">
                            Comment de belles photos de produits peuvent augmenter vos conversions
                            de 30% sur vos plateformes e-commerce.
                        </p>
                        <a href="#" class="read-more">Lire la suite <i class="icon-arrow-right"></i></a>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="blog-pagination">
                <button class="pagination-btn active">1</button>
                <button class="pagination-btn">2</button>
                <button class="pagination-btn">3</button>
                <span class="pagination-dots">...</span>
                <button class="pagination-btn">8</button>
                <button class="pagination-btn pagination-next">
                    Suivant <i class="icon-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="blog-newsletter">
        <div class="container">
            <div class="newsletter-box">
                <div class="newsletter-content">
                    <h3>Restez informé</h3>
                    <p>Recevez nos derniers articles et conseils tech directement dans votre boîte mail.</p>
                </div>
                <form class="newsletter-form">
                    <input type="email" placeholder="Votre adresse email" required>
                    <button type="submit" class="btn btn-primary">S'abonner</button>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="blog-cta">
        <div class="container">
            <div class="cta-box">
                <h2>Besoin d'aide pour votre projet digital ?</h2>
                <p>Nos experts sont là pour vous accompagner</p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-large">
                    Discutons de votre projet
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/formation.js') }}"></script> --}}
    @vite(['resources/js/blog.js'])
@endpush
