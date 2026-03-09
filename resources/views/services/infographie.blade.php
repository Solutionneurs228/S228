@extends('layouts.base')

@section('title', 'Design Graphique & Infographie | Solutionneurs228')
@section('meta_description', 'Création graphique professionnelle au Togo : logos, affiches, flyers, cartes de visite, charte graphique. Design moderne, livraison rapide.')

@section('hero')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-pink-600 via-purple-700 to-indigo-800 pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.2\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div>
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full text-pink-200 text-sm font-medium mb-6 border border-white/20">
                    <i class="fas fa-palette"></i>
                    <span>Design & Créativité</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Donnez Vie à Votre <span class="text-pink-300">Image</span> de Marque
                </h1>
                
                <p class="text-xl text-purple-100 mb-8 max-w-xl">
                    Créations graphiques professionnelles pour faire briller votre entreprise. Logos, affiches, packaging et identité visuelle complète.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#devis" class="inline-flex items-center justify-center gap-2 bg-white text-purple-900 px-8 py-4 rounded-full font-bold hover:bg-pink-50 transition-all transform hover:scale-105 shadow-xl">
                        <i class="fas fa-magic"></i>
                        Créer Mon Logo
                    </a>
                    <a href="https://wa.me/22892671533" class="inline-flex items-center justify-center gap-2 border-2 border-pink-300 text-white px-8 py-4 rounded-full font-semibold hover:bg-white/10 transition-all" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        Conseil Gratuit
                    </a>
                </div>
                
                <!-- Quick services -->
                <div class="mt-8 flex flex-wrap gap-3">
                    <span class="px-3 py-1 bg-white/10 text-pink-200 rounded-full text-sm">Logo</span>
                    <span class="px-3 py-1 bg-white/10 text-pink-200 rounded-full text-sm">Flyer</span>
                    <span class="px-3 py-1 bg-white/10 text-pink-200 rounded-full text-sm">Carte de visite</span>
                    <span class="px-3 py-1 bg-white/10 text-pink-200 rounded-full text-sm">Affiche</span>
                    <span class="px-3 py-1 bg-white/10 text-pink-200 rounded-full text-sm">Charte graphique</span>
                </div>
            </div>
            
            <!-- Visual illustration -->
            <div class="hidden lg:block relative">
                <div class="relative bg-white rounded-2xl shadow-2xl p-6 transform rotate-2 hover:rotate-0 transition-transform duration-500">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gradient-to-br from-pink-500 to-purple-600 rounded-xl p-6 text-white text-center">
                            <i class="fas fa-pen-nib text-3xl mb-2"></i>
                            <p class="font-bold">Logo</p>
                        </div>
                        <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl p-6 text-white text-center">
                            <i class="fas fa-file-alt text-3xl mb-2"></i>
                            <p class="font-bold">Flyer</p>
                        </div>
                        <div class="bg-gradient-to-br from-indigo-500 to-blue-600 rounded-xl p-6 text-white text-center">
                            <i class="fas fa-id-card text-3xl mb-2"></i>
                            <p class="font-bold">Carte</p>
                        </div>
                        <div class="bg-gradient-to-br from-pink-500 to-orange-500 rounded-xl p-6 text-white text-center">
                            <i class="fas fa-bullhorn text-3xl mb-2"></i>
                            <p class="font-bold">Pub</p>
                        </div>
                    </div>
                </div>
                
                <!-- Floating badge -->
                <div class="absolute -bottom-4 -left-4 bg-yellow-400 text-purple-900 px-4 py-2 rounded-lg shadow-lg font-bold animate-bounce">
                    <i class="fas fa-bolt mr-1"></i> Livraison 24h
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<!-- ==================== SOMMAIRE RAPIDE ==================== -->
<section class="py-6 bg-white border-b border-gray-200 sticky top-20 z-30 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4 md:gap-8">
            <a href="#identite" class="flex items-center gap-2 text-gray-600 hover:text-pink-600 font-medium transition-colors">
                <span class="w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center text-sm font-bold">01</span>
                <span class="hidden sm:inline">Identité Visuelle</span>
            </a>
            <a href="#print" class="flex items-center gap-2 text-gray-600 hover:text-pink-600 font-medium transition-colors">
                <span class="w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center text-sm font-bold">02</span>
                <span class="hidden sm:inline">Imprimés</span>
            </a>
            <a href="#digital" class="flex items-center gap-2 text-gray-600 hover:text-pink-600 font-medium transition-colors">
                <span class="w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center text-sm font-bold">03</span>
                <span class="hidden sm:inline">Digital</span>
            </a>
            <a href="#packaging" class="flex items-center gap-2 text-gray-600 hover:text-pink-600 font-medium transition-colors">
                <span class="w-8 h-8 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center text-sm font-bold">04</span>
                <span class="hidden sm:inline">Packaging</span>
            </a>
        </div>
    </div>
</section>

<!-- ==================== SERVICE 01 : IDENTITÉ VISUELLE ==================== -->
<section id="identite" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Image -->
            <div class="relative group">
                <div class="absolute -inset-4 bg-pink-200 rounded-2xl transform rotate-2 group-hover:rotate-1 transition-transform"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-white p-8">
                    <div class="text-center mb-6">
                        <div class="w-32 h-32 bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl mx-auto flex items-center justify-center text-white text-5xl mb-4">
                            <i class="fas fa-crown"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Votre Logo</h3>
                        <p class="text-gray-500">Unique & Mémorable</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <div class="w-8 h-8 rounded-full bg-pink-500"></div>
                            <div class="w-8 h-8 rounded-full bg-purple-500"></div>
                            <div class="w-8 h-8 rounded-full bg-indigo-500"></div>
                            <span class="text-sm text-gray-500 ml-2">Palette de couleurs</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <span class="font-serif text-lg text-gray-700">Aa</span>
                            <span class="font-sans text-lg text-gray-700">Aa</span>
                            <span class="text-sm text-gray-500 ml-2">Typographies</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-5xl font-bold text-pink-200">01</span>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Identité Visuelle</h2>
                        <div class="h-1 w-20 bg-pink-500 mt-2"></div>
                    </div>
                </div>

                <p class="text-gray-600 text-lg mb-6">
                    Une image de marque forte et cohérente pour vous démarquer. Nous créons votre univers visuel complet, du logo aux applications.
                </p>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center text-pink-600 flex-shrink-0">
                            <i class="fas fa-fingerprint text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Logo & Sigle</h4>
                            <p class="text-sm text-gray-500">Création originale, déclinaisons, versions vectorielles</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 flex-shrink-0">
                            <i class="fas fa-swatchbook text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Charte Graphique</h4>
                            <p class="text-sm text-gray-500">Couleurs, typographies, règles d'utilisation</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center text-indigo-600 flex-shrink-0">
                            <i class="fas fa-pen-fancy text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Mascotte & Illustration</h4>
                            <p class="text-sm text-gray-500">Personnage unique pour votre marque</p>
                        </div>
                    </div>
                </div>

                <!-- Pricing -->
                <div class="bg-pink-50 rounded-xl p-6 border border-pink-100 mb-6">
                    <div class="flex items-baseline gap-2 mb-2">
                        <span class="text-3xl font-bold text-pink-600">75 000</span>
                        <span class="text-gray-500">FCFA</span>
                        <span class="text-sm text-gray-400">/ logo + charte</span>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> 3 propositions de logo</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Fichiers vectoriels (AI, EPS, SVG)</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Charte graphique PDF</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> 3 révisions incluses</li>
                    </ul>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="https://wa.me/22892671533?text=Bonjour, je souhaite créer mon logo" class="inline-flex items-center gap-2 bg-pink-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-pink-700 transition-all" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        Commander Mon Logo
                    </a>
                    <a href="{{ route('galerie') }}" class="inline-flex items-center gap-2 border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-full font-semibold hover:border-pink-600 hover:text-pink-600 transition-all">
                        <i class="fas fa-images"></i>
                        Voir nos Créations
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SERVICE 02 : IMPRIMÉS ==================== -->
<section id="print" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-5xl font-bold text-gray-100">02</span>
            <h2 class="text-3xl font-bold text-gray-900 -mt-8 mb-4">Imprimés & Supports Papier</h2>
            <div class="h-1 w-20 bg-pink-500 mx-auto"></div>
            <p class="text-gray-600 text-lg mt-6">
                Tous vos supports de communication physique, du petit format au grand format.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Carte de visite -->
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all border border-gray-100 hover:border-pink-200">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-id-card"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Carte de Visite</h3>
                <p class="text-gray-600 text-sm mb-4">Format standard ou original, papier premium</p>
                <div class="flex items-baseline gap-1">
                    <span class="text-xl font-bold text-pink-600">5 000</span>
                    <span class="text-gray-500 text-sm">FCFA/100</span>
                </div>
            </div>

            <!-- Flyer -->
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all border border-gray-100 hover:border-pink-200">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 text-2xl mb-4 group-hover:bg-green-600 group-hover:text-white transition-colors">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Flyer & Dépliant</h3>
                <p class="text-gray-600 text-sm mb-4">A5, A4, A3, recto-verso, pli accordéon</p>
                <div class="flex items-baseline gap-1">
                    <span class="text-xl font-bold text-pink-600">15 000</span>
                    <span class="text-gray-500 text-sm">FCFA/100</span>
                </div>
            </div>

            <!-- Affiche -->
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all border border-gray-100 hover:border-pink-200">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <i class="fas fa-image"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Affiche & Poster</h3>
                <p class="text-gray-600 text-sm mb-4">A3, A2, A1, A0, papier photo ou bâche</p>
                <div class="flex items-baseline gap-1">
                    <span class="text-xl font-bold text-pink-600">8 000</span>
                    <span class="text-gray-500 text-sm">FCFA</span>
                </div>
            </div>

            <!-- Brochure -->
            <div class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all border border-gray-100 hover:border-pink-200">
                <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-600 text-2xl mb-4 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Brochure & Catalogue</h3>
                <p class="text-gray-600 text-sm mb-4">Reliure agrafe, spirale, dos carré collé</p>
                <div class="flex items-baseline gap-1">
                    <span class="text-xl font-bold text-pink-600">Sur</span>
                    <span class="text-gray-500 text-sm">devis</span>
                </div>
            </div>

        </div>

        <!-- Grand format -->
        <div class="mt-12 bg-gray-900 rounded-2xl p-8 text-white">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Grand Format & Signalétique</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center gap-3"><i class="fas fa-check-circle text-pink-500"></i> Bâche publicitaire (bâche PVC, mesh)</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check-circle text-pink-500"></i> Roll-up & kakémono</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check-circle text-pink-500"></i> Panneau & enseigne</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check-circle text-pink-500"></i> Adhésif & covering véhicule</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check-circle text-pink-500"></i> Stand & backdrop événementiel</li>
                    </ul>
                </div>
                <div class="text-center md:text-right">
                    <p class="text-gray-400 mb-2">Devis personnalisé</p>
                    <p class="text-3xl font-bold text-pink-400">Sur mesure</p>
                    <a href="https://wa.me/22892671533" class="inline-flex items-center gap-2 mt-4 bg-pink-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-pink-700 transition-all" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        Demander un Devis
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SERVICE 03 : DIGITAL ==================== -->
<section id="digital" class="py-20 bg-gradient-to-br from-purple-900 via-indigo-900 to-blue-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-5xl font-bold text-white/10">03</span>
            <h2 class="text-3xl font-bold -mt-8 mb-4">Design Digital & Réseaux Sociaux</h2>
            <div class="h-1 w-20 bg-pink-500 mx-auto"></div>
            <p class="text-indigo-200 text-lg mt-6">
                Des visuels optimisés pour le web et les réseaux sociaux.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            
            <!-- Social Media -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all">
                <div class="w-16 h-16 bg-pink-500/20 rounded-2xl flex items-center justify-center text-pink-400 text-2xl mb-6">
                    <i class="fas fa-share-alt"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Réseaux Sociaux</h3>
                <p class="text-indigo-200 text-sm mb-4">
                    Posts Instagram, Facebook, LinkedIn, stories, covers, bannières.
                </p>
                <ul class="text-sm text-indigo-300 space-y-2 mb-6">
                    <li><i class="fas fa-check text-pink-400 text-xs mr-2"></i> 5 posts : 15 000 FCFA</li>
                    <li><i class="fas fa-check text-pink-400 text-xs mr-2"></i> Kit mensuel : 50 000 FCFA</li>
                    <li><i class="fas fa-check text-pink-400 text-xs mr-2"></i> Templates réutilisables</li>
                </ul>
            </div>

            <!-- Web Design -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all">
                <div class="w-16 h-16 bg-blue-500/20 rounded-2xl flex items-center justify-center text-blue-400 text-2xl mb-6">
                    <i class="fas fa-desktop"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Web Design</h3>
                <p class="text-indigo-200 text-sm mb-4">
                    Maquettes de sites web, landing pages, newsletters, bannières web.
                </p>
                <ul class="text-sm text-indigo-300 space-y-2 mb-6">
                    <li><i class="fas fa-check text-pink-400 text-xs mr-2"></i> Maquette landing page : 35 000 FCFA</li>
                    <li><i class="fas fa-check text-pink-400 text-xs mr-2"></i> Newsletter : 15 000 FCFA</li>
                    <li><i class="fas fa-check text-pink-400 text-xs mr-2"></i> Bannières web : 5 000 FCFA</li>
                </ul>
            </div>

            <!-- Motion -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all">
                <div class="w-16 h-16 bg-purple-500/20 rounded-2xl flex items-center justify-center text-purple-400 text-2xl mb-6">
                    <i class="fas fa-play-circle"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Motion Design</h3>
                <p class="text-indigo-200 text-sm mb-4">
                    Logos animés, intros vidéo, GIFs, présentations dynamiques.
                </p>
                <ul class="text-sm text-indigo-300 space-y-2 mb-6">
                    <li><i class="fas fa-check text-pink-400 text-xs mr-2"></i> Logo animé : 25 000 FCFA</li>
                    <li><i class="fas fa-check text-pink-400 text-xs mr-2"></i> Intro YouTube : 35 000 FCFA</li>
                    <li><i class="fas fa-check text-pink-400 text-xs mr-2"></i> Pub animée 15s : 50 000 FCFA</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- ==================== SERVICE 04 : PACKAGING ==================== -->
<section id="packaging" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Content -->
            <div class="order-2 lg:order-1">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-5xl font-bold text-pink-200">04</span>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Packaging & Étiquettes</h2>
                        <div class="h-1 w-20 bg-pink-500 mt-2"></div>
                    </div>
                </div>

                <p class="text-gray-600 text-lg mb-6">
                    Le packaging est votre vendeur silencieux. Nous concevons des emballages qui protègent, séduisent et vendent vos produits.
                </p>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center text-pink-600 flex-shrink-0">
                            <i class="fas fa-box text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Packaging Produit</h4>
                            <p class="text-sm text-gray-500">Boîtes, sachets, bouteilles, pots - Design adapté à votre produit</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 flex-shrink-0">
                            <i class="fas fa-tags text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Étiquettes & Stickers</h4>
                            <p class="text-sm text-gray-500">Tous formats, matières (papier, vinyl, transparent), finitions</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center text-indigo-600 flex-shrink-0">
                            <i class="fas fa-shopping-bag text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Sac & Emballage</h4>
                            <p class="text-sm text-gray-500">Sacs papier, tote bags, emballages e-commerce personnalisés</p>
                        </div>
                    </div>
                </div>

                <div class="bg-pink-50 rounded-xl p-6 border border-pink-100">
                    <p class="text-gray-700 mb-3">
                        <i class="fas fa-lightbulb text-pink-500 mr-2"></i>
                        Le bon packaging augmente les ventes de 30%
                    </p>
                    <a href="https://wa.me/22892671533" class="inline-flex items-center gap-2 text-pink-600 font-semibold hover:text-pink-800" target="_blank">
                        <i class="fas fa-comments"></i>
                        Discuter de mon projet packaging
                    </a>
                </div>
            </div>

            <!-- Image -->
            <div class="order-1 lg:order-2 relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-pink-200 to-purple-200 rounded-2xl transform -rotate-2 group-hover:-rotate-1 transition-transform"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-white p-8">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-pink-100 rounded-xl p-6 text-center">
                            <i class="fas fa-wine-bottle text-4xl text-pink-600 mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Étiquette</p>
                        </div>
                        <div class="bg-purple-100 rounded-xl p-6 text-center">
                            <i class="fas fa-box-open text-4xl text-purple-600 mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Boîte</p>
                        </div>
                        <div class="bg-indigo-100 rounded-xl p-6 text-center">
                            <i class="fas fa-shopping-bag text-4xl text-indigo-600 mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Sac</p>
                        </div>
                        <div class="bg-blue-100 rounded-xl p-6 text-center">
                            <i class="fas fa-cube text-4xl text-blue-600 mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Emballage</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PROCESSUS CRÉATIF ==================== -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Notre Processus Créatif</h2>
            <p class="text-gray-600 text-lg">
                De votre brief à la livraison finale, une méthode éprouvée pour des résultats exceptionnels.
            </p>
        </div>

        <div class="grid md:grid-cols-5 gap-4">
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center text-pink-600 text-xl font-bold mx-auto mb-4">1</div>
                <h4 class="font-bold text-gray-900 mb-2">Brief</h4>
                <p class="text-sm text-gray-500">Comprendre vos besoins, objectifs et contraintes</p>
            </div>
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 text-xl font-bold mx-auto mb-4">2</div>
                <h4 class="font-bold text-gray-900 mb-2">Recherche</h4>
                <p class="text-sm text-gray-500">Analyse concurrentielle et inspiration</p>
            </div>
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 text-xl font-bold mx-auto mb-4">3</div>
                <h4 class="font-bold text-gray-900 mb-2">Création</h4>
                <p class="text-sm text-gray-500">3 propositions de design uniques</p>
            </div>
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-xl font-bold mx-auto mb-4">4</div>
                <h4 class="font-bold text-gray-900 mb-2">Révisions</h4>
                <p class="text-sm text-gray-500">Ajustements selon vos retours</p>
            </div>
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center text-green-600 text-xl font-bold mx-auto mb-4">5</div>
                <h4 class="font-bold text-gray-900 mb-2">Livraison</h4>
                <p class="text-sm text-gray-500">Fichiers finaux prêts à imprimer</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CTA FINAL ==================== -->
<section id="devis" class="py-20 bg-pink-600">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Prêt à Donner Vie à Vos Idées ?
        </h2>
        <p class="text-pink-100 text-lg mb-8 max-w-2xl mx-auto">
            Contactez-nous maintenant pour discuter de votre projet. Devis gratuit sous 24h, livraison rapide.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="https://wa.me/22892671533" class="inline-flex items-center justify-center gap-2 bg-white text-pink-600 px-8 py-4 rounded-full font-bold hover:bg-pink-50 transition-all transform hover:scale-105 shadow-xl" target="_blank">
                <i class="fab fa-whatsapp text-xl"></i>
                Envoyer Mon Brief
            </a>
            <a href="tel:+22892671533" class="inline-flex items-center justify-center gap-2 border-2 border-pink-300 text-white px-8 py-4 rounded-full font-semibold hover:bg-pink-700 transition-all">
                <i class="fas fa-phone-alt"></i>
                +228 92 67 15 33
            </a>
        </div>
        
        <p class="text-sm text-pink-200">
            <i class="fas fa-clock mr-1"></i> Réponse sous 30 min • Devis gratuit • 3 propositions incluses
        </p>
    </div>
</section>

@endsection