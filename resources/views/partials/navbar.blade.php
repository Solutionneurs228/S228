<header id="navbar" class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-2">
                <img src="/images/logo-1.png" alt="Solutionneurs228" class="w-10 h-10 object-contain">
                <span class="font-bold text-2xl text-gray-900">
                    Solutionneurs<span class="text-brand-600">228</span>
                </span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-6">
                <a href="/#home" class="nav-link text-gray-700 hover:text-brand-600 font-medium py-2">Accueil</a>

                <!-- DROPDOWN SERVICES - DESKTOP -->
                <div class="relative group" id="desktop-services-dropdown">
                    <button type="button" class="flex items-center gap-1 text-gray-700 hover:text-brand-600 font-medium py-2 bg-transparent border-none cursor-pointer focus:outline-none">
                        <span>Services</span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-200 group-hover:rotate-180"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="absolute top-full left-0 mt-2 w-72 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50 overflow-hidden">

                        <div class="px-4 py-2 bg-gray-50 border-b border-gray-100">
                            <p class="text-xs font-semibold text-gray-500 uppercase">Nos Expertises</p>
                        </div>

                        <div class="py-1">
                            <a href="{{ route('services.maintenance')}}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-brand-600 hover:bg-brand-50 transition-colors">
                                <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-tools text-sm"></i>
                                </div>
                                <div>
                                    <span class="block font-medium text-sm">Maintenance Informatique</span>
                                    <span class="block text-xs text-gray-500">réparation d'ordinateurs</span>
                                </div>
                            </a>

                            <a href="{{ route('services.photographie')}}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-brand-600 hover:bg-brand-50 transition-colors">
                                <div class="w-8 h-8 rounded-lg bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-headset text-sm"></i>
                                </div>
                                <div>
                                    <span class="block font-medium text-sm">Photographie - vidéographie</span>
                                    <span class="block text-xs text-gray-500">reportage photo et vidéo</span>
                                </div>
                            </a>

                            <a href="{{ route('services.webdev')}}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-brand-600 hover:bg-brand-50 transition-colors">
                                <div class="w-8 h-8 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-code text-sm"></i>
                                </div>
                                <div>
                                    <span class="block font-medium text-sm">Développement Web</span>
                                    <span class="block text-xs text-gray-500">création de sites web</span>
                                </div>
                            </a>

                            <a href="{{ route('services.infographie')}}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-brand-600 hover:bg-brand-50 transition-colors">
                                <div class="w-8 h-8 rounded-lg bg-pink-100 text-pink-600 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-palette text-sm"></i>
                                </div>
                                <div>
                                    <span class="block font-medium text-sm">Graphic Design</span>
                                    <span class="block text-xs text-gray-500">Identité visuelle</span>
                                </div>
                            </a>

                            <a href="/#photo-video" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-brand-600 hover:bg-brand-50 transition-colors">
                                <div class="w-8 h-8 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-camera text-sm"></i>
                                </div>
                                <div>
                                    <span class="block font-medium text-sm">Photo & Vidéo</span>
                                    <span class="block text-xs text-gray-500">Production audiovisuelle</span>
                                </div>
                            </a>
                        </div>

                        <div class="px-4 py-2 bg-gray-50 border-t border-gray-100">
                            <a href="/#services" class="flex items-center justify-center gap-2 text-sm font-semibold text-brand-600 hover:text-brand-700">
                                Voir tous les services
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('galerie') }}" class="nav-link text-gray-700 hover:text-brand-600 font-medium py-2">Galerie</a>
                <a href="{{ route('about') }}" class="nav-link text-gray-700 hover:text-brand-600 font-medium py-2">À Propos</a>
                <a href="{{ route('contact') }}" class="nav-link text-gray-700 hover:text-brand-600 font-medium py-2">Contact</a>
            </nav>

            <!-- CTA Desktop -->
            <div class="hidden md:block">
                <a href="{{ route('contact') }}" class="bg-brand-600 hover:bg-brand-700 text-white px-6 py-2.5 rounded-full font-semibold transition-all hover:scale-105 shadow-lg flex items-center gap-2">
                    <i class="fas fa-paper-plane text-sm"></i>
                    Devis
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button type="button" id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-brand-600 p-2 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="fixed inset-y-0 right-0 w-80 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out md:hidden z-50 flex flex-col">

        <!-- Header -->
        <div class="p-6 flex justify-between items-center border-b flex-shrink-0">
            <span class="font-bold text-xl text-gray-900">Menu</span>
            <button type="button" id="close-menu-btn" class="text-gray-500 hover:text-red-500 focus:outline-none">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto p-6 space-y-2">
            <a href="/#home" class="block text-lg font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 px-3 py-3 rounded-lg transition-colors">Accueil</a>

            <!-- DROPDOWN MOBILE -->
            <div class="relative">
                <button type="button" id="mobile-dropdown-btn" class="w-full flex items-center justify-between text-lg font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 px-3 py-3 rounded-lg transition-colors focus:outline-none">
                    <span>Services</span>
                    <i id="mobile-dropdown-icon" class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
                </button>

                <div id="mobile-dropdown-content" class="hidden pl-4 mt-1 space-y-1">
                    <a href="{{ route('services.maintenance')}}" class="flex items-center gap-3 text-gray-600 hover:text-brand-600 hover:bg-brand-50 px-3 py-2 rounded-lg text-base">
                        <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center"><i class="fas fa-tools text-sm"></i></div>
                        <span>Maintenance Informatique</span>
                    </a>
                    <a href="{{ route('services.photographie')}}" class="flex items-center gap-3 text-gray-600 hover:text-brand-600 hover:bg-brand-50 px-3 py-2 rounded-lg text-base">
                        <div class="w-8 h-8 rounded-lg bg-green-100 text-green-600 flex items-center justify-center"><i class="fas fa-headset text-sm"></i></div>
                        <span>Photographie - vidéographie</span>
                    </a>
                    <a href="{{ route('services.webdev')}}" class="flex items-center gap-3 text-gray-600 hover:text-brand-600 hover:bg-brand-50 px-3 py-2 rounded-lg text-base">
                        <div class="w-8 h-8 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center"><i class="fas fa-code text-sm"></i></div>
                        <span>Développement Web</span>
                    </a>
                    <a href="{{ route('services.infographie')}}" class="flex items-center gap-3 text-gray-600 hover:text-brand-600 hover:bg-brand-50 px-3 py-2 rounded-lg text-base">
                        <div class="w-8 h-8 rounded-lg bg-pink-100 text-pink-600 flex items-center justify-center"><i class="fas fa-palette text-sm"></i></div>
                        <span>Graphic Design</span>
                    </a>
                    <a href="{{ route('services.photographie')}}" class="flex items-center gap-3 text-gray-600 hover:text-brand-600 hover:bg-brand-50 px-3 py-2 rounded-lg text-base">
                        <div class="w-8 h-8 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center"><i class="fas fa-camera text-sm"></i></div>
                        <span>Photo & Video</span>
                    </a>
                    <a href="/#services" class="flex items-center justify-center gap-2 text-sm font-semibold text-brand-600 hover:text-brand-700 py-2 mt-2 border-t border-gray-200">
                        Voir tous les services <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <a href="{{ route('galerie') }}" class="block text-lg font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 px-3 py-3 rounded-lg transition-colors">Galerie</a>
            <a href="{{ route('about') }}" class="block text-lg font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 px-3 py-3 rounded-lg transition-colors">À Propos</a>
            <a href="{{ route('contact') }}" class="block text-lg font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 px-3 py-3 rounded-lg transition-colors">Contact</a>

            <a href="{{ route('devis') }}" class="block mt-4 bg-brand-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-brand-700 transition-colors">
                Demander un Devis
            </a>
        </nav>
    </div>

    <!-- Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm opacity-0 invisible transition-opacity duration-300 md:hidden z-40"></div>
</header>
