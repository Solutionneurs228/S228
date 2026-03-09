@extends('layouts.base')

@section('title', 'Développement Web & Mobile | Solutionneurs228')
@section('meta_description', 'Création de sites web professionnels, applications mobiles et portfolios au Togo. Laravel, React, Vue.js. Devis gratuit, livraison rapide.')

@section('hero')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-purple-900 via-brand-900 to-purple-800 pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
    <!-- Animated background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.15\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        <!-- Code decoration -->
        <div class="absolute top-20 right-10 text-white/10 font-mono text-sm hidden lg:block">
            <pre>&lt;code&gt; your success &lt;/code&gt;</pre>
        </div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div>
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-500/20 rounded-full text-purple-200 text-sm font-medium mb-6 border border-purple-500/30">
                    <i class="fas fa-code"></i>
                    <span>Développement Sur Mesure</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Votre Projet Digital <span class="text-purple-300">Réalisé</span> par des Experts
                </h1>
                
                <p class="text-xl text-purple-100 mb-8 max-w-xl">
                    Sites web professionnels, applications mobiles et solutions e-commerce. Technologies modernes, code propre, livraison rapide au Togo.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#devis" class="inline-flex items-center justify-center gap-2 bg-white text-brand-900 px-8 py-4 rounded-full font-bold hover:bg-purple-50 transition-all transform hover:scale-105 shadow-xl">
                        <i class="fas fa-rocket"></i>
                        Démarrer Mon Projet
                    </a>
                    <a href="https://wa.me/22892671533" class="inline-flex items-center justify-center gap-2 border-2 border-purple-400 text-white px-8 py-4 rounded-full font-semibold hover:bg-white/10 transition-all" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        Conseil Gratuit
                    </a>
                </div>
                
                <!-- Tech stack -->
                <div class="mt-8 flex flex-wrap items-center gap-4 text-purple-200 text-sm">
                    <span class="flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full">
                        <i class="fab fa-laravel text-orange-400"></i> Laravel
                    </span>
                    <span class="flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full">
                        <i class="fab fa-react text-blue-400"></i> React
                    </span>
                    <span class="flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full">
                        <i class="fab fa-vuejs text-green-400"></i> Vue.js
                    </span>
                    <span class="flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full">
                        <i class="fab fa-js text-yellow-400"></i> JavaScript
                    </span>
                </div>
            </div>
            
            <!-- Code illustration -->
            <div class="hidden lg:block relative">
                <div class="bg-gray-900 rounded-xl shadow-2xl overflow-hidden border border-gray-700 transform rotate-1 hover:rotate-0 transition-transform duration-500">
                    <div class="flex items-center gap-2 px-4 py-3 bg-gray-800 border-b border-gray-700">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <span class="ml-4 text-gray-400 text-sm font-mono">projet-web.php</span>
                    </div>
                    <div class="p-6 font-mono text-sm">
                        <div class="text-gray-500">// Votre projet web chez Solutionneurs228</div>
                        <div class="mt-2"><span class="text-purple-400">class</span> <span class="text-yellow-300">VotreProjet</span> {</div>
                        <div class="ml-4"><span class="text-purple-400">public</span> <span class="text-blue-400">$design</span> = <span class="text-green-400">'moderne'</span>;</div>
                        <div class="ml-4"><span class="text-purple-400">public</span> <span class="text-blue-400">$responsive</span> = <span class="text-green-400">'100% mobile'</span>;</div>
                        <div class="ml-4"><span class="text-purple-400">public</span> <span class="text-blue-400">$seo</span> = <span class="text-green-400">'optimisé'</span>;</div>
                        <div class="ml-4"><span class="text-purple-400">public</span> <span class="text-blue-400">$livraison</span> = <span class="text-green-400">'2-4 semaines'</span>;</div>
                        <div class="mt-2">}</div>
                        <div class="mt-4 text-green-400">✓ Projet livré avec succès !</div>
                    </div>
                </div>
                
                <!-- Floating badge -->
                <div class="absolute -bottom-4 -right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg font-semibold animate-pulse">
                    <i class="fas fa-check-circle mr-1"></i> 50+ projets livrés
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
            <a href="#sites-web" class="flex items-center gap-2 text-gray-600 hover:text-brand-600 font-medium transition-colors">
                <span class="w-8 h-8 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center text-sm font-bold">01</span>
                <span class="hidden sm:inline">Sites Web</span>
            </a>
            <a href="#applications" class="flex items-center gap-2 text-gray-600 hover:text-brand-600 font-medium transition-colors">
                <span class="w-8 h-8 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center text-sm font-bold">02</span>
                <span class="hidden sm:inline">Applications</span>
            </a>
            <a href="#portfolio" class="flex items-center gap-2 text-gray-600 hover:text-brand-600 font-medium transition-colors">
                <span class="w-8 h-8 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center text-sm font-bold">03</span>
                <span class="hidden sm:inline">Portfolio/CV</span>
            </a>
        </div>
    </div>
</section>

<!-- ==================== SERVICE 01 : SITES WEB ==================== -->
<section id="sites-web" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Image -->
            <div class="relative group">
                <div class="absolute -inset-4 bg-brand-200 rounded-2xl transform rotate-2 group-hover:rotate-1 transition-transform"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-white">
                    <div class="bg-gray-800 px-4 py-2 flex items-center gap-2">
                        <div class="flex gap-1">
                            <div class="w-2 h-2 rounded-full bg-red-500"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                            <div class="w-2 h-2 rounded-full bg-green-500"></div>
                        </div>
                        <span class="text-gray-400 text-xs ml-2">votre-entreprise.tg</span>
                    </div>
                    <img src="/images/web1.webp" alt="Création de sites web" class="w-full h-[450px] object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <div class="flex items-center gap-3 text-white">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium">Site responsive</p>
                                <p class="text-xs text-gray-300">Parfait sur tous les écrans</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-5xl font-bold text-brand-200">01</span>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Création de Sites Web</h2>
                        <div class="h-1 w-20 bg-brand-600 mt-2"></div>
                    </div>
                </div>

                <p class="text-gray-600 text-lg mb-6">
                    Vitrine professionnelle, e-commerce ou plateforme sur mesure. Nous développons des sites performants et sécurisés avec les meilleures technologies.
                </p>

                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 flex-shrink-0">
                            <i class="fas fa-store"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Site Vitrine</h4>
                            <p class="text-sm text-gray-500">Présentation entreprise</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-green-600 flex-shrink-0">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">E-commerce</h4>
                            <p class="text-sm text-gray-500">Boutique en ligne</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 flex-shrink-0">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Sur Mesure</h4>
                            <p class="text-sm text-gray-500">Fonctionnalités spécifiques</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 flex-shrink-0">
                            <i class="fas fa-search"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">SEO Optimisé</h4>
                            <p class="text-sm text-gray-500">Référencement naturel</p>
                        </div>
                    </div>
                </div>

                <!-- Pricing -->
                <div class="bg-brand-50 rounded-xl p-6 border border-brand-100 mb-6">
                    <div class="flex items-baseline gap-2 mb-2">
                        <span class="text-3xl font-bold text-brand-600">150 000</span>
                        <span class="text-gray-500">FCFA</span>
                        <span class="text-sm text-gray-400">/ site vitrine</span>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Design unique & responsive</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> 5 pages incluses</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Formulaire de contact</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Hébergement 1 an offert</li>
                    </ul>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="https://wa.me/22892671533?text=Bonjour, je souhaite créer un site web" class="inline-flex items-center gap-2 bg-brand-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-brand-700 transition-all" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        Demander un Devis
                    </a>
                    <a href="{{ route('galerie') }}" class="inline-flex items-center gap-2 border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-full font-semibold hover:border-brand-600 hover:text-brand-600 transition-all">
                        <i class="fas fa-eye"></i>
                        Voir nos Réalisations
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SERVICE 02 : APPLICATIONS MOBILES ==================== -->
<section id="applications" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Content -->
            <div class="order-2 lg:order-1">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-5xl font-bold text-brand-200">02</span>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Applications Mobiles</h2>
                        <div class="h-1 w-20 bg-brand-600 mt-2"></div>
                    </div>
                </div>

                <p class="text-gray-600 text-lg mb-6">
                    Applications natives et cross-platform pour iOS et Android. Performance optimale, interface intuitive, publication sur les stores.
                </p>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-green-600 flex-shrink-0">
                            <i class="fab fa-android text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Android Native</h4>
                            <p class="text-sm text-gray-500">Kotlin & Java - Performance maximale sur tous les appareils Android</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 flex-shrink-0">
                            <i class="fab fa-apple text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">iOS Native</h4>
                            <p class="text-sm text-gray-500">Swift - Expérience fluide sur iPhone et iPad</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 flex-shrink-0">
                            <i class="fas fa-mobile-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Cross-Platform</h4>
                            <p class="text-sm text-gray-500">React Native & Flutter - Une codebase, deux plateformes</p>
                        </div>
                    </div>
                </div>

                <!-- Process -->
                <div class="bg-brand-900 text-white rounded-xl p-6 mb-6">
                    <h4 class="font-bold mb-4">Notre Process de Développement</h4>
                    <div class="flex justify-between text-center text-sm">
                        <div>
                            <div class="w-10 h-10 bg-brand-700 rounded-full flex items-center justify-center mx-auto mb-2">1</div>
                            <span class="text-brand-200">Analyse</span>
                        </div>
                        <div class="flex-1 flex items-center justify-center">
                            <div class="h-0.5 bg-brand-700 w-full mx-2"></div>
                        </div>
                        <div>
                            <div class="w-10 h-10 bg-brand-700 rounded-full flex items-center justify-center mx-auto mb-2">2</div>
                            <span class="text-brand-200">Design</span>
                        </div>
                        <div class="flex-1 flex items-center justify-center">
                            <div class="h-0.5 bg-brand-700 w-full mx-2"></div>
                        </div>
                        <div>
                            <div class="w-10 h-10 bg-brand-700 rounded-full flex items-center justify-center mx-auto mb-2">3</div>
                            <span class="text-brand-200">Dev</span>
                        </div>
                        <div class="flex-1 flex items-center justify-center">
                            <div class="h-0.5 bg-brand-700 w-full mx-2"></div>
                        </div>
                        <div>
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-2"><i class="fas fa-rocket text-xs"></i></div>
                            <span class="text-green-400">Launch</span>
                        </div>
                    </div>
                </div>

                <a href="https://wa.me/22892671533?text=Bonjour, je souhaite développer une application mobile" class="inline-flex items-center gap-2 bg-brand-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-brand-700 transition-all" target="_blank">
                    <i class="fas fa-mobile-alt"></i>
                    Discuter de Mon Projet App
                </a>
            </div>

            <!-- Image -->
            <div class="order-1 lg:order-2 relative group">
                <div class="absolute -inset-4 bg-purple-200 rounded-2xl transform -rotate-2 group-hover:-rotate-1 transition-transform"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-gray-900 p-8">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-800 rounded-xl p-4 text-center">
                            <i class="fab fa-android text-4xl text-green-400 mb-2"></i>
                            <p class="text-white text-sm">Play Store</p>
                        </div>
                        <div class="bg-gray-800 rounded-xl p-4 text-center">
                            <i class="fab fa-apple text-4xl text-blue-400 mb-2"></i>
                            <p class="text-white text-sm">App Store</p>
                        </div>
                    </div>
                    <img src="/images/web.webp" alt="Applications mobiles" class="w-full h-64 object-cover rounded-xl mt-4">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 text-center text-white">
                            <p class="text-2xl font-bold">iOS + Android</p>
                            <p class="text-sm">Une app, toutes les plateformes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SERVICE 03 : PORTFOLIO/CV ==================== -->
<section id="portfolio" class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Image -->
            <div class="relative group">
                <div class="absolute -inset-4 bg-orange-200 rounded-2xl transform rotate-2 group-hover:rotate-1 transition-transform"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-white">
                    <div class="bg-gradient-to-r from-brand-600 to-purple-600 px-6 py-4">
                        <h3 class="text-white font-bold">Mon Portfolio</h3>
                        <p class="text-brand-100 text-sm">Développeur Web Full Stack</p>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-gray-200 rounded-full"></div>
                            <div>
                                <p class="font-bold text-gray-900">Votre Nom</p>
                                <p class="text-sm text-gray-500">Disponible pour missions</p>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="h-2 bg-gray-100 rounded w-full"></div>
                            <div class="h-2 bg-gray-100 rounded w-3/4"></div>
                            <div class="h-2 bg-gray-100 rounded w-5/6"></div>
                        </div>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-brand-100 text-brand-600 rounded-full text-xs">Laravel</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Vue.js</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Tailwind</span>
                        </div>
                    </div>
                    <img src="/images/web1.webp" alt="Site CV Portfolio" class="w-full h-48 object-cover opacity-50">
                </div>
                
                <!-- Badge -->
                <div class="absolute -bottom-4 -right-4 bg-orange-500 text-white px-4 py-2 rounded-lg shadow-lg font-semibold">
                    <i class="fas fa-star mr-1"></i> Impact garanti
                </div>
            </div>

            <!-- Content -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-5xl font-bold text-brand-200">03</span>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Site CV & Portfolio</h2>
                        <div class="h-1 w-20 bg-brand-600 mt-2"></div>
                    </div>
                </div>

                <p class="text-gray-600 text-lg mb-6">
                    Démarquez-vous avec un CV web interactif. Plus impactant qu'un PDF, partageable par URL, et accessible 24/7 aux recruteurs du monde entier.
                </p>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center text-orange-600 flex-shrink-0 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <div>
                            <strong class="text-gray-900">Présentation multimédia</strong>
                            <p class="text-gray-500 text-sm">Textes, photos, vidéos, projets, témoignages</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center text-orange-600 flex-shrink-0 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <div>
                            <strong class="text-gray-900">Formulaire de contact intégré</strong>
                            <p class="text-gray-500 text-sm">Les recruteurs vous contactent directement</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center text-orange-600 flex-shrink-0 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <div>
                            <strong class="text-gray-900">URL personnalisée</strong>
                            <p class="text-gray-500 text-sm">votrenom.com ou portfolio.solutionneurs228.tg</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center text-orange-600 flex-shrink-0 mt-0.5">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <div>
                            <strong class="text-gray-900">Analytics inclus</strong>
                            <p class="text-gray-500 text-sm">Suivez qui consulte votre CV</p>
                        </div>
                    </div>
                </div>

                <!-- Demo link -->
                <div class="bg-orange-50 rounded-xl p-6 border border-orange-100 mb-6">
                    <p class="text-gray-700 mb-3">
                        <i class="fas fa-lightbulb text-orange-500 mr-2"></i>
                        Ça vous tente de voir un exemple ?
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-brand-600 font-semibold hover:text-brand-800">
                        <i class="fas fa-external-link-alt"></i>
                        Voir mon portfolio personnel
                    </a>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="https://wa.me/22892671533?text=Bonjour, je souhaite créer mon site CV" class="inline-flex items-center gap-2 bg-brand-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-brand-700 transition-all" target="_blank">
                        <i class="fas fa-user-tie"></i>
                        Créer Mon CV Web
                    </a>
                    <span class="text-sm text-gray-500 self-center">
                        À partir de <strong class="text-brand-600">75 000 FCFA</strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TECHNOLOGIES ==================== -->
<section class="py-16 bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-gray-900">Nos Technologies</h3>
            <p class="text-gray-600 mt-2">Des outils modernes pour des résultats professionnels</p>
        </div>
        
        <div class="grid grid-cols-3 md:grid-cols-6 gap-8 text-center">
            <div class="p-4 hover:bg-gray-50 rounded-xl transition-colors">
                <i class="fab fa-laravel text-4xl text-red-500 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">Laravel</p>
            </div>
            <div class="p-4 hover:bg-gray-50 rounded-xl transition-colors">
                <i class="fab fa-react text-4xl text-blue-400 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">React</p>
            </div>
            <div class="p-4 hover:bg-gray-50 rounded-xl transition-colors">
                <i class="fab fa-vuejs text-4xl text-green-500 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">Vue.js</p>
            </div>
            <div class="p-4 hover:bg-gray-50 rounded-xl transition-colors">
                <i class="fab fa-js text-4xl text-yellow-400 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">JavaScript</p>
            </div>
            <div class="p-4 hover:bg-gray-50 rounded-xl transition-colors">
                <i class="fab fa-wordpress text-4xl text-blue-600 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">WordPress</p>
            </div>
            <div class="p-4 hover:bg-gray-50 rounded-xl transition-colors">
                <i class="fas fa-database text-4xl text-gray-600 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">MySQL</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CTA FINAL ==================== -->
<section id="devis" class="py-20 bg-brand-900">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Prêt à Lancer Votre Projet Web ?
        </h2>
        <p class="text-brand-200 text-lg mb-8 max-w-2xl mx-auto">
            De l'idée à la mise en ligne, nous vous accompagnons à chaque étape. Devis gratuit sous 24h.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="https://wa.me/22892671533" class="inline-flex items-center justify-center gap-2 bg-white text-brand-900 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition-all transform hover:scale-105 shadow-xl" target="_blank">
                <i class="fab fa-whatsapp text-xl"></i>
                Discuter sur WhatsApp
            </a>
            <a href="tel:+22892671533" class="inline-flex items-center justify-center gap-2 border-2 border-brand-400 text-white px-8 py-4 rounded-full font-semibold hover:bg-brand-800 transition-all">
                <i class="fas fa-phone-alt"></i>
                +228 92 67 15 33
            </a>
        </div>
        
        <p class="text-sm text-brand-300">
            <i class="fas fa-clock mr-1"></i> Réponse sous 30 min • Devis gratuit • Garantie satisfaction
        </p>
    </div>
</section>

@endsection