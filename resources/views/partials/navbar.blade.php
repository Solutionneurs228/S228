    <!-- ==================== HEADER / NAVIGATION ==================== -->
    <!-- Sticky header with glass effect on scroll -->
    <header id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300 bg-white/90 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <!-- Logo -->
                
<a href="/" class="flex-shrink-0 flex items-center gap-1.5 cursor-pointer">
    
    <img src="/images/logo-1.png" 
         alt="Solutionneurs228 Logo"
         class="w-10 h-10 object-contain">

    <span class="font-bold text-2xl text-gray-900 tracking-tight">
        Solutionneurs<span class="text-brand-600">228</span>
    </span>

</a>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8 items-center">
                    <a href="/#home" class="text-gray-700 hover:text-brand-600 font-medium transition-colors relative group">
                        Accueil
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-600 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="/#services" class="text-gray-700 hover:text-brand-600 font-medium transition-colors relative group">
                        Services
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-600 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('galerie')}}" class="text-gray-700 hover:text-brand-600 font-medium transition-colors relative group">
                        gallerie
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-600 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="/#about" class="text-gray-700 hover:text-brand-600 font-medium transition-colors relative group">
                        À Propos
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-600 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="/#contact" class="text-gray-700 hover:text-brand-600 font-medium transition-colors relative group">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-600 transition-all group-hover:w-full"></span>
                    </a>
                </nav>

                <!-- CTA Button Desktop -->
                <div class="hidden md:block">
                    <a href="/#contact" class="bg-brand-600 hover:bg-brand-700 text-white px-6 py-2.5 rounded-full font-semibold transition-all transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center gap-2">
                        <i class="fas fa-paper-plane text-sm"></i>
                        Demander un Devis
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-brand-600 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 w-80 h-full bg-white shadow-2xl z-50 md:hidden flex flex-col">
            <div class="p-6 flex justify-between items-center border-b">
                <span class="font-bold text-xl text-gray-900">Menu</span>
                <button id="close-menu-btn" class="text-gray-500 hover:text-red-500">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <nav class="flex-1 flex flex-col p-6 space-y-4">
                <a href="#home" class="text-lg font-medium text-gray-700 hover:text-brand-600 py-2 border-b border-gray-100">Accueil</a>
                <a href="#services" class="text-lg font-medium text-gray-700 hover:text-brand-600 py-2 border-b border-gray-100">Services</a>
                <a href="#about" class="text-lg font-medium text-gray-700 hover:text-brand-600 py-2 border-b border-gray-100">À Propos</a>
                <a href="#contact" class="text-lg font-medium text-gray-700 hover:text-brand-600 py-2 border-b border-gray-100">Contact</a>
                <a href="#contact" class="mt-4 bg-brand-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-brand-700 transition-colors">
                    Demander un Devis
                </a>
            </nav>
        </div>
        
        <!-- Overlay for mobile menu -->
        <div id="menu-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden backdrop-blur-sm"></div>
    </header>