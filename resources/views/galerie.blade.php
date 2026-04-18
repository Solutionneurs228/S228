@extends('layouts.base')
@section('title', 'S228 Galérie')



@section('content')

    <!-- ==================== GALLERY SECTION ==================== -->
    <section id="gallery" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center mb-12">
                <span class="text-brand-600 font-semibold tracking-wider uppercase text-sm mb-2 block">Portfolio</span>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                    Nos <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800">Réalisations</span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Découvrez nos projets récents dans les domaines de l'IT, du web, du design et de la production audiovisuelle.
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-3 mb-12" id="gallery-filters">
                <button class="filter-btn active px-6 py-2.5 rounded-full border-2 border-brand-600 text-brand-600 font-semibold hover:bg-brand-600 hover:text-white transition-all duration-300" data-filter="all">
                    Tous les Projets
                </button>
                <button class="filter-btn px-6 py-2.5 rounded-full border-2 border-gray-300 text-gray-600 font-semibold hover:border-brand-600 hover:text-brand-600 transition-all duration-300" data-filter="it">
                    <i class="fas fa-tools mr-2"></i>IT & Maintenance
                </button>
                <button class="filter-btn px-6 py-2.5 rounded-full border-2 border-gray-300 text-gray-600 font-semibold hover:border-brand-600 hover:text-brand-600 transition-all duration-300" data-filter="web">
                    <i class="fas fa-code mr-2"></i>Développement Web
                </button>
                <button class="filter-btn px-6 py-2.5 rounded-full border-2 border-gray-300 text-gray-600 font-semibold hover:border-brand-600 hover:text-brand-600 transition-all duration-300" data-filter="design">
                    <i class="fas fa-palette mr-2"></i>Design Graphique
                </button>
                <button class="filter-btn px-6 py-2.5 rounded-full border-2 border-gray-300 text-gray-600 font-semibold hover:border-brand-600 hover:text-brand-600 transition-all duration-300" data-filter="media">
                    <i class="fas fa-camera mr-2"></i>Photo & Vidéo
                </button>
            </div>

            <!-- Gallery Grid -->
            <div class="masonry-grid" id="gallery-grid">

                <!-- Gallery Item 1: IT Maintenance -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" data-category="it" onclick="openLightbox(0)">
                    <div class="aspect-[4/3] overflow-hidden bg-gray-200">
                        <img src="{{ asset('images/perle.webp') }}"
                             alt="Maintenance Serveur"
                             class="gallery-image w-full h-full object-cover">
                    </div>
                    <div class="gallery-overlay absolute inset-0 flex flex-col justify-end p-6 text-white">
                        <span class="category-badge inline-block px-3 py-1 bg-brand-500/80 rounded-full text-xs font-semibold mb-2 w-fit backdrop-blur-sm">
                            IT & Maintenance
                        </span>
                        <h3 class="text-xl font-bold mb-1">Infrastructure Serveur</h3>
                        <p class="text-sm text-gray-200 mb-3">Mise en place et maintenance de serveurs d'entreprise</p>
                        <div class="flex items-center text-sm font-semibold">
                            <span>Voir le projet</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2: Web Development -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" data-category="web" onclick="openLightbox(1)">
                    <div class="aspect-[3/4] overflow-hidden bg-gray-200">
                        <img src="{{ asset('images/mariage0.webp') }}"
                             alt="Site E-commerce"
                             class="gallery-image w-full h-full object-cover">
                    </div>
                    <div class="gallery-overlay absolute inset-0 flex flex-col justify-end p-6 text-white">
                        <span class="category-badge inline-block px-3 py-1 bg-brand-500/80 rounded-full text-xs font-semibold mb-2 w-fit backdrop-blur-sm">
                            Développement Web
                        </span>
                        <h3 class="text-xl font-bold mb-1">Plateforme E-commerce</h3>
                        <p class="text-sm text-gray-200 mb-3">Site de vente en ligne avec paiement mobile</p>
                        <div class="flex items-center text-sm font-semibold">
                            <span>Voir le projet</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3: Graphic Design -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" data-category="design" onclick="openLightbox(2)">
                    <div class="aspect-square overflow-hidden bg-gray-200">
                        <img src="{{ asset('images/mariage6.webp') }}"
                             alt="Charte Graphique"
                             class="gallery-image w-full h-full object-cover">
                    </div>
                    <div class="gallery-overlay absolute inset-0 flex flex-col justify-end p-6 text-white">
                        <span class="category-badge inline-block px-3 py-1 bg-brand-500/80 rounded-full text-xs font-semibold mb-2 w-fit backdrop-blur-sm">
                            Design Graphique
                        </span>
                        <h3 class="text-xl font-bold mb-1">Identité Visuelle</h3>
                        <p class="text-sm text-gray-200 mb-3">Création de logo et charte graphique complète</p>
                        <div class="flex items-center text-sm font-semibold">
                            <span>Voir le projet</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4: Photography -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" data-category="media" onclick="openLightbox(3)">
                    <div class="aspect-[4/5] overflow-hidden bg-gray-200">
                        <img src="{{ asset('images/mariage1.webp') }}"
                             alt="Shooting Corporate"
                             class="gallery-image w-full h-full object-cover">
                    </div>
                    <div class="gallery-overlay absolute inset-0 flex flex-col justify-end p-6 text-white">
                        <span class="category-badge inline-block px-3 py-1 bg-brand-500/80 rounded-full text-xs font-semibold mb-2 w-fit backdrop-blur-sm">
                            Photographie
                        </span>
                        <h3 class="text-xl font-bold mb-1">Shooting Corporate</h3>
                        <p class="text-sm text-gray-200 mb-3">Séance photo professionnelle pour équipe dirigeante</p>
                        <div class="flex items-center text-sm font-semibold">
                            <span>Voir le projet</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5: Video Production -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" data-category="media" onclick="openLightbox(4)">
                    <div class="aspect-video overflow-hidden bg-gray-200">
                        <img src="{{ asset('images/mariage2.webp') }}"
                             alt="Production Vidéo"
                             class="gallery-image w-full h-full object-cover">
                    </div>
                    <div class="gallery-overlay absolute inset-0 flex flex-col justify-end p-6 text-white">
                        <span class="category-badge inline-block px-3 py-1 bg-brand-500/80 rounded-full text-xs font-semibold mb-2 w-fit backdrop-blur-sm">
                            Vidéo
                        </span>
                        <h3 class="text-xl font-bold mb-1">Clip Promotionnel</h3>
                        <p class="text-sm text-gray-200 mb-3">Vidéo de présentation d'entreprise 4K</p>
                        <div class="flex items-center text-sm font-semibold">
                            <span>Voir le projet</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6: IT Support -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" data-category="it" onclick="openLightbox(5)">
                    <div class="aspect-[4/3] overflow-hidden bg-gray-200">
                        <img src="{{ asset('images/mariage7.webp') }}"
                             alt="Support Technique"
                             class="gallery-image w-full h-full object-cover">
                    </div>
                    <div class="gallery-overlay absolute inset-0 flex flex-col justify-end p-6 text-white">
                        <span class="category-badge inline-block px-3 py-1 bg-brand-500/80 rounded-full text-xs font-semibold mb-2 w-fit backdrop-blur-sm">
                            IT & Maintenance
                        </span>
                        <h3 class="text-xl font-bold mb-1">Support Technique</h3>
                        <p class="text-sm text-gray-200 mb-3">Intervention sur site et maintenance préventive</p>
                        <div class="flex items-center text-sm font-semibold">
                            <span>Voir le projet</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 7: Web App -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" data-category="web" onclick="openLightbox(6)">
                    <div class="aspect-[3/4] overflow-hidden bg-gray-200">
                        <img src="{{ asset('images/mariage8.webp') }}"
                             alt="Application Web"
                             class="gallery-image w-full h-full object-cover">
                    </div>
                    <div class="gallery-overlay absolute inset-0 flex flex-col justify-end p-6 text-white">
                        <span class="category-badge inline-block px-3 py-1 bg-brand-500/80 rounded-full text-xs font-semibold mb-2 w-fit backdrop-blur-sm">
                            Développement Web
                        </span>
                        <h3 class="text-xl font-bold mb-1">Application de Gestion</h3>
                        <p class="text-sm text-gray-200 mb-3">ERP sur mesure pour PME togolaise</p>
                        <div class="flex items-center text-sm font-semibold">
                            <span>Voir le projet</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 8: Branding -->
                <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" data-category="design" onclick="openLightbox(7)">
                    <div class="aspect-square overflow-hidden bg-gray-200">
                        <img src="{{ asset('images/sport0.webp') }}"
                             alt="Branding"
                             class="gallery-image w-full h-full object-cover">
                    </div>
                    <div class="gallery-overlay absolute inset-0 flex flex-col justify-end p-6 text-white">
                        <span class="category-badge inline-block px-3 py-1 bg-brand-500/80 rounded-full text-xs font-semibold mb-2 w-fit backdrop-blur-sm">
                            Design Graphique
                        </span>
                        <h3 class="text-xl font-bold mb-1">Packaging Design</h3>
                        <p class="text-sm text-gray-200 mb-3">Conception packaging produit alimentaire</p>
                        <div class="flex items-center text-sm font-semibold">
                            <span>Voir le projet</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

            </div>

            <!-- View All Button -->
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center gap-2 bg-brand-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-brand-700 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Voir Tous les Projets
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== LIGHTBOX MODAL ==================== -->
    <div id="lightbox" class="lightbox fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/95 backdrop-blur-sm">

        <!-- Close Button -->
        <button onclick="closeLightbox()" class="absolute top-4 right-4 text-white/70 hover:text-white text-4xl z-50 w-12 h-12 flex items-center justify-center rounded-full hover:bg-white/10 transition-all">
            <i class="fas fa-times"></i>
        </button>

        <!-- Navigation Buttons -->
        <button onclick="changeImage(-1)" class="absolute left-4 top-1/2 -translate-y-1/2 text-white/70 hover:text-white text-3xl w-12 h-12 flex items-center justify-center rounded-full hover:bg-white/10 transition-all z-50 hidden md:flex">
            <i class="fas fa-chevron-left"></i>
        </button>

        <button onclick="changeImage(1)" class="absolute right-4 top-1/2 -translate-y-1/2 text-white/70 hover:text-white text-3xl w-12 h-12 flex items-center justify-center rounded-full hover:bg-white/10 transition-all z-50 hidden md:flex">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Lightbox Content -->
        <div class="lightbox-content max-w-6xl w-full max-h-[90vh] flex flex-col md:flex-row bg-white rounded-2xl overflow-hidden shadow-2xl">

            <!-- Image Container -->
            <div class="relative w-full md:w-2/3 bg-gray-900 flex items-center justify-center overflow-hidden">
                <img id="lightbox-img" src="" alt="" class="max-h-[50vh] md:max-h-[80vh] w-full object-contain">

                <!-- Mobile Navigation -->
                <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 flex justify-between px-4 md:hidden">
                    <button onclick="changeImage(-1)" class="text-white/70 hover:text-white text-2xl w-10 h-10 flex items-center justify-center rounded-full bg-black/30">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button onclick="changeImage(1)" class="text-white/70 hover:text-white text-2xl w-10 h-10 flex items-center justify-center rounded-full bg-black/30">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Info Panel -->
            <div class="w-full md:w-1/3 p-6 md:p-8 flex flex-col bg-white">
                <div class="mb-auto">
                    <span id="lightbox-category" class="inline-block px-3 py-1 bg-brand-100 text-brand-700 rounded-full text-xs font-bold uppercase tracking-wider mb-3">
                        Category
                    </span>
                    <h3 id="lightbox-title" class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Project Title</h3>
                    <p id="lightbox-description" class="text-gray-600 leading-relaxed mb-6">
                        Project description goes here.
                    </p>

                    <!-- Project Details -->
                    <div class="space-y-3 border-t border-gray-100 pt-4">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Client:</span>
                            <span id="lightbox-client" class="font-semibold text-gray-900">Client Name</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Date:</span>
                            <span id="lightbox-date" class="font-semibold text-gray-900">2024</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Technologies:</span>
                            <span id="lightbox-tech" class="font-semibold text-gray-900">Tech Stack</span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-6 space-y-3">
                    <button class="w-full bg-brand-600 text-white py-3 rounded-lg font-semibold hover:bg-brand-700 transition-colors flex items-center justify-center gap-2">
                        <i class="fas fa-external-link-alt"></i>
                        Voir le Projet en Direct
                    </button>
                    <button onclick="closeLightbox()" class="w-full border-2 border-gray-300 text-gray-700 py-3 rounded-lg font-semibold hover:border-gray-400 transition-colors">
                        Fermer
                    </button>
                </div>

                <!-- Image Counter -->
                <div class="mt-4 text-center text-sm text-gray-400">
                    <span id="current-index">1</span> / <span id="total-count">8</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== JAVASCRIPT ==================== -->
    <script>
        // Gallery Data
        const galleryData = [
            {
                src: "https://images.unsplash.com/photo-1581092921461-eab62e97a782?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
                category: "IT & Maintenance",
                title: "Infrastructure Serveur",
                description: "Mise en place complète d'une infrastructure serveur haute disponibilité pour une entreprise de taille moyenne. Configuration des sauvegardes automatiques et sécurisation du réseau.",
                client: "AfriTech Solutions",
                date: "Janvier 2024",
                tech: "Windows Server, VMware, Veeam"
            },
            {
                src: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
                category: "Développement Web",
                title: "Plateforme E-commerce",
                description: "Développement d'une plateforme e-commerce complète avec intégration de paiement mobile (Flooz, TMoney) et tableau de bord administrateur avancé.",
                client: "Élégance Mode",
                date: "Mars 2024",
                tech: "Laravel, Vue.js, MySQL, Stripe"
            },
            {
                src: "https://images.unsplash.com/photo-1626785774573-4b799315345d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
                category: "Design Graphique",
                title: "Identité Visuelle",
                description: "Création complète de l'identité visuelle incluant le logo, la charte graphique, les cartes de visite et les templates de documents officiels.",
                client: "Green Energy Togo",
                date: "Février 2024",
                tech: "Adobe Illustrator, Photoshop, InDesign"
            },
            {
                src: "https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
                category: "Photographie",
                title: "Shooting Corporate",
                description: "Séance photo professionnelle en studio et en extérieur pour l'équipe dirigeante. Retouche avancée et livraison en haute résolution pour supports print et web.",
                client: "Banque Atlantique",
                date: "Décembre 2023",
                tech: "Sony A7III, Lightroom, Photoshop"
            },
            {
                src: "https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
                category: "Vidéo",
                title: "Clip Promotionnel",
                description: "Production d'une vidéo institutionnelle 4K présentant les services et valeurs de l'entreprise. Tournage multi-sites avec drone et stabilisateur.",
                client: "Logistics Africa",
                date: "Novembre 2023",
                tech: "Premiere Pro, After Effects, DJI Ronin"
            },
            {
                src: "https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
                category: "IT & Maintenance",
                title: "Support Technique",
                description: "Contrat de maintenance préventive et curative pour un parc de 50 postes de travail. Intervention rapide garantie sous 4h en cas de panne critique.",
                client: "Ministère de l'Économie",
                date: "Octobre 2023",
                tech: "GLPI, TeamViewer, OCS Inventory"
            },
            {
                src: "https://images.unsplash.com/photo-1555421689-491a97ff2040?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
                category: "Développement Web",
                title: "Application de Gestion",
                description: "ERP web personnalisé pour la gestion des stocks, ventes et ressources humaines. Tableaux de bord analytiques et exports automatisés.",
                client: "Distrib Togo",
                date: "Septembre 2023",
                tech: "PHP, Laravel, PostgreSQL, Chart.js"
            },
            {
                src: "https://images.unsplash.com/photo-1600607686527-6fb886090705?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
                category: "Design Graphique",
                title: "Packaging Design",
                description: "Conception de packaging premium pour une ligne de produits alimentaires locaux. Études de marché et prototypes 3D avant production.",
                client: "Saveurs du Terroir",
                date: "Août 2023",
                tech: "Illustrator, Blender, Packaging"
            }
        ];

        let currentImageIndex = 0;
        let filteredData = [...galleryData];
        let currentFilter = 'all';

        // Filter Functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Get filter value
                const filter = button.getAttribute('data-filter');
                currentFilter = filter;

                // Filter items with animation
                galleryItems.forEach((item, index) => {
                    const category = item.getAttribute('data-category');

                    if (filter === 'all' || category === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, index * 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });

                // Update filtered data array for lightbox navigation
                updateFilteredData();
            });
        });

        function updateFilteredData() {
            if (currentFilter === 'all') {
                filteredData = [...galleryData];
            } else {
                const categoryMap = {
                    'it': 'IT & Maintenance',
                    'web': 'Développement Web',
                    'design': 'Design Graphique',
                    'media': ['Photographie', 'Vidéo']
                };

                filteredData = galleryData.filter(item => {
                    if (currentFilter === 'media') {
                        return categoryMap['media'].includes(item.category);
                    }
                    return item.category === categoryMap[currentFilter];
                });
            }
        }

        // Lightbox Functions
        function openLightbox(index) {
            // Find the actual index in filtered data
            const item = galleryData[index];
            currentImageIndex = filteredData.findIndex(data => data.title === item.title);
            if (currentImageIndex === -1) currentImageIndex = 0;

            updateLightboxContent();
            document.getElementById('lightbox').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('active');
            document.body.style.overflow = '';
        }

        function updateLightboxContent() {
            const data = filteredData[currentImageIndex];

            document.getElementById('lightbox-img').src = data.src;
            document.getElementById('lightbox-category').textContent = data.category;
            document.getElementById('lightbox-title').textContent = data.title;
            document.getElementById('lightbox-description').textContent = data.description;
            document.getElementById('lightbox-client').textContent = data.client;
            document.getElementById('lightbox-date').textContent = data.date;
            document.getElementById('lightbox-tech').textContent = data.tech;
            document.getElementById('current-index').textContent = currentImageIndex + 1;
            document.getElementById('total-count').textContent = filteredData.length;
        }

        function changeImage(direction) {
            currentImageIndex += direction;

            if (currentImageIndex >= filteredData.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = filteredData.length - 1;
            }

            // Add fade effect
            const img = document.getElementById('lightbox-img');
            img.style.opacity = '0';

            setTimeout(() => {
                updateLightboxContent();
                img.style.opacity = '1';
            }, 200);
        }

        // Keyboard Navigation
        document.addEventListener('keydown', (e) => {
            if (!document.getElementById('lightbox').classList.contains('active')) return;

            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') changeImage(-1);
            if (e.key === 'ArrowRight') changeImage(1);
        });

        // Close lightbox when clicking outside
        document.getElementById('lightbox').addEventListener('click', (e) => {
            if (e.target === e.currentTarget) {
                closeLightbox();
            }
        });

        // Initialize filtered data
        updateFilteredData();

        // Add smooth transition to lightbox image
        document.getElementById('lightbox-img').style.transition = 'opacity 0.2s ease-in-out';

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe gallery items
        galleryItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
            observer.observe(item);
        });
    </script>

    @endsection
