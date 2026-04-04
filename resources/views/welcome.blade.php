{{-- welcome.blade.php --}}

@extends('layouts.base')

@section('slide')
    @include('partials.slider')
@endsection

@section('title', 'S228')


@section('content')

    <!-- ==================== SERVICES SECTION ==================== -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Nos Expertises</span>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mt-2 mb-4">
                    Solutions Complètes pour Votre <span class="gradient-text">Réussite Digitale</span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Des services sur mesure alliant technologie, créativité et professionnalisme pour répondre à tous vos
                    besoins.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Service 1: IT Maintenance -->
                <div class="service-card bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-brand-200 group">
                    <div
                        class="w-16 h-16 bg-brand-100 rounded-2xl flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Maintenance Informatique</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Entretien et réparation des ordinateurs,
                        Installation de logiciels, Assistance informatique …
                    </p>
                    <a href="{{ route('services.maintenance') }}"
                        class="inline-flex items-center text-brand-600 font-semibold hover:text-brand-800 transition-colors group/link">
                        En savoir plus
                        <i
                            class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 2: Remote Support -->
                <div class="service-card bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-brand-200 group">
                    <div
                        class="w-16 h-16 bg-brand-100 rounded-2xl flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Assistance Informatique</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Assistance dans l'organisation de votre travail côté informatique,
                        Initiation dans le travail en équipe, à distance avec un bon système de collaboration informatique
                        ...
                    </p>
                    <a href="{{ route('services.assistance') }}"
                        class="inline-flex items-center text-brand-600 font-semibold hover:text-brand-800 transition-colors group/link">
                        En savoir plus
                        <i
                            class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 3: Training -->
                <div class="service-card bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-brand-200 group">
                    <div
                        class="w-16 h-16 bg-brand-100 rounded-2xl flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Formation & Coaching</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        La plupart de nos formations sont disponibles en ligne. Flexibles et adaptables, elles peuvent être
                        programmées selon vos disponibilités afin de renforcer les compétences de vos équipes.
                    </p>
                    <a href="{{ route('formation') }}"
                        class="inline-flex items-center text-brand-600 font-semibold hover:text-brand-800 transition-colors group/link">
                        En savoir plus
                        <i
                            class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 4: Web Development -->
                <div class="service-card bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-brand-200 group">
                    <div
                        class="w-16 h-16 bg-brand-100 rounded-2xl flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Développement Web</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Création de sites vitrines, e-commerce, portefolios et applications web sur mesure. Design
                        responsive, SEO
                        optimisé.
                    </p>
                    <a href="{{ route('services.webdev') }}"
                        class="inline-flex items-center text-brand-600 font-semibold hover:text-brand-800 transition-colors group/link">
                        En savoir plus
                        <i
                            class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 5: Graphic Design -->
                <div class="service-card bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-brand-200 group">
                    <div
                        class="w-16 h-16 bg-brand-100 rounded-2xl flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Design Graphique</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Conception de supports de communication visuelle : cartes de visite, invitations, logos, badges,
                        flyers, affiches publicitaires, bâches et autocollants...
                    </p>
                    <a href="{{ route('services.infographie') }}"
                        class="inline-flex items-center text-brand-600 font-semibold hover:text-brand-800 transition-colors group/link">
                        En savoir plus
                        <i
                            class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 6: Photo/Video -->
                <div class="service-card bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:border-brand-200 group">
                    <div
                        class="w-16 h-16 bg-brand-100 rounded-2xl flex items-center justify-center text-brand-600 text-2xl mb-6 group-hover:bg-brand-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Photographie & Vidéographie</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Production audiovisuelle professionnelle : shooting corporate, couverture événementielle, montage
                        vidéo et création de contenu pour vos réseaux sociaux.
                    </p>
                    <a href="{{ route('services.photographie') }}"
                        class="inline-flex items-center text-brand-600 font-semibold hover:text-brand-800 transition-colors group/link">
                        En savoir plus
                        <i
                            class="fas fa-arrow-right ml-2 transform group-hover/link:translate-x-1 transition-transform"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== ABOUT SECTION ==================== -->
    <section id="about" class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Background Decoration -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-brand-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float">
        </div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float"
            style="animation-delay: 1.5s;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Image Side -->
                <div class="relative">
                    <div class="absolute -inset-4 bg-brand-600 rounded-2xl transform rotate-3 opacity-10"></div>
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Équipe Solutionneurs228" class="relative rounded-2xl shadow-2xl w-full object-cover h-[500px]">

                    <!-- Stats Card -->
                    <div
                        class="absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl border border-gray-100 hidden md:block">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 bg-brand-100 rounded-full flex items-center justify-center text-brand-600">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-900">150+</p>
                                <p class="text-sm text-gray-600">Clients Satisfaits</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Side -->
                <div>
                    <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">À Propos de Nous</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">
                        Votre Partenaire Technologique de Confiance au <span class="gradient-text">Togo</span>
                    </h2>


                    <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                        <p>
                            Fondée avec la vision de créer des solutions réelles et de démocratiser l'accès aux technologies
                            modernes,
                            <strong>Solutionneurs228</strong> s'est imposée comme un acteur majeur du paysage digital
                            togolais.
                        </p>
                        <p>
                            Notre mission est simple : accompagner entreprises et particuliers dans leur transformation
                            digitale en proposant des solutions IT, web et média adaptées à leurs besoins spécifiques et à
                            leur budget.
                        </p>
                        <p>
                            Forts d'une équipe pluridisciplinaire d'experts passionnés, nous combinons expertise technique
                            et créativité pour livrer des projets d'excellence. De la maintenance informatique à la création
                            de sites web, en passant par la production audiovisuelle, nous constituons pour vous un
                            interlocuteur
                            idéal.
                        </p>
                    </div>

                    <!-- Values -->
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-10 h-10 bg-brand-100 rounded-lg flex items-center justify-center text-brand-600 flex-shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Excellence</h4>
                                <p class="text-sm text-gray-600">Qualité irréprochable dans chaque projet</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-10 h-10 bg-brand-100 rounded-lg flex items-center justify-center text-brand-600 flex-shrink-0">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Réactivité</h4>
                                <p class="text-sm text-gray-600">Intervention rapide et efficace</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-10 h-10 bg-brand-100 rounded-lg flex items-center justify-center text-brand-600 flex-shrink-0">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Proximité</h4>
                                <p class="text-sm text-gray-600">Accompagnement personnalisé</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-10 h-10 bg-brand-100 rounded-lg flex items-center justify-center text-brand-600 flex-shrink-0">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Innovation</h4>
                                <p class="text-sm text-gray-600">Solutions à la pointe de la technologie</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center bg-brand-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-brand-700 transition-all transform hover:scale-105 shadow-lg">
                            Travailler avec Nous
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section>



    <!-- ==================== TESTIMONIALS SECTION ==================== -->
    <!-- Section Témoignages avec bouton "Voir plus" -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Témoignages</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                    Ce que Disent nos <span class="gradient-text">Clients</span>
                </h2>
            </div>

            <!-- Grille des témoignages (3 visibles) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12" id="testimonials-grid">
                <!-- Testimonial 1 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 relative hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="absolute -top-4 left-8 w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center text-white">
                        <i class="fas fa-quote-left text-sm"></i>
                    </div>
                    <div class="flex text-brand-500 mb-4">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Sinon le travail a été propre."<br />(contexte : livraison d'une
                        vidéo d'inauguration et caravane en moins de 24h)</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center text-gray-600 font-bold">
                            GA</div>
                        <div>
                            <h4 class="font-bold text-gray-900">Gafarou A.</h4>
                            <p class="text-sm text-gray-500">Chargé de Mission / Poste Togo</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 relative hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="absolute -top-4 left-8 w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center text-white">
                        <i class="fas fa-quote-left text-sm"></i>
                    </div>
                    <div class="flex text-brand-500 mb-4">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Depuis votre assistance, nous avons constaté une nette
                        amélioration de la performance de nos agents et même les clients en témoignent."</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center text-gray-600 font-bold">
                            EB</div>
                        <div>
                            <h4 class="font-bold text-gray-900">Esther B.</h4>
                            <p class="text-sm text-gray-500">DG microfinance / Kara</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 relative hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="absolute -top-4 left-8 w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center text-white">
                        <i class="fas fa-quote-left text-sm"></i>
                    </div>
                    <div class="flex text-brand-500 mb-4">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Les photos et vidéos de notre mariage étaient incroyables ! Nous
                        n'avons absolument pas eu tort de compter sur vous."</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center text-gray-600 font-bold">
                            SK</div>
                        <div>
                            <h4 class="font-bold text-gray-900">Serges K.</h4>
                            <p class="text-sm text-gray-500">Journaliste / Dapaong</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bouton Voir Plus -->
            <div class="text-center">
                <a href="{{ route('temoignages') }}"
                    class="inline-flex items-center gap-2 px-8 py-4 bg-brand-600 text-white rounded-full font-semibold hover:bg-brand-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Voir tous les témoignages
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- ==================== ACTUALITÉS SECTION ==================== -->
    <section id="actualites" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-4">
                <div>
                    <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Actualités</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                        Dernières <span class="gradient-text">Nouvelles</span>
                    </h2>
                </div>
                <a href="{{ route('blog') }}"
                    class="inline-flex items-center text-brand-600 font-semibold hover:text-brand-800 transition-colors group">
                    Voir toutes les actualités
                    <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100">
                    <div class="relative h-48 overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-brand-600 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-rocket text-6xl text-white/30"></i>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-white/90 backdrop-blur text-brand-600 text-xs font-bold px-3 py-1 rounded-full">
                                Innovation
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-sm text-gray-500 mb-3">
                            <span><i class="far fa-calendar-alt mr-1"></i> 15 Mars 2024</span>
                            <span>•</span>
                            <span>5 min de lecture</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition-colors">
                            Lancement de notre nouveau service de cloud computing
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Solutionneurs228 déploie une infrastructure cloud sécurisée pour les PME togolaises. Stockage,
                            sauvegarde et collaboration à distance.
                        </p>
                        <a href=""
                            class="inline-flex items-center text-brand-600 font-semibold text-sm hover:text-brand-800 transition-colors">
                            Lire la suite
                            <i
                                class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100">
                    <div class="relative h-48 overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                            <i class="fas fa-trophy text-6xl text-white/30"></i>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-white/90 backdrop-blur text-purple-600 text-xs font-bold px-3 py-1 rounded-full">
                                Récompense
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-sm text-gray-500 mb-3">
                            <span><i class="far fa-calendar-alt mr-1"></i> 28 Février 2024</span>
                            <span>•</span>
                            <span>3 min de lecture</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition-colors">
                            Prix de l'excellence digitale 2024
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Nous avons reçu le prix de l'excellence pour notre contribution à la transformation numérique
                            des entreprises au Togo.
                        </p>
                        <a href=""
                            class="inline-flex items-center text-brand-600 font-semibold text-sm hover:text-brand-800 transition-colors">
                            Lire la suite
                            <i
                                class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100">
                    <div class="relative h-48 overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-green-600 to-teal-600 flex items-center justify-center">
                            <i class="fas fa-users text-6xl text-white/30"></i>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-white/90 backdrop-blur text-green-600 text-xs font-bold px-3 py-1 rounded-full">
                                Événement
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-sm text-gray-500 mb-3">
                            <span><i class="far fa-calendar-alt mr-1"></i> 10 Février 2024</span>
                            <span>•</span>
                            <span>4 min de lecture</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition-colors">
                            Atelier gratuit : Sécurité informatique pour entreprises
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Inscrivez-vous à notre prochain atelier sur la cybersécurité. Places limitées à 20 participants.
                        </p>
                        <a href=""
                            class="inline-flex items-center text-brand-600 font-semibold text-sm hover:text-brand-800 transition-colors">
                            Lire la suite
                            <i
                                class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ==================== GALERIE SECTION ==================== -->
    <section id="galerie" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Galerie</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                    Nos <span class="gradient-text">Réalisations</span> en Images
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Aperçu de nos projets photo, vidéo et événements. Découvrez l'excellence de notre travail visuel.
                </p>
            </div>


            <!-- Grille de photos originale (adaptée) -->
            <div class="container mx-auto px-4 py-10">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10" id="gallery-grid">

                    <!-- Photo 1 - Shooting Corporate -->
                    <div class="group relative overflow-hidden rounded-xl aspect-square cursor-pointer gallery-item"
                        data-index="0" data-src="{{ asset('images/shoot1.webp') }}" data-title="Shooting Corporate"
                        data-desc="Séance photo shooting en nature à kara sur le pont kpeleouwaï">
                        <img src="{{ asset('images/shoot1.webp') }}" alt="Shooting Corporate"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <span class="text-white font-semibold text-sm">Shooting Corporate</span>
                        </div>
                    </div>

                    <!-- Photo 2 - Production Vidéo (grande) -->
                    <div class="group relative overflow-hidden rounded-xl aspect-square cursor-pointer md:col-span-2 md:row-span-2 gallery-item"
                        data-index="1" data-src="{{ asset('images/gil0.webp') }}" data-title="Production Vidéo"
                        data-desc="montage vidéo professionnel">
                        <img src="{{ asset('images/gil0.webp') }}" alt="Production Vidéo"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div>
                                <span class="text-white font-semibold">Production Vidéo</span>
                                <p class="text-white/80 text-sm">montage vidéo professionnel</p>
                            </div>
                        </div>
                    </div>

                    <!-- Photo 3 - Caméraman professionnel -->
                    <div class="group relative overflow-hidden rounded-xl aspect-square cursor-pointer gallery-item"
                        data-index="2" data-src="{{ asset('images/eric.webp') }}" data-title="Caméraman professionnel"
                        data-desc="réportage en collaboration avec une chaine de télé">
                        <img src="{{ asset('images/eric.webp') }}" alt="Caméraman professionnel"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <span class="text-white font-semibold text-sm">Caméraman professionnel</span>
                        </div>
                    </div>

                    <!-- Photo 4 - évenementiel -->
                    <div class="group relative overflow-hidden rounded-xl aspect-square cursor-pointer gallery-item"
                        data-index="3" data-src="{{ asset('images/mariage1.webp') }}" data-title="Mariage d'alfred et cherita"
                        data-desc="Eglise des AD Dongoyo à Kara">
                        <img src="{{ asset('images/mariage1.webp') }}" alt="Mariage d'alfred et cherita"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <span class="text-white font-semibold text-sm">Mariage d'alfred et cherita</span>
                        </div>
                    </div>

                    <!-- Photo 5 - évenementiel -->
                    <div class="group relative overflow-hidden rounded-xl aspect-square cursor-pointer gallery-item"
                        data-index="4" data-src="{{ asset('images/mariage2.webp') }}" data-title="Mariage d'alfred et cherita"
                        data-desc="Eglise des AD Dongoyo kara">
                        <img src="{{ asset('images/mariage2.webp') }}" alt="Mariage d'alfred et cherita"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <span class="text-white font-semibold text-sm">Mariage d'alfred et cherita</span>
                        </div>
                    </div>

                    <!-- Photo 6 - équipe -->
                    <div class="group relative overflow-hidden rounded-xl aspect-square cursor-pointer gallery-item"
                        data-index="5" data-src="{{ asset('images/equipe0.webp') }}" data-title="équipe S228"
                        data-desc="Notre équipe sur une activité sportive - Août 2024">
                        <img src="{{ asset('images/equipe0.webp') }}" alt="Formation"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <span class="text-white font-semibold text-sm">équipe S228</span>
                        </div>
                    </div>
                   
                    <!-- Photo 7 - sport -->
                    <div class="group relative overflow-hidden rounded-xl aspect-square cursor-pointer gallery-item"
                        data-index="6" data-src="{{ asset('images/sport2.webp') }}" data-title="Sport"
                        data-desc="couverture d'une activité sportive reservé aux jeunes et adolescents dans la binah à kara">
                        <img src="{{ asset('images/sport2.webp') }}" alt="sport"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <span class="text-white font-semibold text-sm">sport</span>
                        </div>
                    </div>
                   
                    <!-- Photo 8 - caravane -->
                    <div class="group relative overflow-hidden rounded-xl aspect-square cursor-pointer gallery-item"
                        data-index="7" data-src="{{ asset('images/gil1.webp') }}" data-title="caravane"
                        data-desc="caravane des enfants et jeunes des CDE de la binah - Août 2024">
                        <img src="{{ asset('images/gil1.webp') }}" alt="caravane"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <span class="text-white font-semibold text-sm">Caravane</span>
                        </div>
                    </div>


                </div>
            </div>

            <!-- LIGHTBOX -->
            <div id="lightbox" class="fixed inset-0 z-50 hidden bg-black/95 backdrop-blur-sm">

                <!-- Bouton fermer -->
                <button id="close-btn"
                    class="absolute top-4 right-4 z-50 p-3 text-white/80 hover:text-white hover:bg-white/10 rounded-full transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <!-- Compteur -->
                <div
                    class="absolute top-4 left-4 z-50 px-4 py-2 bg-white/10 rounded-full text-white/80 text-sm font-medium">
                    <span id="current-index">1</span> / <span id="total-count">6</span>
                </div>

                <!-- Zone de swipe (indicateurs) -->
                <div class="swipe-indicator left" id="swipe-left-indicator">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </div>
                <div class="swipe-indicator right" id="swipe-right-indicator">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>

                <!-- Contenu principal -->
                <div class="lightbox-content absolute inset-0 flex flex-col items-center justify-center p-4 md:p-8">

                    <!-- Image container avec gestes -->
                    <div id="image-container"
                        class="relative flex-1 w-full max-w-6xl flex items-center justify-center overflow-hidden">
                        <img id="lightbox-img" src="" alt=""
                            class="max-w-full max-h-[70vh] md:max-h-[75vh] object-contain rounded-lg shadow-2xl transition-transform duration-300">
                    </div>

                    <!-- Navigation flèches (desktop) -->
                    <button id="prev-btn"
                        class="hidden md:flex absolute left-4 top-1/2 -translate-y-1/2 p-4 text-white/60 hover:text-white hover:bg-white/10 rounded-full transition-all z-40">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>

                    <button id="next-btn"
                        class="hidden md:flex absolute right-4 top-1/2 -translate-y-1/2 p-4 text-white/60 hover:text-white hover:bg-white/10 rounded-full transition-all z-40">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>

                    <!-- Barre d'infos en bas -->
                    <div class="w-full max-w-4xl mt-6 p-6 bg-white/5 backdrop-blur-md rounded-2xl border border-white/10">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-4">

                            <!-- Titre et description -->
                            <div class="text-center md:text-left flex-1">
                                <h3 id="lightbox-title" class="text-2xl font-bold text-white mb-2"></h3>
                                <p id="lightbox-desc" class="text-white/70 text-lg"></p>
                            </div>

                            <!-- Boutons navigation (mobile visible, desktop aussi) -->
                            <div class="flex items-center gap-3">
                                <button id="prev-btn-mobile"
                                    class="md:hidden p-3 bg-white/10 hover:bg-white/20 rounded-full text-white transition-all">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>

                                <button id="next-btn-mobile"
                                    class="md:hidden p-3 bg-white/10 hover:bg-white/20 rounded-full text-white transition-all">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>

                                <!-- Info supplémentaire optionnelle -->
                                <div class="hidden md:block px-4 py-2 bg-white/10 rounded-lg text-white/60 text-sm">
                                    ← → ou swipe
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Bouton vers galerie complète -->
            <div class="text-center">
                <a href="{{ route('galerie') }}"
                    class="inline-flex items-center gap-3 bg-brand-600 text-white px-8 py-4 rounded-full font-semibold hover:bg-brand-700 transition-all transform hover:scale-105 shadow-lg group">
                    <i class="fas fa-images text-xl"></i>
                    <span>Voir toute la galerie</span>
                    <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
                </a>
                <p class="text-gray-500 text-sm mt-4">
                    Plus de 50 projets réalisés • Photos haute résolution • Avant/Après
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== CTA SECTION ==================== -->
    <section class="py-20 bg-brand-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
                Prêt à Transformer Votre Business ?
            </h2>
            <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">
                Contactez-nous dès aujourd'hui pour discuter de votre projet et obtenir un devis personnalisé gratuitement.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('devis') }}"
                    class="bg-white text-brand-900 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition-all transform hover:scale-105 shadow-xl">
                    Demander un Devis Gratuit
                </a>
                <a href="tel:+22892671533"
                    class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                    <i class="fas fa-phone"></i>
                    +228 92 67 15 33
                </a>
            </div>
        </div>
    </section>



@endsection
