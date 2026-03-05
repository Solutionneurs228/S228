
    @section('slide')
    <!-- ==================== HERO SECTION WITH SLIDER ==================== -->
    <section id="home" class="relative h-screen min-h-[600px] overflow-hidden bg-gray-900">
        
        <!-- Slider Container -->
        <div id="hero-slider" class="relative w-full h-full">
            
            <!-- Slide 1: IT Support -->
            <div class="slide active" style="background: linear-gradient(rgba(30, 58, 138, 0.8), rgba(30, 58, 138, 0.9)), url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
                <div class="absolute inset-0 flex items-center justify-center px-4">
                    <div class="text-center text-white max-w-4xl mx-auto animate-slide-up">
                        <div class="inline-block px-4 py-1 bg-brand-500/30 rounded-full text-sm font-semibold mb-6 border border-brand-400/30 backdrop-blur-sm">
                            <i class="fas fa-headset mr-2"></i>Support Technique 24/7
                        </div>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                            Solutions IT <span class="text-brand-300">Professionnelles</span>
                        </h1>
                        <p class="text-lg md:text-2xl text-gray-200 mb-8 max-w-2xl mx-auto font-light">
                            Maintenance informatique, support à distance et formation pour optimiser votre infrastructure technologique.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="#services" class="bg-white text-brand-900 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition-all transform hover:scale-105 shadow-xl">
                                Découvrir nos Services
                            </a>
                            <a href="#contact" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all">
                                Nous Contacter
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Web Development -->
            <div class="slide" style="background: linear-gradient(rgba(30, 58, 138, 0.85), rgba(30, 58, 138, 0.9)), url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
                <div class="absolute inset-0 flex items-center justify-center px-4">
                    <div class="text-center text-white max-w-4xl mx-auto">
                        <div class="inline-block px-4 py-1 bg-brand-500/30 rounded-full text-sm font-semibold mb-6 border border-brand-400/30 backdrop-blur-sm">
                            <i class="fas fa-code mr-2"></i>Expertise Digitale
                        </div>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                            Création Web & <span class="text-brand-300">Design</span>
                        </h1>
                        <p class="text-lg md:text-2xl text-gray-200 mb-8 max-w-2xl mx-auto font-light">
                            Sites web modernes, applications sur mesure et identité visuelle pour propulser votre marque.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="#services" class="bg-white text-brand-900 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition-all transform hover:scale-105 shadow-xl">
                                Voir nos Réalisations
                            </a>
                            <a href="#contact" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all">
                                Demander un Devis
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Photography -->
            <div class="slide" style="background: linear-gradient(rgba(30, 58, 138, 0.85), rgba(30, 58, 138, 0.9)), url('https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
                <div class="absolute inset-0 flex items-center justify-center px-4">
                    <div class="text-center text-white max-w-4xl mx-auto">
                        <div class="inline-block px-4 py-1 bg-brand-500/30 rounded-full text-sm font-semibold mb-6 border border-brand-400/30 backdrop-blur-sm">
                            <i class="fas fa-camera mr-2"></i>Production Audiovisuelle
                        </div>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                            Photo & Vidéo <span class="text-brand-300">Professionnelles</span>
                        </h1>
                        <p class="text-lg md:text-2xl text-gray-200 mb-8 max-w-2xl mx-auto font-light">
                            Couverture événementielle, shooting corporate et montage vidéo pour immortaliser vos moments clés.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="#services" class="bg-white text-brand-900 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition-all transform hover:scale-105 shadow-xl">
                                Explorer nos Services
                            </a>
                            <a href="#contact" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all">
                                Réserver une Séance
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider Controls -->
        <button id="prev-slide" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/10 hover:bg-white/20 text-white p-3 rounded-full backdrop-blur-sm transition-all z-10 hidden md:block">
            <i class="fas fa-chevron-left text-xl"></i>
        </button>
        <button id="next-slide" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/10 hover:bg-white/20 text-white p-3 rounded-full backdrop-blur-sm transition-all z-10 hidden md:block">
            <i class="fas fa-chevron-right text-xl"></i>
        </button>

        <!-- Slider Indicators -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex space-x-3 z-10">
            <button class="slider-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all active" data-slide="0"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-slide="1"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all" data-slide="2"></button>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-20 left-1/2 -translate-x-1/2 animate-bounce text-white/70">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>
    @endsection