

<!-- ==================== FOOTER ==================== -->
<footer id="contact" class="bg-gray-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">

            <!-- Company Info -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div
                        class="w-10 h-10 bg-brand-600 rounded-lg flex items-center justify-center text-white font-bold text-xl">
                        S
                    </div>
                    <span class="font-bold text-2xl tracking-tight">
                        Solutionneurs<span class="text-brand-500">228</span>
                    </span>
                </div>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Votre partenaire de confiance pour tous vos besoins en IT, développement web et production
                    audiovisuelle au Togo.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-brand-600 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-brand-600 transition-colors">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-brand-600 transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://wa.me/22892671533"
                        class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-brand-600 transition-colors">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-bold mb-6 text-white">Liens Rapides</h3>
                <ul class="space-y-3">
                    <li><a href="#home" class="text-gray-400 hover:text-brand-500 transition-colors">Accueil</a>
                    </li>
                    <li><a href="#services" class="text-gray-400 hover:text-brand-500 transition-colors">Nos
                            Services</a></li>
                    <li><a href="{{  route('about') }}" class="text-gray-400 hover:text-brand-500 transition-colors">À Propos</a>
                    </li>
                    <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-brand-500 transition-colors">Portfolio</a>
                    </li>
                    <li><a href="" class="text-gray-400 hover:text-brand-500 transition-colors">Blog</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-lg font-bold mb-6 text-white">Nos Services</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('services.maintenance') }}" class="text-gray-400 hover:text-brand-500 transition-colors">Maintenance
                            IT</a></li>
                    <li><a href="{{ route('services.assistance') }}" class="text-gray-400 hover:text-brand-500 transition-colors">Support à
                            Distance</a></li>
                    <li><a href="{{ route('services.webdev') }}" class="text-gray-400 hover:text-brand-500 transition-colors">Développement
                            Web</a></li>
                    <li><a href="{{ route('services.infographie') }}" class="text-gray-400 hover:text-brand-500 transition-colors">Design
                            Graphique</a></li>
                    <li><a href="{{ route('services.photographie') }}" class="text-gray-400 hover:text-brand-500 transition-colors">Photo &
                            Vidéo</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-bold mb-6 text-white">Contact</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt text-brand-500 mt-1"></i>
                        <span class="text-gray-400">quartier Tchannadè, Kara, Togo</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-phone text-brand-500"></i>
                        <span class="text-gray-400">+228 92 67 15 33</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-envelope text-brand-500"></i>
                        <span class="text-gray-400">solutionneurs228@gmail.com</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-clock text-brand-500"></i>
                        <span class="text-gray-400">Lun - Sam: 6h00 - 19h30</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-500 text-sm">
                © 2024 Solutionneurs228. Tous droits réservés.
            </p>
            <div class="flex space-x-6 text-sm">
                <a href="" class="text-gray-500 hover:text-white transition-colors">Politique de
                    Confidentialité</a>
                <a href="" class="text-gray-500 hover:text-white transition-colors">Conditions
                    d'Utilisation</a>
            </div>
        </div>
    </div>
</footer>