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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Support à Distance</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Assistance technique rapide et sécurisée via connexion à distance. Résolution de problèmes
                        logiciels, configuration et dépannage urgent 24/7.
                    </p>
                    <a href="#"
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
                       La plupart de nos formations sont disponibles en ligne. Flexibles et adaptables, elles peuvent être programmées selon vos disponibilités afin de renforcer les compétences de vos équipes.
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
                        Création de sites vitrines, e-commerce, portefolios et applications web sur mesure. Design responsive, SEO
                        optimisé.
                    </p>
                    <a href="#"
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
                        Conception de supports de communication visuelle : cartes de visite, invitations, logos, badges, flyers, affiches publicitaires, bâches et autocollants...
                    </p>
                    <a href="#"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Photo & Vidéo</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Production audiovisuelle professionnelle : shooting corporate, couverture événementielle, montage
                        vidéo et création de contenu pour vos réseaux sociaux.
                    </p>
                    <a href="#"
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
                            Fondée avec la vision de démocratiser l'accès aux technologies modernes,
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
                            de sites web, en passant par la production audiovisuelle, nous sommes votre interlocuteur
                            unique.
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
                        <a href="#contact"
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
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Témoignages</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                    Ce que Disent nos <span class="gradient-text">Clients</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 relative">
                    <div
                        class="absolute -top-4 left-8 w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center text-white">
                        <i class="fas fa-quote-left text-sm"></i>
                    </div>
                    <div class="flex text-brand-500 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Sinon le travail a été propre." 
                        <br/>  
                        (contexte : livraison d'une vidéo d'inauguration et caravane en moins de 24h)
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center text-gray-600 font-bold">
                            GA
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Gafarou A.</h4>
                            <p class="text-sm text-gray-500">Chargé de Mission / Poste Togo</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 relative">
                    <div
                        class="absolute -top-4 left-8 w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center text-white">
                        <i class="fas fa-quote-left text-sm"></i>
                    </div>
                    <div class="flex text-brand-500 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Depuis votre assistance, nous avons constaté une nette amélioration de la performance de nos agents et même les clients en témoignent."
                        
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center text-gray-600 font-bold">
                            EB
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Esther B.</h4>
                            <p class="text-sm text-gray-500">DG microfinance / Kara</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 relative">
                    <div
                        class="absolute -top-4 left-8 w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center text-white">
                        <i class="fas fa-quote-left text-sm"></i>
                    </div>
                    <div class="flex text-brand-500 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Les photos et vidéos de notre mariage étaient incroyables ! Nous n'avons absolument pas eu tort de compter sur vous. Félicitations à toute l'équipe ! "
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center text-gray-600 font-bold">
                            SK
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Serges K.</h4>
                            <p class="text-sm text-gray-500">Journaliste / Dapaond</p>
                        </div>
                    </div>
                </div>
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
                <a href="#contact"
                    class="bg-white text-brand-900 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition-all transform hover:scale-105 shadow-xl">
                    Demander un Devis Gratuit
                </a>
                <a href="tel:+22890000000"
                    class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                    <i class="fas fa-phone"></i>
                    +228 90 00 00 00
                </a>
            </div>
        </div>
    </section>

@endsection

















