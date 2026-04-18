<!-- resources/views/galerie.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie - Solutionneurs 228</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animations Lightbox */
        .lightbox-enter { animation: fadeIn 0.3s ease-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        .slide-enter { animation: slideIn 0.3s ease-out; }
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        /* Indicateurs de swipe */
        .swipe-indicator {
            position: absolute; top: 50%; transform: translateY(-50%);
            width: 60px; height: 60px; background: rgba(255,255,255,0.2);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            opacity: 0; transition: opacity 0.2s; pointer-events: none;
        }
        .swipe-indicator.show { opacity: 1; }
        .swipe-indicator.left { left: 20px; }
        .swipe-indicator.right { right: 20px; }
        
        /* Scroll lock */
        body.lightbox-open { overflow: hidden; }
        .lightbox-content { touch-action: pan-y pinch-zoom; }
        
        /* Hover effects galerie */
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        .gallery-item:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navigation (à adapter selon votre layout) -->
    <nav class="bg-white shadow-sm sticky top-0 z-40">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-gray-800">Solutionneurs 228</a>
            <div class="hidden md:flex space-x-6">
                <a href="/" class="text-gray-600 hover:text-gray-900">Accueil</a>
                <a href="/galerie" class="text-gray-900 font-semibold">Galerie</a>
                <a href="/services" class="text-gray-600 hover:text-gray-900">Services</a>
                <a href="/contact" class="text-gray-600 hover:text-gray-900">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Header de la page -->
    <header class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Notre Galerie</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Découvrez nos réalisations à travers shootings, productions vidéo, développement web et plus encore.
            </p>
        </div>
    </header>

    <!-- Filtres de catégories (optionnel) -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap justify-center gap-3 mb-8" id="filters">
            <button class="filter-btn active px-6 py-2 rounded-full bg-gray-900 text-white transition-all" data-filter="all">Tous</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 transition-all" data-filter="corporate">Corporate</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 transition-all" data-filter="video">Vidéo</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 transition-all" data-filter="web">Web</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 transition-all" data-filter="design">Design</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 transition-all" data-filter="event">Événements</button>
        </div>

        <!-- Grille de galerie Masonry-style -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4" id="gallery-grid">
            
            <!-- Photo 1 - Corporate -->
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer aspect-[4/3]" 
                 data-index="0" data-category="corporate"
                 data-src="{{ asset('images/shoot1.webp') }}" 
                 data-title="Shooting Corporate"
                 data-desc="Séance photo professionnelle pour entreprise">
                <img src="{{ asset('images/shoot1.webp') }}" alt="Shooting Corporate"
                     class="w-full h-full object-cover transition-transform duration-500">
                <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                    <span class="text-white font-semibold">Shooting Corporate</span>
                    <span class="text-white/70 text-sm">Photographie</span>
                </div>
            </div>

            <!-- Photo 2 - Vidéo (grande) -->
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer aspect-[4/3] md:col-span-2 md:row-span-2" 
                 data-index="1" data-category="video"
                 data-src="{{ asset('images/eric.webp') }}" 
                 data-title="Production Vidéo"
                 data-desc="Spot publicitaire Togo Émergent - Tournage professionnel">
                <img src="{{ asset('images/eric.webp') }}" alt="Production Vidéo"
                     class="w-full h-full object-cover transition-transform duration-500">
                <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-white font-semibold text-lg">Production Vidéo</span>
                    <span class="text-white/70">Spot publicitaire Togo Émergent</span>
                </div>
            </div>

            <!-- Photo 3 - Web -->
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer aspect-[4/3]" 
                 data-index="2" data-category="web"
                 data-src="{{ asset('images/gil0.webp') }}" 
                 data-title="Développement Web"
                 data-desc="Création de sites web modernes et responsives">
                <img src="{{ asset('images/gil0.webp') }}" alt="Développement Web"
                     class="w-full h-full object-cover transition-transform duration-500">
                <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                    <span class="text-white font-semibold">Développement Web</span>
                    <span class="text-white/70 text-sm">Digital</span>
                </div>
            </div>

            <!-- Photo 4 - Design -->
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer aspect-[4/3]" 
                 data-index="3" data-category="design"
                 data-src="{{ asset('images/mariage1.webp') }}" 
                 data-title="Design Graphique"
                 data-desc="Conception graphique et identité visuelle">
                <img src="{{ asset('images/mariage1.webp') }}" alt="Design Graphique"
                     class="w-full h-full object-cover transition-transform duration-500">
                <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                    <span class="text-white font-semibold">Design Graphique</span>
                    <span class="text-white/70 text-sm">Création</span>
                </div>
            </div>

            <!-- Photo 5 - Événement -->
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer aspect-[4/3]" 
                 data-index="4" data-category="event"
                 data-src="{{ asset('images/mariage2.webp') }}" 
                 data-title="Événement Corporate"
                 data-desc="Couverture photo d'événements professionnels">
                <img src="{{ asset('images/mariage2.webp') }}" alt="Événement"
                     class="w-full h-full object-cover transition-transform duration-500">
                <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                    <span class="text-white font-semibold">Événement</span>
                    <span class="text-white/70 text-sm">Couverture</span>
                </div>
            </div>

            <!-- Photo 6 - Équipe -->
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer aspect-[4/3]" 
                 data-index="5" data-category="corporate"
                 data-src="{{ asset('images/equipe0.webp') }}" 
                 data-title="Notre Équipe"
                 data-desc="Sessions de formation et transfert de compétences">
                <img src="{{ asset('images/equipe0.webp') }}" alt="Équipe"
                     class="w-full h-full object-cover transition-transform duration-500">
                <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                    <span class="text-white font-semibold">Notre Équipe</span>
                    <span class="text-white/70 text-sm">Formation</span>
                </div>
            </div>

            <!-- Photo 7 - Ajoutez plus d'images ici selon vos fichiers -->
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer aspect-[4/3]" 
                 data-index="6" data-category="video"
                 data-src="{{ asset('images/shoot1.webp') }}" 
                 data-title="Projet Vidéo 2"
                 data-desc="Description du projet vidéo">
                <img src="{{ asset('images/shoot1.webp') }}" alt="Projet Vidéo"
                     class="w-full h-full object-cover transition-transform duration-500">
                <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                    <span class="text-white font-semibold">Projet Vidéo</span>
                    <span class="text-white/70 text-sm">Production</span>
                </div>
            </div>

            <!-- Photo 8 -->
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer aspect-[4/3]" 
                 data-index="7" data-category="web"
                 data-src="{{ asset('images/gil0.webp') }}" 
                 data-title="Application Web"
                 data-desc="Développement d'applications sur mesure">
                <img src="{{ asset('images/gil0.webp') }}" alt="Application Web"
                     class="w-full h-full object-cover transition-transform duration-500">
                <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-4">
                    <span class="text-white font-semibold">Application Web</span>
                    <span class="text-white/70 text-sm">Développement</span>
                </div>
            </div>

        </div>
    </div>

    <!-- LIGHTBOX -->
    <div id="lightbox" class="fixed inset-0 z-50 hidden bg-black/95 backdrop-blur-sm">
        
        <!-- Bouton fermer -->
        <button id="close-btn" class="absolute top-4 right-4 z-50 p-3 text-white/80 hover:text-white hover:bg-white/10 rounded-full transition-all">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Compteur -->
        <div class="absolute top-4 left-4 z-50 px-4 py-2 bg-white/10 rounded-full text-white/80 text-sm font-medium">
            <span id="current-index">1</span> / <span id="total-count">8</span>
        </div>

        <!-- Indicateurs swipe -->
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

        <!-- Contenu -->
        <div class="lightbox-content absolute inset-0 flex flex-col items-center justify-center p-4 md:p-8">
            
            <div id="image-container" class="relative flex-1 w-full max-w-6xl flex items-center justify-center overflow-hidden">
                <img id="lightbox-img" src="" alt="" 
                     class="max-w-full max-h-[70vh] md:max-h-[75vh] object-contain rounded-lg shadow-2xl transition-transform duration-300">
            </div>

            <!-- Flèches desktop -->
            <button id="prev-btn" class="hidden md:flex absolute left-4 top-1/2 -translate-y-1/2 p-4 text-white/60 hover:text-white hover:bg-white/10 rounded-full transition-all z-40">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            
            <button id="next-btn" class="hidden md:flex absolute right-4 top-1/2 -translate-y-1/2 p-4 text-white/60 hover:text-white hover:bg-white/10 rounded-full transition-all z-40">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Barre d'infos en bas -->
            <div class="w-full max-w-4xl mt-6 p-6 bg-white/5 backdrop-blur-md rounded-2xl border border-white/10">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    
                    <div class="text-center md:text-left flex-1">
                        <h3 id="lightbox-title" class="text-2xl font-bold text-white mb-2"></h3>
                        <p id="lightbox-desc" class="text-white/70 text-lg"></p>
                    </div>

                    <div class="flex items-center gap-3">
                        <button id="prev-btn-mobile" class="md:hidden p-3 bg-white/10 hover:bg-white/20 rounded-full text-white transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        
                        <button id="next-btn-mobile" class="md:hidden p-3 bg-white/10 hover:bg-white/20 rounded-full text-white transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>

                        <div class="hidden md:block px-4 py-2 bg-white/10 rounded-lg text-white/60 text-sm">
                            ← → ou swipe
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer simple -->
    <footer class="bg-gray-900 text-white py-8 mt-16">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Solutionneurs 228. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        class GalleryLightbox {
            constructor() {
                this.currentIndex = 0;
                this.items = [];
                this.filteredItems = [];
                this.currentFilter = 'all';
                this.lightbox = document.getElementById('lightbox');
                this.img = document.getElementById('lightbox-img');
                this.title = document.getElementById('lightbox-title');
                this.desc = document.getElementById('lightbox-desc');
                this.currentEl = document.getElementById('current-index');
                this.totalEl = document.getElementById('total-count');
                
                this.touchStartX = 0;
                this.touchEndX = 0;
                this.swipeThreshold = 50;
                
                this.init();
            }

            init() {
                this.collectItems();
                this.initFilters();
                this.initEventListeners();
            }

            collectItems() {
                const galleryItems = document.querySelectorAll('.gallery-item');
                this.items = Array.from(galleryItems).map(item => ({
                    element: item,
                    src: item.dataset.src,
                    title: item.dataset.title,
                    desc: item.dataset.desc,
                    category: item.dataset.category
                }));
                this.filteredItems = [...this.items];
            }

            initFilters() {
                const filterBtns = document.querySelectorAll('.filter-btn');
                filterBtns.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        // Update active state
                        filterBtns.forEach(b => {
                            b.classList.remove('bg-gray-900', 'text-white');
                            b.classList.add('bg-gray-200', 'text-gray-700');
                        });
                        e.target.classList.remove('bg-gray-200', 'text-gray-700');
                        e.target.classList.add('bg-gray-900', 'text-white');
                        
                        // Filter logic
                        const filter = e.target.dataset.filter;
                        this.currentFilter = filter;
                        this.filterGallery(filter);
                    });
                });
            }

            filterGallery(category) {
                this.items.forEach((item, index) => {
                    if (category === 'all' || item.category === category) {
                        item.element.style.display = 'block';
                        // Réindexer les items visibles pour la lightbox
                        setTimeout(() => this.reindexVisibleItems(), 50);
                    } else {
                        item.element.style.display = 'none';
                    }
                });
            }

            reindexVisibleItems() {
                const visibleItems = document.querySelectorAll('.gallery-item[style*="block"]');
                this.filteredItems = Array.from(visibleItems).map((el, idx) => {
                    el.dataset.filteredIndex = idx;
                    return {
                        src: el.dataset.src,
                        title: el.dataset.title,
                        desc: el.dataset.desc
                    };
                });
            }

            initEventListeners() {
                // Clic sur images
                document.querySelectorAll('.gallery-item').forEach((item, index) => {
                    item.addEventListener('click', () => {
                        // Trouver l'index dans les items filtrés
                        const filteredIndex = parseInt(item.dataset.filteredIndex || 
                            Array.from(document.querySelectorAll('.gallery-item')).indexOf(item));
                        this.open(filteredIndex);
                    });
                });

                // Navigation
                document.getElementById('prev-btn').addEventListener('click', () => this.prev());
                document.getElementById('next-btn').addEventListener('click', () => this.next());
                document.getElementById('prev-btn-mobile').addEventListener('click', () => this.prev());
                document.getElementById('next-btn-mobile').addEventListener('click', () => this.next());
                
                // Fermer
                document.getElementById('close-btn').addEventListener('click', () => this.close());
                this.lightbox.addEventListener('click', (e) => {
                    if (e.target === this.lightbox) this.close();
                });

                // Clavier
                document.addEventListener('keydown', (e) => {
                    if (!this.lightbox.classList.contains('hidden')) {
                        if (e.key === 'Escape') this.close();
                        if (e.key === 'ArrowLeft') this.prev();
                        if (e.key === 'ArrowRight') this.next();
                    }
                });

                // Gestes tactiles
                const container = document.getElementById('image-container');
                container.addEventListener('touchstart', (e) => this.handleTouchStart(e), {passive: true});
                container.addEventListener('touchmove', (e) => this.handleTouchMove(e), {passive: true});
                container.addEventListener('touchend', (e) => this.handleTouchEnd(e), {passive: true});
            }

            open(index) {
                this.currentIndex = index;
                document.body.classList.add('lightbox-open');
                this.lightbox.classList.remove('hidden');
                this.lightbox.classList.add('lightbox-enter');
                this.updateContent();
            }

            close() {
                this.lightbox.classList.add('hidden');
                this.lightbox.classList.remove('lightbox-enter');
                document.body.classList.remove('lightbox-open');
            }

            updateContent() {
                const item = this.filteredItems[this.currentIndex] || this.items[this.currentIndex];
                if (!item) return;
                
                this.img.classList.add('opacity-0');
                
                setTimeout(() => {
                    this.img.src = item.src;
                    this.title.textContent = item.title;
                    this.desc.textContent = item.desc;
                    this.currentEl.textContent = this.currentIndex + 1;
                    this.totalEl.textContent = this.filteredItems.length || this.items.length;
                    this.img.classList.remove('opacity-0');
                    this.img.classList.add('slide-enter');
                }, 150);
            }

            next() {
                const max = this.filteredItems.length || this.items.length;
                this.currentIndex = (this.currentIndex + 1) % max;
                this.updateContent();
                this.showSwipeIndicator('right');
            }

            prev() {
                const max = this.filteredItems.length || this.items.length;
                this.currentIndex = (this.currentIndex - 1 + max) % max;
                this.updateContent();
                this.showSwipeIndicator('left');
            }

            handleTouchStart(e) {
                this.touchStartX = e.changedTouches[0].screenX;
            }

            handleTouchMove(e) {
                const currentX = e.changedTouches[0].screenX;
                const diff = this.touchStartX - currentX;
                const maxOffset = window.innerWidth * 0.3;
                const offset = Math.max(-maxOffset, Math.min(maxOffset, -diff * 0.5));
                this.img.style.transform = `translateX(${-offset}px)`;
            }

            handleTouchEnd(e) {
                this.touchEndX = e.changedTouches[0].screenX;
                this.handleSwipe();
                this.img.style.transform = '';
            }

            handleSwipe() {
                const diff = this.touchStartX - this.touchEndX;
                if (Math.abs(diff) > this.swipeThreshold) {
                    if (diff > 0) {
                        this.next();
                    } else {
                        this.prev();
                    }
                }
            }

            showSwipeIndicator(direction) {
                const indicator = document.getElementById(`swipe-${direction}-indicator`);
                indicator.classList.add('show');
                setTimeout(() => indicator.classList.remove('show'), 300);
            }
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', () => {
            new GalleryLightbox();
        });
    </script>
</body>
</html>