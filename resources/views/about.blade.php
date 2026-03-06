@extends('layouts.base')

@section('title', 'À Propos de Nous | Solutionneurs228')
@section('meta_description', 'Solutionneurs228 : votre partenaire IT, Web et Média au Togo depuis 2020. Découvrez notre histoire, nos missions et nos valeurs.')

@section('hero')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-brand-900 via-brand-800 to-blue-900 pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.2\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full text-brand-200 text-sm font-medium mb-6 border border-white/20">
            <i class="fas fa-star"></i>
            <span>Votre Partenaire de Confiance</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
            À Propos de <span class="text-brand-300">Solutionneurs228</span>
        </h1>
        
        <p class="text-xl text-brand-100 mb-8 max-w-3xl mx-auto">
            Depuis 2020, nous accompagnons entreprises et particuliers au Togo dans leur transformation digitale. IT, Web, Design & Média : une équipe, quatre expertises.
        </p>
        
        <!-- Stats -->
        <div class="flex flex-wrap justify-center gap-8 md:gap-16 text-white">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-brand-300">4+</div>
                <div class="text-brand-200 text-sm mt-1">Années d'expérience</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-brand-300">500+</div>
                <div class="text-brand-200 text-sm mt-1">Projets réalisés</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-brand-300">150+</div>
                <div class="text-brand-200 text-sm mt-1">Clients satisfaits</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-brand-300">4</div>
                <div class="text-brand-200 text-sm mt-1">Domaines d'expertise</div>
            </div>
        </div>
    </div>
    
    <!-- Bottom wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#f9fafb"/>
        </svg>
    </div>
</section>
@endsection

@section('content')

<!-- ==================== NOTRE HISTOIRE ==================== -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Timeline -->
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-brand-200"></div>
                
                <div class="space-y-8">
                    <div class="relative flex items-start gap-6">
                        <div class="relative z-10 w-16 h-16 bg-brand-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg flex-shrink-0">
                            2020
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm flex-1">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Les Débuts</h3>
                            <p class="text-gray-600 text-sm">
                                Naissance de l'idée et ouverture du premier atelier de maintenance informatique et photographie à Lomé.
                            </p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-start gap-6">
                        <div class="relative z-10 w-16 h-16 bg-brand-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg flex-shrink-0">
                            2021
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm flex-1">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Expansion IT</h3>
                            <p class="text-gray-600 text-sm">
                                Ajout des services réseaux, serveurs et support entreprise. Premiers contrats maintenance mensuels.
                            </p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-start gap-6">
                        <div class="relative z-10 w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg flex-shrink-0">
                            2022
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm flex-1">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Digital & Web</h3>
                            <p class="text-gray-600 text-sm">
                                Lancement du développement web et mobile. Création de l'équipe design graphique.
                            </p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-start gap-6">
                        <div class="relative z-10 w-16 h-16 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg flex-shrink-0">
                            2024
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm flex-1">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Solutionneurs228 Aujourd'hui</h3>
                            <p class="text-gray-600 text-sm">
                                4 pôles d'expertise, 6 collaborateurs, couverture nationale. Reconnu comme acteur majeur du digital togolais.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Notre Histoire</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">
                    D'un Rêve à une <span class="text-brand-600">Réalité</span>
                </h2>
                
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    Solutionneurs228 est né d'une vision simple : rendre accessible aux Togolais des services technologiques professionnels, autrefois réservés aux grandes entreprises.
                </p>
                
                <p class="text-gray-600 mb-6 leading-relaxed">
                    En 2020, notre fondateur ouvrait un petit atelier avec une caméra et un kit de réparation informatique. Aujourd'hui, nous sommes une équipe de 6 passionnés, experts en maintenance IT, développement web, design graphique et production audiovisuelle.
                </p>
                
                <p class="text-gray-600 mb-8 leading-relaxed">
                    De la réparation d'ordinateurs à la création d'applications mobiles, en passant par le shooting photo de mariage ou la conception de logo : nous avons évolué tout en gardant notre promesse initiale — <strong>un bon travail en un temps record</strong>.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#contact" class="inline-flex items-center gap-2 bg-brand-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-brand-700 transition-all">
                        <i class="fas fa-handshake"></i>
                        Travailler avec Nous
                    </a>
                    <a href="{{ route('galerie') }}" class="inline-flex items-center gap-2 border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-full font-semibold hover:border-brand-600 hover:text-brand-600 transition-all">
                        <i class="fas fa-images"></i>
                        Voir nos Réalisations
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== NOS MISSIONS ==================== -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Notre Raison d'Être</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                Nos Missions
            </h2>
            <p class="text-gray-600 text-lg">
                Ce qui nous motive chaque jour et guide toutes nos actions.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            
            <!-- Mission 1 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-all border border-gray-100">
                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center text-brand-600 text-2xl mb-6">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Solutions Complètes & Innovantes</h3>
                <p class="text-gray-600">
                    Offrir des services intégrés couvrant tous les besoins digitaux de nos clients — du hardware au software, du design au développement.
                </p>
            </div>

            <!-- Mission 2 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-all border border-gray-100">
                <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 text-2xl mb-6">
                    <i class="fas fa-universal-access"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Démocratiser le Digital</h3>
                <p class="text-gray-600">
                    Aider entreprises et particuliers à tirer pleinement profit des technologies modernes, avec des services accessibles et adaptés au contexte togolais.
                </p>
            </div>

            <!-- Mission 3 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-all border border-gray-100">
                <div class="w-14 h-14 bg-pink-100 rounded-xl flex items-center justify-center text-pink-600 text-2xl mb-6">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Former & Transmettre</h3>
                <p class="text-gray-600">
                    Proposer des formations et stages pour former la prochaine génération de professionnels du digital au Togo.
                </p>
            </div>

            <!-- Mission 4 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-all border border-gray-100">
                <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-green-600 text-2xl mb-6">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Rapidité & Excellence</h3>
                <p class="text-gray-600">
                    Respecter notre slogan "un bon travail en un temps record" — qualité professionnelle sans délai excessif.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ==================== NOS VALEURS ==================== -->
<section class="py-20 bg-brand-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.2\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-300 font-semibold tracking-wider uppercase text-sm">Ce qui nous Guide</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4">
                Nos Valeurs Fondamentales
            </h2>
            <p class="text-brand-200 text-lg">
                L'honnêteté, la reconnaissance de nos limites, et la volonté de mériter votre confiance.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            
            <!-- Valeur 1 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 text-center">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center text-3xl mx-auto mb-6">
                    🤝
                </div>
                <h3 class="text-xl font-bold mb-3">Honnêteté</h3>
                <p class="text-brand-200">
                    Nous disons la vérité sur ce que nous pouvons faire, les délais réels, et les coûts. Pas de fausses promesses.
                </p>
            </div>

            <!-- Valeur 2 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 text-center">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center text-3xl mx-auto mb-6">
                    💪
                </div>
                <h3 class="text-xl font-bold mb-3">Humilité & Progrès</h3>
                <p class="text-brand-200">
                    Nous reconnaissons nos limites et travaillons constamment à les dépasser. Chaque erreur est une leçon.
                </p>
            </div>

            <!-- Valeur 3 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 text-center">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center text-3xl mx-auto mb-6">
                    ⭐
                </div>
                <h3 class="text-xl font-bold mb-3">Mérite</h3>
                <p class="text-brand-200">
                    Nous voulons gagner votre argent en vous apportant une réelle valeur. Votre satisfaction est notre meilleure récompense.
                </p>
            </div>

        </div>

        <div class="mt-12 text-center">
            <p class="text-2xl font-bold text-brand-300">
                "Juste essayez-nous !!!"
            </p>
        </div>
    </div>
</section>

<!-- ==================== NOS EXPERTISES ==================== -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Ce que nous Faisons</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                4 Pôles d'Expertise
            </h2>
            <p class="text-gray-600 text-lg">
                Une équipe pluridisciplinaire pour répondre à tous vos besoins digitaux.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- IT -->
            <a href="{{ route('services.maintenance') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">IT & Maintenance</h3>
                <p class="text-gray-600 text-sm mb-4">Réparation, réseaux, serveurs, support 24/7</p>
                <span class="text-brand-600 text-sm font-semibold group-hover:underline">En savoir plus →</span>
            </a>

            <!-- Web -->
            <a href="{{ route('services.webdev') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Développement Web</h3>
                <p class="text-gray-600 text-sm mb-4">Sites web, applications mobiles, e-commerce</p>
                <span class="text-brand-600 text-sm font-semibold group-hover:underline">En savoir plus →</span>
            </a>

            <!-- Design -->
            <a href="{{ route('services.design') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-pink-100 rounded-2xl flex items-center justify-center text-pink-600 text-2xl mb-4 group-hover:bg-pink-600 group-hover:text-white transition-colors">
                    <i class="fas fa-palette"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Design Graphique</h3>
                <p class="text-gray-600 text-sm mb-4">Logo, identité visuelle, print, packaging</p>
                <span class="text-brand-600 text-sm font-semibold group-hover:underline">En savoir plus →</span>
            </a>

            <!-- Photo/Video -->
            <a href="{{ route('services.photo-video') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-600 text-2xl mb-4 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <i class="fas fa-camera"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Photo & Vidéo</h3>
                <p class="text-gray-600 text-sm mb-4">Shooting, reportage, montage, publicité</p>
                <span class="text-brand-600 text-sm font-semibold group-hover:underline">En savoir plus →</span>
            </a>

        </div>
    </div>
</section>

<!-- ==================== ÉQUIPE ==================== -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Qui sommes-nous</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                Notre Équipe
            </h2>
            <p class="text-gray-600 text-lg">
                6 passionnés unis par l'amour du travail bien fait et de l'innovation.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Fondateur -->
            <div class="bg-gray-50 rounded-2xl p-6 text-center border border-gray-100">
                <div class="w-24 h-24 bg-brand-200 rounded-full mx-auto mb-4 flex items-center justify-center text-brand-700 text-3xl font-bold">
                    AM
                </div>
                <h3 class="text-lg font-bold text-gray-900">Aaron M.</h3>
                <p class="text-brand-600 text-sm font-medium mb-2">Fondateur & CEO</p>
                <p class="text-gray-600 text-sm">Visionnaire et multi-talent : IT, photo, web et design.</p>
            </div>

            <!-- Membre 2 -->
            <div class="bg-gray-50 rounded-2xl p-6 text-center border border-gray-100">
                <div class="w-24 h-24 bg-purple-200 rounded-full mx-auto mb-4 flex items-center justify-center text-purple-700 text-3xl font-bold">
                    JD
                </div>
                <h3 class="text-lg font-bold text-gray-900">Jean D.</h3>
                <p class="text-purple-600 text-sm font-medium mb-2">Lead Developer</p>
                <p class="text-gray-600 text-sm">Expert Laravel, React et applications mobiles.</p>
            </div>

            <!-- Membre 3 -->
            <div class="bg-gray-50 rounded-2xl p-6 text-center border border-gray-100">
                <div class="w-24 h-24 bg-pink-200 rounded-full mx-auto mb-4 flex items-center justify-center text-pink-700 text-3xl font-bold">
                    SK
                </div>
                <h3 class="text-lg font-bold text-gray-900">Sarah K.</h3>
                <p class="text-pink-600 text-sm font-medium mb-2">Designer Graphique</p>
                <p class="text-gray-600 text-sm">Créative passionnée par l'identité visuelle et le branding.</p>
            </div>

            <!-- Membre 4 -->
            <div class="bg-gray-50 rounded-2xl p-6 text-center border border-gray-100">
                <div class="w-24 h-24 bg-orange-200 rounded-full mx-auto mb-4 flex items-center justify-center text-orange-700 text-3xl font-bold">
                    KP
                </div>
                <h3 class="text-lg font-bold text-gray-900">Koffi P.</h3>
                <p class="text-orange-600 text-sm font-medium mb-2">Vidéaste & Photographe</p>
                <p class="text-gray-600 text-sm">Spécialiste du reportage événementiel et du montage.</p>
            </div>

            <!-- Membre 5 -->
            <div class="bg-gray-50 rounded-2xl p-6 text-center border border-gray-100">
                <div class="w-24 h-24 bg-green-200 rounded-full mx-auto mb-4 flex items-center justify-center text-green-700 text-3xl font-bold">
                    AB
                </div>
                <h3 class="text-lg font-bold text-gray-900">Abla B.</h3>
                <p class="text-green-600 text-sm font-medium mb-2">Responsable IT</p>
                <p class="text-gray-600 text-sm">Experte réseaux, serveurs et support technique.</p>
            </div>

            <!-- Recrutement -->
            <div class="bg-brand-50 rounded-2xl p-6 text-center border border-brand-200 border-dashed flex flex-col items-center justify-center">
                <div class="w-16 h-16 bg-brand-100 rounded-full flex items-center justify-center text-brand-600 text-2xl mb-4">
                    <i class="fas fa-plus"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Vous ?</h3>
                <p class="text-gray-600 text-sm mb-4">Nous recrutons ! Rejoignez l'aventure.</p>
                <a href="#contact" class="text-brand-600 font-semibold hover:underline">Postuler →</a>
            </div>

        </div>
    </div>
</section>

<!-- ==================== TÉMOIGNAGES ==================== -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Ils nous Font Confiance</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                Ce que Disent nos Clients
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 relative">
                <div class="absolute -top-4 left-8 w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center text-white">
                    <i class="fas fa-quote-left text-sm"></i>
                </div>
                <div class="flex text-brand-500 mb-4">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Solutionneurs228 a transformé notre image de marque. Le nouveau logo et le site web ont boosté nos ventes de 40%."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-600 font-bold">KM</div>
                    <div>
                        <h4 class="font-bold text-gray-900">Kossi M.</h4>
                        <p class="text-sm text-gray-500">DG, AfriTech Solutions</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 relative">
                <div class="absolute -top-4 left-8 w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center text-white">
                    <i class="fas fa-quote-left text-sm"></i>
                </div>
                <div class="flex text-brand-500 mb-4">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Rapides, professionnels, et vraiment à l'écoute. La vidéo de notre mariage est magnifique, un vrai film !"
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-600 font-bold">AB</div>
                    <div>
                        <h4 class="font-bold text-gray-900">Abla B.</h4>
                        <p class="text-sm text-gray-500">Cliente mariage</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 relative">
                <div class="absolute -top-4 left-8 w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center text-white">
                    <i class="fas fa-quote-left text-sm"></i>
                </div>
                <div class="flex text-brand-500 mb-4">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Notre parc informatique est entre de bonnes mains. Intervention rapide et prix honnêtes. Je recommande."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-600 font-bold">PT</div>
                    <div>
                        <h4 class="font-bold text-gray-900">Paul T.</h4>
                        <p class="text-sm text-gray-500">Responsable IT, EcoBank</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==================== CTA FINAL ==================== -->
<section id="contact" class="py-20 bg-brand-600">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Prêt à Collaborer ?
        </h2>
        <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">
            Que vous ayez un projet concret ou juste une idée, discutons-en. Le premier café est offert !
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="https://wa.me/22892671533" class="inline-flex items-center justify-center gap-2 bg-white text-brand-600 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition-all transform hover:scale-105 shadow-xl" target="_blank">
                <i class="fab fa-whatsapp text-xl"></i>
                Discuter sur WhatsApp
            </a>
            <a href="tel:+22892671533" class="inline-flex items-center justify-center gap-2 border-2 border-brand-400 text-white px-8 py-4 rounded-full font-semibold hover:bg-brand-700 transition-all">
                <i class="fas fa-phone-alt"></i>
                +228 92 67 15 33
            </a>
        </div>
        
        <p class="text-sm text-brand-200">
            <i class="fas fa-map-marker-alt mr-1"></i> Lomé, Togo | <i class="fas fa-envelope mr-1"></i> contact@solutionneurs228.tg
        </p>
    </div>
</section>

@endsection