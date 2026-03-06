@extends('layouts.base')

@section('title', 'Maintenance Informatique | Solutionneurs228')
@section('meta_description', 'Service de maintenance informatique professionnel au Togo. Réparation ordinateurs, serveurs, réseaux. Intervention rapide 24/7.')

@section('hero')
<!-- Hero Spécifique Maintenance -->
<section class="relative bg-brand-900 pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-brand-800/50 rounded-full text-brand-100 text-sm font-medium mb-6 border border-brand-700">
                    <i class="fas fa-tools"></i>
                    <span>Service IT Professionnel</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Maintenance <span class="text-brand-300">Informatique</span>
                </h1>
                
                <p class="text-xl text-brand-100 mb-8 max-w-2xl mx-auto lg:mx-0">
                    Solutions complètes pour entreprises et particuliers au Togo. Intervention rapide, diagnostic gratuit, devis transparent.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#devis" class="inline-flex items-center justify-center gap-2 bg-white text-brand-900 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition-all transform hover:scale-105 shadow-xl">
                        <i class="fas fa-calculator"></i>
                        Devis Gratuit
                    </a>
                    <a href="tel:+22892671533" class="inline-flex items-center justify-center gap-2 border-2 border-brand-400 text-white px-8 py-4 rounded-full font-semibold hover:bg-brand-800 transition-all">
                        <i class="fas fa-phone"></i>
                        +228 92 67 15 33
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="mt-8 flex flex-wrap items-center justify-center lg:justify-start gap-6 text-brand-200 text-sm">
                    <span class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-brand-400"></i>
                        Intervention 24/7
                    </span>
                    <span class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-brand-400"></i>
                        Garantie 6 mois
                    </span>
                    <span class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-brand-400"></i>
                        Devis gratuit
                    </span>
                </div>
            </div>
            
            <!-- Hero Image/Illustration -->
            <div class="relative hidden lg:block">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
                    <img src="/images/maintenance-hero.jpg" alt="Technicien informatique" class="w-full h-auto object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-900/80 to-transparent"></div>
                </div>
                
                <!-- Floating Card -->
                <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-xl p-4 flex items-center gap-3 animate-bounce">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                        <i class="fas fa-clock text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Temps moyen</p>
                        <p class="font-bold text-gray-900">2h d'intervention</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#f9fafb"/>
        </svg>
    </div>
</section>
@endsection

@section('content')
<!-- ==================== SERVICES DÉTAILLÉS ==================== -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Nos Prestations</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">
                Services de Maintenance Complète
            </h2>
            <p class="text-gray-600 text-lg">
                De la réparation simple à l'optimisation complète de votre parc informatique, nous couvrons tous vos besoins.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1 -->
            <div class="group bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-laptop-medical"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Réparation Ordinateurs</h3>
                <p class="text-gray-600 mb-4">
                    Diagnostic et réparation de PC fixes et portables. Remplacement composants, récupération données, optimisation système.
                </p>
                <ul class="space-y-2 text-sm text-gray-500 mb-6">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Remplacement écran</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Changement batterie</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Upgrade RAM/SSD</li>
                </ul>
                <span class="text-brand-600 font-semibold text-sm">À partir de 15 000 FCFA</span>
            </div>

            <!-- Service 2 -->
            <div class="group bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 text-2xl mb-6 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Réseaux & Serveurs</h3>
                <p class="text-gray-600 mb-4">
                    Installation et maintenance de réseaux d'entreprise. Configuration serveurs, sécurisation, sauvegardes automatiques.
                </p>
                <ul class="space-y-2 text-sm text-gray-500 mb-6">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Câblage réseau</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Configuration WiFi</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Sécurité firewall</li>
                </ul>
                <span class="text-brand-600 font-semibold text-sm">Sur devis</span>
            </div>

            <!-- Service 3 -->
            <div class="group bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-shield-virus"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Sécurité Informatique</h3>
                <p class="text-gray-600 mb-4">
                    Protection contre virus et malwares. Installation antivirus, audit sécurité, récupération après attaque.
                </p>
                <ul class="space-y-2 text-sm text-gray-500 mb-6">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Nettoyage virus</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Antivirus pro</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Sauvegarde données</li>
                </ul>
                <span class="text-brand-600 font-semibold text-sm">À partir de 10 000 FCFA</span>
            </div>

            <!-- Service 4 -->
            <div class="group bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-600 text-2xl mb-6 group-hover:bg-orange-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-print"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Périphériques & Imprimantes</h3>
                <p class="text-gray-600 mb-4">
                    Installation et maintenance de périphériques. Imprimantes, scanners, projecteurs, équipements bureautiques.
                </p>
                <ul class="space-y-2 text-sm text-gray-500 mb-6">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Installation drivers</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Réparation mécanique</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Configuration réseau</li>
                </ul>
                <span class="text-brand-600 font-semibold text-sm">À partir de 8 000 FCFA</span>
            </div>

            <!-- Service 5 -->
            <div class="group bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-pink-100 rounded-2xl flex items-center justify-center text-pink-600 text-2xl mb-6 group-hover:bg-pink-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Récupération de Données</h3>
                <p class="text-gray-600 mb-4">
                    Récupération de fichiers perdus ou supprimés. Disques durs, clés USB, cartes mémoires, RAID.
                </p>
                <ul class="space-y-2 text-sm text-gray-500 mb-6">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Disques endommagés</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Fichiers supprimés</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Clés USB/cartes SD</li>
                </ul>
                <span class="text-brand-600 font-semibold text-sm">À partir de 25 000 FCFA</span>
            </div>

            <!-- Service 6 -->
            <div class="group bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-brand-200">
                <div class="w-16 h-16 bg-teal-100 rounded-2xl flex items-center justify-center text-teal-600 text-2xl mb-6 group-hover:bg-teal-600 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Support à Distance</h3>
                <p class="text-gray-600 mb-4">
                    Assistance rapide sans déplacement. Connexion sécurisée, résolution problèmes logiciels, formation utilisateur.
                </p>
                <ul class="space-y-2 text-sm text-gray-500 mb-6">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Connexion sécurisée</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Résolution rapide</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> Disponible 24/7</li>
                </ul>
                <span class="text-brand-600 font-semibold text-sm">5 000 FCFA/30min</span>
            </div>

        </div>
    </div>
</section>

<!-- ==================== PROCESSUS ==================== -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">Notre Méthode</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">
                Comment Ça Marche ?
            </h2>
            <p class="text-gray-600 text-lg">
                Un processus simple et transparent pour résoudre vos problèmes informatiques rapidement.
            </p>
        </div>

        <!-- Steps -->
        <div class="grid md:grid-cols-4 gap-8 relative">
            <!-- Ligne de connexion (desktop) -->
            <div class="hidden md:block absolute top-1/2 left-0 right-0 h-0.5 bg-brand-100 -translate-y-1/2 z-0"></div>
            
            <!-- Step 1 -->
            <div class="relative z-10 text-center">
                <div class="w-20 h-20 bg-brand-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4 shadow-lg">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-2">1. Contact</h3>
                    <p class="text-gray-600 text-sm">Appelez-nous ou remplissez le formulaire en ligne. Réponse sous 30 min.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 text-center">
                <div class="w-20 h-20 bg-brand-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4 shadow-lg">
                    <i class="fas fa-search"></i>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-2">2. Diagnostic</h3>
                    <p class="text-gray-600 text-sm">Analyse complète de votre problème. Devis détaillé et transparent.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 text-center">
                <div class="w-20 h-20 bg-brand-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4 shadow-lg">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-2">3. Intervention</h3>
                    <p class="text-gray-600 text-sm">Réparation sur site ou en atelier. Suivi en temps réel.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative z-10 text-center">
                <div class="w-20 h-20 bg-brand-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4 shadow-lg">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-2">4. Livraison</h3>
                    <p class="text-gray-600 text-sm">Test complet et garantie 6 mois. Support post-intervention inclus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TARIFS ==================== -->
<section id="devis" class="py-20 bg-brand-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-300 font-semibold tracking-wider uppercase text-sm">Nos Tarifs</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-4">
                Des Prix Transparents
            </h2>
            <p class="text-brand-100 text-lg">
                Pas de surprises. Devis gratuit avant chaque intervention.
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid md:grid-cols-3 gap-8">
            
            <!-- Basic -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-brand-700 hover:bg-white/20 transition-all">
                <h3 class="text-xl font-bold text-white mb-2">Diagnostic</h3>
                <p class="text-brand-200 text-sm mb-6">Analyse complète de votre problème</p>
                <div class="text-4xl font-bold text-white mb-6">
                    Gratuit
                </div>
                <ul class="space-y-3 text-brand-100 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-brand-300"></i> Analyse matériel</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-brand-300"></i> Analyse logiciel</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-brand-300"></i> Devis détaillé</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-brand-300"></i> Conseils personnalisés</li>
                </ul>
                <a href="#contact" class="block w-full py-3 text-center border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-brand-900 transition-all">
                    Prendre RDV
                </a>
            </div>

            <!-- Standard (Popular) -->
            <div class="bg-white rounded-2xl p-8 shadow-2xl transform md:-translate-y-4 relative">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-brand-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
                    Plus Populaire
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Intervention</h3>
                <p class="text-gray-500 text-sm mb-6">Réparation standard sur site</p>
                <div class="text-4xl font-bold text-brand-600 mb-6">
                    15 000 <span class="text-lg text-gray-500">FCFA</span>
                </div>
                <ul class="space-y-3 text-gray-600 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> 1h d'intervention</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Déplacement inclus</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Pièces non comprises</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Garantie 6 mois</li>
                </ul>
                <a href="#contact" class="block w-full py-3 text-center bg-brand-600 text-white rounded-full font-semibold hover:bg-brand-700 transition-all">
                    Choisir cette offre
                </a>
            </div>

            <!-- Premium -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-brand-700 hover:bg-white/20 transition-all">
                <h3 class="text-xl font-bold text-white mb-2">Entreprise</h3>
                <p class="text-brand-200 text-sm mb-6">Contrat de maintenance mensuel</p>
                <div class="text-4xl font-bold text-white mb-6">
                    Sur <span class="text-lg">devis</span>
                </div>
                <ul class="space-y-3 text-brand-100 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-brand-300"></i> Intervention illimitée</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-brand-300"></i> Maintenance préventive</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-brand-300"></i> Support prioritaire 24/7</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-brand-300"></i> Gestion parc informatique</li>
                </ul>
                <a href="#contact" class="block w-full py-3 text-center border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-brand-900 transition-all">
                    Demander un devis
                </a>
            </div>

        </div>
    </div>
</section>

<!-- ==================== FAQ ==================== -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm">FAQ</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">
                Questions Fréquentes
            </h2>
        </div>

        <!-- FAQ Items -->
        <div class="space-y-4" x-data="{ active: null }">
            
            <!-- Question 1 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <button @click="active = active === 1 ? null : 1" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="font-semibold text-gray-900">Quel est le délai d'intervention ?</span>
                    <i class="fas fa-chevron-down text-gray-400 transition-transform" :class="active === 1 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="active === 1" x-collapse class="px-6 pb-6 text-gray-600">
                    Nous intervenons généralement dans les 2 à 4 heures suivant votre appel sur Lomé. Pour les autres régions, nous organisons des tournées régulières ou du support à distance.
                </div>
            </div>

            <!-- Question 2 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <button @click="active = active === 2 ? null : 2" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="font-semibold text-gray-900">La récupération de données est-elle garantie ?</span>
                    <i class="fas fa-chevron-down text-gray-400 transition-transform" :class="active === 2 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="active === 2" x-collapse class="px-6 pb-6 text-gray-600">
                    Nous récupérons plus de 90% des données. Cependant, en cas de dommage physique sévère du disque, nous ne pouvons pas garantir 100% de récupération. Un diagnostic gratuit vous donnera une estimation réaliste.
                </div>
            </div>

            <!-- Question 3 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <button @click="active = active === 3 ? null : 3" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="font-semibold text-gray-900">Proposez-vous des contrats de maintenance ?</span>
                    <i class="fas fa-chevron-down text-gray-400 transition-transform" :class="active === 3 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="active === 3" x-collapse class="px-6 pb-6 text-gray-600">
                    Oui, nous proposons des contrats mensuels ou annuels pour les entreprises. Ils incluent maintenance préventive, support illimité et priorité d'intervention. Contactez-nous pour un devis personnalisé.
                </div>
            </div>

            <!-- Question 4 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <button @click="active = active === 4 ? null : 4" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="font-semibold text-gray-900">Quels modes de paiement acceptez-vous ?</span>
                    <i class="fas fa-chevron-down text-gray-400 transition-transform" :class="active === 4 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="active === 4" x-collapse class="px-6 pb-6 text-gray-600">
                    Nous acceptons espèces, virements bancaires, Mobile Money (Flooz, TMoney) et cartes bancaires. Un acompte de 50% est demandé pour les réparations importantes.
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==================== CTA FINAL ==================== -->
<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-brand-600 rounded-3xl p-8 md:p-12 text-center text-white shadow-2xl">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Besoin d'une Intervention Urgente ?
            </h2>
            <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">
                Notre équipe est disponible 24/7 pour résoudre vos problèmes informatiques. Contactez-nous maintenant !
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+22892671533" class="inline-flex items-center justify-center gap-2 bg-white text-brand-900 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition-all transform hover:scale-105">
                    <i class="fas fa-phone-alt"></i>
                    Appeler Maintenant
                </a>
                <a href="https://wa.me/22892671533" class="inline-flex items-center justify-center gap-2 border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white/10 transition-all" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection