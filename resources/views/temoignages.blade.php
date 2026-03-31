@extends('layouts.base')

@section('title', 'témoignages - Avis de nos clients | Solutionneurs228')
@section('meta_description', 'Découvrez les témoignages de nos clients satisfaits. Des avis authentiques sur nos services, assistances et formations. Rejoignez la communauté de clients heureux de Solutionneurs228 !')

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/formation.css') }}"> --}}
    @vite(['resources/css/temoignages.css'])
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Témoignages <span class="text-brand-600">Clients</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8">
                Découvrez ce que nos clients disent de notre collaboration
            </p>
            <div class="flex items-center justify-center gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-brand-600">150+</div>
                    <div class="text-sm text-gray-500">Témoignages</div>
                </div>
                <div class="h-12 w-px bg-gray-300"></div>
                <div>
                    <div class="text-3xl font-bold text-brand-600">4.8/5</div>
                    <div class="text-sm text-gray-500">Note moyenne</div>
                </div>
                <div class="h-12 w-px bg-gray-300"></div>
                <div>
                    <div class="text-3xl font-bold text-brand-600">98%</div>
                    <div class="text-sm text-gray-500">Clients satisfaits</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filtres -->
    <section class="py-8 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-4 justify-center">
                <button class="filter-btn active px-6 py-2 rounded-full bg-brand-600 text-white font-medium transition-all" data-filter="all">
                    Tous
                </button>
                <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-all" data-filter="video">
                    🎥 Vidéo
                </button>
                <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-all" data-filter="text">
                    📝 Écrit
                </button>
                <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-all" data-filter="5stars">
                    ⭐ 5 étoiles
                </button>
            </div>
        </div>
    </section>

    <!-- Grille Témoignages (Tous) -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="all-testimonials">
                
                <!-- Témoignage 1 -->
                <div class="testimonial-card bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100" data-type="text" data-rating="5">
                    <div class="flex text-brand-500 mb-4">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic leading-relaxed">"Sinon le travail a été propre."<br/><span class="text-sm text-gray-400 mt-2 block">(contexte : livraison d'une vidéo d'inauguration et caravane en moins de 24h)</span></p>
                    <div class="flex items-center gap-4">
                        <img src="https://ui-avatars.com/api/?name=Gafarou+A&background=random" alt="GA" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-bold text-gray-900">Gafarou A.</h4>
                            <p class="text-sm text-gray-500">Chargé de Mission / Poste Togo</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100 text-xs text-gray-400">
                        Publié le 15 Mars 2024 • Service: Vidéo
                    </div>
                </div>

                <!-- Témoignage 2 -->
                <div class="testimonial-card bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100" data-type="text" data-rating="5">
                    <div class="flex text-brand-500 mb-4">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic leading-relaxed">"Depuis votre assistance, nous avons constaté une nette amélioration de la performance de nos agents et même les clients en témoignent."</p>
                    <div class="flex items-center gap-4">
                        <img src="https://ui-avatars.com/api/?name=Esther+B&background=random" alt="EB" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-bold text-gray-900">Esther B.</h4>
                            <p class="text-sm text-gray-500">DG microfinance / Kara</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100 text-xs text-gray-400">
                        Publié le 10 Mars 2024 • Service: Conseil
                    </div>
                </div>

                <!-- Témoignage 3 -->
                <div class="testimonial-card bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100" data-type="text" data-rating="4">
                    <div class="flex text-brand-500 mb-4">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic leading-relaxed">"Les photos et vidéos de notre mariage étaient incroyables ! Nous n'avons absolument pas eu tort de compter sur vous. Félicitations à toute l'équipe !"</p>
                    <div class="flex items-center gap-4">
                        <img src="https://ui-avatars.com/api/?name=Serges+K&background=random" alt="SK" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-bold text-gray-900">Serges K.</h4>
                            <p class="text-sm text-gray-500">Journaliste / Dapaong</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100 text-xs text-gray-400">
                        Publié le 5 Mars 2024 • Service: Événementiel
                    </div>
                </div>

                <!-- Témoignage Vidéo (Exemple) -->
                <div class="testimonial-card bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 md:col-span-2 lg:col-span-1" data-type="video" data-rating="5">
                    <div class="relative mb-4 rounded-xl overflow-hidden bg-gray-900 aspect-video group cursor-pointer">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-play text-white text-2xl ml-1"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">2:34</div>
                    </div>
                    <div class="flex text-brand-500 mb-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm italic">"Une équipe professionnelle et à l'écoute..."</p>
                    <div class="flex items-center gap-4">
                        <img src="https://ui-avatars.com/api/?name=Marie+L&background=random" alt="ML" class="w-10 h-10 rounded-full">
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm">Marie L.</h4>
                            <p class="text-xs text-gray-500">Directrice / Lomé</p>
                        </div>
                    </div>
                </div>

                <!-- Plus de témoignages... -->
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center gap-2">
                <button class="w-10 h-10 rounded-full bg-brand-600 text-white font-medium">1</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300">2</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300">3</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Section Formulaire -->
    <section class="py-20 bg-brand-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Partagez votre expérience</h2>
                    <p class="text-gray-600">Votre témoignage nous aide à nous améliorer et aide d'autres clients à nous faire confiance</p>
                </div>

                <form id="testimonial-form" class="space-y-6">
                    <!-- Note -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Votre note *</label>
                        <div class="flex gap-2" id="star-rating">
                            <button type="button" class="star-btn text-3xl text-gray-300 hover:text-brand-500 transition-colors" data-value="1">★</button>
                            <button type="button" class="star-btn text-3xl text-gray-300 hover:text-brand-500 transition-colors" data-value="2">★</button>
                            <button type="button" class="star-btn text-3xl text-gray-300 hover:text-brand-500 transition-colors" data-value="3">★</button>
                            <button type="button" class="star-btn text-3xl text-gray-300 hover:text-brand-500 transition-colors" data-value="4">★</button>
                            <button type="button" class="star-btn text-3xl text-gray-300 hover:text-brand-500 transition-colors" data-value="5">★</button>
                        </div>
                        <input type="hidden" name="rating" id="rating-input" required>
                        <p class="text-red-500 text-sm mt-1 hidden" id="rating-error">Veuillez sélectionner une note</p>
                    </div>

                    <!-- Type de témoignage -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Type de témoignage *</label>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="type" value="text" checked class="text-brand-600 focus:ring-brand-500">
                                <span>Texte</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="type" value="video" class="text-brand-600 focus:ring-brand-500">
                                <span>Vidéo (lien YouTube/Vimeo)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Nom -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet *</label>
                        <input type="text" id="name" name="name" required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all"
                            placeholder="Jean Dupont">
                    </div>

                    <!-- Entreprise/Poste -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Entreprise / Organisation</label>
                            <input type="text" id="company" name="company" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all"
                                placeholder="Nom de l'entreprise">
                        </div>
                        <div>
                            <label for="position" class="block text-sm font-medium text-gray-700 mb-1">Poste / Fonction</label>
                            <input type="text" id="position" name="position" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all"
                                placeholder="Directeur Marketing">
                        </div>
                    </div>

                    <!-- Service utilisé -->
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service utilisé *</label>
                        <select id="service" name="service" required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                            <option value="">Sélectionnez un service</option>
                            <option value="video">Production Vidéo</option>
                            <option value="photo">Photographie</option>
                            <option value="conseil">Conseil & Stratégie</option>
                            <option value="event">Événementiel</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <!-- Témoignage écrit -->
                    <div id="text-testimonial">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Votre témoignage *</label>
                        <textarea id="message" name="message" rows="5" required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all resize-none"
                            placeholder="Décrivez votre expérience avec nous... Qu'avez-vous apprécié ? Quels résultats avez-vous obtenus ?"></textarea>
                        <div class="text-right text-sm text-gray-400 mt-1">
                            <span id="char-count">0</span>/500 caractères
                        </div>
                    </div>

                    <!-- Lien vidéo (caché par défaut) -->
                    <div id="video-testimonial" class="hidden">
                        <label for="video_url" class="block text-sm font-medium text-gray-700 mb-1">Lien de la vidéo (YouTube, Vimeo, etc.)</label>
                        <input type="url" id="video_url" name="video_url" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all"
                            placeholder="https://youtube.com/watch?v=...">
                    </div>

                    <!-- Photo (optionnel) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Photo (optionnel)</label>
                        <div class="flex items-center gap-4">
                            <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center overflow-hidden" id="photo-preview">
                                <i class="fas fa-user text-gray-400 text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <input type="file" id="photo" name="photo" accept="image/*" class="hidden">
                                <label for="photo" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                                    <i class="fas fa-camera mr-2"></i>
                                    Choisir une photo
                                </label>
                                <p class="text-sm text-gray-500 mt-1">JPG, PNG. Max 2MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Consentement -->
                    <div class="flex items-start gap-3">
                        <input type="checkbox" id="consent" name="consent" required 
                            class="mt-1 w-4 h-4 text-brand-600 rounded border-gray-300 focus:ring-brand-500">
                        <label for="consent" class="text-sm text-gray-600">
                            J'autorise [Votre Entreprise] à publier mon témoignage sur son site web et ses réseaux sociaux. 
                            J'ai lu et j'accepte la <a href="/politique-confidentialite" class="text-brand-600 hover:underline">politique de confidentialité</a>. *
                        </label>
                    </div>

                    <!-- Bouton Submit -->
                    <button type="submit" id="submit-btn" 
                        class="w-full py-4 bg-brand-600 text-white font-bold rounded-lg hover:bg-brand-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed">
                        <span class="btn-text">Envoyer mon témoignage</span>
                        <span class="btn-loading hidden">
                            <i class="fas fa-spinner fa-spin mr-2"></i>Envoi en cours...
                        </span>
                    </button>

                    <p class="text-center text-sm text-gray-500">
                        * Votre témoignage sera examiné par notre équipe avant publication (délai: 24-48h)
                    </p>
                </form>

                <!-- Message de succès (caché par défaut) -->
                <div id="success-message" class="hidden text-center py-12">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Merci pour votre témoignage !</h3>
                    <p class="text-gray-600 mb-6">Nous l'avons bien reçu. Notre équipe l'examinera et le publiera sous 24 à 48 heures.</p>
                    <button onclick="resetForm()" class="px-6 py-3 bg-brand-600 text-white rounded-lg hover:bg-brand-700 transition-colors">
                        Soumettre un autre témoignage
                    </button>
                </div>
            </div>
        </div>
    </section>

    
    @endsection

@push('scripts')
    {{-- <script src="{{ asset('js/formation.js') }}"></script> --}}
    @vite(['resources/js/temoignages.js'])
@endpush

