@extends('layouts.base')

@section('title', 'Photographie & Vidéographie Professionnelle | Solutionneurs228')
@section('meta_description', 'Service de photographie et vidéographie professionnelle au Togo. Shooting, reportage événementiel, vidéos publicitaires, montage 4K.')

@section('hero')
<!-- Hero Section -->
<section class="relative bg-gray-900 pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
    <!-- Background avec overlay -->
    <div class="absolute inset-0">
        <img src="/images/photo-hero.webp" alt="Photographie professionnelle" class="w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-500/20 rounded-full text-orange-300 text-sm font-medium mb-6 border border-orange-500/30">
                <i class="fas fa-camera"></i>
                <span>Production Audiovisuelle</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Capturons Vos <span class="text-orange-400">Moments</span> d'Exception
            </h1>
            
            <p class="text-xl text-gray-300 mb-8 max-w-2xl">
                Photographie et vidéographie professionnelle pour entreprises et particuliers au Togo. Qualité 4K, livraison rapide.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#devis" class="inline-flex items-center justify-center gap-2 bg-orange-500 text-white px-8 py-4 rounded-full font-bold hover:bg-orange-600 transition-all transform hover:scale-105 shadow-xl">
                    <i class="fas fa-calendar-check"></i>
                    Réserver une Séance
                </a>
                <a href="https://wa.me/22892671533" class="inline-flex items-center justify-center gap-2 border-2 border-gray-500 text-white px-8 py-4 rounded-full font-semibold hover:bg-white/10 transition-all" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    Discuter sur WhatsApp
                </a>
            </div>
            
            <!-- Stats -->
            <div class="mt-10 flex flex-wrap gap-8 text-gray-400">
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-orange-400"></i>
                    <span>+500 événements couverts</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-orange-400"></i>
                    <span>Équipement 4K professionnel</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-orange-400"></i>
                    <span>Livraison 48h</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<!-- ==================== SOMMAIRE RAPIDE ==================== -->
<section class="py-8 bg-white border-b border-gray-200 sticky top-20 z-30 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4 md:gap-8">
            <a href="#photographie" class="flex items-center gap-2 text-gray-600 hover:text-orange-500 font-medium transition-colors">
                <span class="w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center text-sm font-bold">01</span>
                <span class="hidden sm:inline">Photographie</span>
            </a>
            <a href="#reportage" class="flex items-center gap-2 text-gray-600 hover:text-orange-500 font-medium transition-colors">
                <span class="w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center text-sm font-bold">02</span>
                <span class="hidden sm:inline">Reportage Vidéo</span>
            </a>
            <a href="#publicite" class="flex items-center gap-2 text-gray-600 hover:text-orange-500 font-medium transition-colors">
                <span class="w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center text-sm font-bold">03</span>
                <span class="hidden sm:inline">Publicité</span>
            </a>
        </div>
    </div>
</section>

<!-- ==================== SERVICE 01 : PHOTOGRAPHIE ==================== -->
<section id="photographie" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Image -->
            <div class="relative group">
                <div class="absolute -inset-4 bg-orange-200 rounded-2xl transform rotate-2 group-hover:rotate-1 transition-transform"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="/images/equipe0.webp" alt="notre équipe" class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <p class="text-sm font-medium text-orange-300 mb-1">Notre équipe</p>
                        <p class="text-lg font-bold">photographes, cadreurs et monteurs de vidéo pro</p>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-5xl font-bold text-orange-200">01</span>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Photographie & Agrandissement</h2>
                        <div class="h-1 w-20 bg-orange-500 mt-2"></div>
                    </div>
                </div>

                <p class="text-gray-600 text-lg mb-6">
                    Des images professionnelles pour immortaliser vos moments clés et valoriser votre image.
                </p>

                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 flex-shrink-0">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Portrait Pro</h4>
                            <p class="text-sm text-gray-500">Corporate, LinkedIn, CV</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 flex-shrink-0">
                            <i class="fas fa-ring"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Mariage</h4>
                            <p class="text-sm text-gray-500">Cérémonie, couple, groupe</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 flex-shrink-0">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Produit</h4>
                            <p class="text-sm text-gray-500">E-commerce, catalogue</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 flex-shrink-0">
                            <i class="fas fa-images"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Restauration</h4>
                            <p class="text-sm text-gray-500">Vieilles photos, agrandissement</p>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="flex flex-wrap gap-3">
                    <a href="https://wa.me/22892671533?text=Bonjour, je souhaite réserver une séance photo" class="inline-flex items-center gap-2 bg-orange-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-orange-600 transition-all" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        Réserver par WhatsApp
                    </a>
                    <a href="{{ route('galerie') }}" class="inline-flex items-center gap-2 border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-full font-semibold hover:border-orange-500 hover:text-orange-500 transition-all">
                        <i class="fas fa-images"></i>
                        Voir la Galerie
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SERVICE 02 : REPORTAGE VIDÉO ==================== -->
<section id="reportage" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Content (ordre inversé sur desktop) -->
            <div class="order-2 lg:order-1">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-5xl font-bold text-orange-200">02</span>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Reportage & Montage Vidéo</h2>
                        <div class="h-1 w-20 bg-orange-500 mt-2"></div>
                    </div>
                </div>

                <p class="text-gray-600 text-lg mb-6">
                    Couverture complète de vos événements avec montage professionnel.
                </p>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-600 flex-shrink-0 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <div>
                            <strong class="text-gray-900">Événements sociaux</strong>
                            <p class="text-gray-500 text-sm">Mariage, anniversaire, baptême, funérailles</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-600 flex-shrink-0 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <div>
                            <strong class="text-gray-900">Événements professionnels</strong>
                            <p class="text-gray-500 text-sm">Conférence, séminaire, lancement produit</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-600 flex-shrink-0 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <div>
                            <strong class="text-gray-900">Sport & Culture</strong>
                            <p class="text-gray-500 text-sm">Matchs, concerts, festivals, expositions</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-600 flex-shrink-0 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <div>
                            <strong class="text-gray-900">Intervention nationale</strong>
                            <p class="text-gray-500 text-sm">Togo entier et pays voisins (Bénin, Ghana)</p>
                        </div>
                    </li>
                </ul>

                <!-- Package -->
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                    <h4 class="font-bold text-gray-900 mb-3">Notre Pack Événement</h4>
                    <div class="flex items-baseline gap-2 mb-4">
                        <span class="text-3xl font-bold text-orange-600">150 000 FCFA</span>
                        <span class="text-gray-500">/ journée</span>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Cadreurs professionnels</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Photographe professionnel</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Montage cinématographique</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Livraison rapide</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Qualité impécable !</li>
                    </ul>
                    <a href="{{ route('devis') }}" class="block w-full text-center bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition-all">
                        Demander un Devis Personnalisé
                    </a>
                </div>
            </div>

            <!-- Image -->
            <div class="order-1 lg:order-2 relative group">
                <div class="absolute -inset-4 bg-blue-200 rounded-2xl transform -rotate-2 group-hover:-rotate-1 transition-transform"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="/images/eric.webp" alt="Reportage vidéo" class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <p class="text-sm font-medium text-blue-300 mb-1">En action</p>
                        <p class="text-lg font-bold">Couverture événementielle multi-caméras</p>
                    </div>
                    <!-- Play button overlay -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all transform hover:scale-110">
                            <i class="fas fa-play text-3xl ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SERVICE 03 : PUBLICITÉ ==================== -->
<section id="publicite" class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-5xl font-bold text-gray-800">03</span>
            <h2 class="text-3xl font-bold mt-2 mb-4">Vidéos & Animations Publicitaires</h2>
            <div class="h-1 w-20 bg-orange-500 mx-auto"></div>
            <p class="text-gray-400 text-lg mt-6">
                Des contenus vidéo percutants pour promouvoir votre marque, vos produits ou vos services.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            
            <!-- Type 1 -->
            <div class="bg-gray-800 rounded-2xl p-8 hover:bg-gray-750 transition-all border border-gray-700 hover:border-orange-500/50 group">
                <div class="w-16 h-16 bg-orange-500/20 rounded-2xl flex items-center justify-center text-orange-400 text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all">
                    <i class="fas fa-tv"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Spot Publicitaire</h3>
                <p class="text-gray-400 mb-4 text-sm">
                    Vidéos courtes et impactantes pour TV, réseaux sociaux et digital signage.
                </p>
                <ul class="text-sm text-gray-500 space-y-2 mb-6">
                    <li><i class="fas fa-check text-orange-500 text-xs mr-2"></i> 15-60 secondes</li>
                    <li><i class="fas fa-check text-orange-500 text-xs mr-2"></i> Motion design</li>
                    <li><i class="fas fa-check text-orange-500 text-xs mr-2"></i> Voix-off professionnelle</li>
                </ul>
                <span class="text-orange-400 font-semibold">À partir de 75 000 FCFA</span>
            </div>

            <!-- Type 2 -->
            <div class="bg-gray-800 rounded-2xl p-8 hover:bg-gray-750 transition-all border border-gray-700 hover:border-orange-500/50 group">
                <div class="w-16 h-16 bg-orange-500/20 rounded-2xl flex items-center justify-center text-orange-400 text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Campagne Sensibilisation</h3>
                <p class="text-gray-400 mb-4 text-sm">
                    Vidéos institutionnelles pour ONG, associations et projets sociaux.
                </p>
                <ul class="text-sm text-gray-500 space-y-2 mb-6">
                    <li><i class="fas fa-check text-orange-500 text-xs mr-2"></i> Storytelling émotionnel</li>
                    <li><i class="fas fa-check text-orange-500 text-xs mr-2"></i> Multi-format (TV/web)</li>
                    <li><i class="fas fa-check text-orange-500 text-xs mr-2"></i> Sous-titres multilingues</li>
                </ul>
                <span class="text-orange-400 font-semibold">Sur devis</span>
            </div>

            <!-- Type 3 -->
            <div class="bg-gray-800 rounded-2xl p-8 hover:bg-gray-750 transition-all border border-gray-700 hover:border-orange-500/50 group">
                <div class="w-16 h-16 bg-orange-500/20 rounded-2xl flex items-center justify-center text-orange-400 text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Promotion Produit</h3>
                <p class="text-gray-400 mb-4 text-sm">
                    Mise en valeur de vos produits avec techniques de tournage professionnelles.
                </p>
                <ul class="text-sm text-gray-500 space-y-2 mb-6">
                    <li><i class="fas fa-check text-orange-500 text-xs mr-2"></i> Packshot studio</li>
                    <li><i class="fas fa-check text-orange-500 text-xs mr-2"></i> Vidéo 360°</li>
                    <li><i class="fas fa-check text-orange-500 text-xs mr-2"></i> Unboxing/test</li>
                </ul>
                <span class="text-orange-400 font-semibold">À partir de 50 000 FCFA</span>
            </div>

        </div>

        <!-- Portfolio Preview -->
        <div class="mt-16 text-center">
            <p class="text-gray-400 mb-6">Découvrez nos réalisations publicitaires</p>
            <a href="{{ route('galerie') }}" class="inline-flex items-center gap-2 border-2 border-orange-500 text-orange-500 px-8 py-3 rounded-full font-semibold hover:bg-orange-500 hover:text-white transition-all">
                <i class="fas fa-play-circle"></i>
                {{-- Voir nos Vidéos --}}
                Voir notre galerie
            </a>
        </div>
    </div>
</section>

<!-- ==================== ÉQUIPEMENT ==================== -->
{{-- <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-gray-900">Notre Équipement Professionnel</h3>
            <p class="text-gray-600 mt-2">Du matériel de qualité broadcast pour des résultats exceptionnels</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="p-6">
                <i class="fas fa-camera text-4xl text-orange-500 mb-4"></i>
                <h4 class="font-semibold text-gray-900">Sony A7IV</h4>
                <p class="text-sm text-gray-500">33MP, 4K 60fps</p>
            </div>
            <div class="p-6">
                <i class="fas fa-video text-4xl text-orange-500 mb-4"></i>
                <h4 class="font-semibold text-gray-900">Sony FX3</h4>
                <p class="text-sm text-gray-500">Cinema line, 4K 120fps</p>
            </div>
            <div class="p-6">
                <i class="fas fa-helicopter text-4xl text-orange-500 mb-4"></i>
                <h4 class="font-semibold text-gray-900">DJI Mavic 3</h4>
                <p class="text-sm text-gray-500">Drone 5.1K, Hasselblad</p>
            </div>
            <div class="p-6">
                <i class="fas fa-lightbulb text-4xl text-orange-500 mb-4"></i>
                <h4 class="font-semibold text-gray-900">Kit LED Pro</h4>
                <p class="text-sm text-gray-500">Éclairage studio portable</p>
            </div>
        </div>
    </div>
</section> --}}

<!-- ==================== CTA FINAL ==================== -->
<section id="devis" class="py-20 bg-orange-500">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Prêt à Donner Vie à Vos Projets ?
        </h2>
        <p class="text-orange-100 text-lg mb-8 max-w-2xl mx-auto">
            Contactez-nous maintenant pour discuter de votre projet et obtenir un devis personnalisé sous 24h.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="tel:+22892671533" class="inline-flex items-center justify-center gap-2 bg-white text-orange-600 px-8 py-4 rounded-full font-bold hover:bg-orange-50 transition-all transform hover:scale-105 shadow-xl">
                <i class="fas fa-phone-alt"></i>
                +228 92 67 15 33
            </a>
            <a href="https://wa.me/22892671533" class="inline-flex items-center justify-center gap-2 border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white/10 transition-all" target="_blank">
                <i class="fab fa-whatsapp text-xl"></i>
                Discuter sur WhatsApp
            </a>
        </div>
        
        <p class="text-sm text-orange-200">
            <i class="fas fa-clock mr-1"></i> Réponse garantie sous 30 minutes
        </p>
    </div>
</section>

@endsection