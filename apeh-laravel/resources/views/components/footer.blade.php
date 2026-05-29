<footer class="bg-apeh-dark text-gray-300 mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Colonne 1 : Logo + description --}}
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/logo_apeh.png') }}"
                         alt="Logo APEH-France"
                         class="w-12 h-12 rounded-full object-cover border-2 border-apeh-gold">
                    <div>
                        <p class="font-display font-bold text-white text-xl">APEH-France</p>
                        <p class="text-xs text-gray-400">Association des Professionnels et Étudiants Haïtiens de France</p>
                    </div>
                </div>
                <p class="text-sm text-gray-400 leading-relaxed max-w-sm">
                    Nous rassemblons, soutenons et promouvons la communauté haïtienne en France à travers la solidarité, la culture et l'excellence.
                </p>
                {{-- Réseaux sociaux --}}
                <div class="flex items-center gap-4 mt-6">
                    <a href="https://www.facebook.com/apehfrance509/"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Facebook APEH-France"
                       class="w-9 h-9 rounded-full bg-white/10 hover:bg-blue-600 flex items-center justify-center transition-colors duration-200">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/apeh.france/?hl=am-et"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Instagram APEH-France"
                       class="w-9 h-9 rounded-full bg-white/10 hover:bg-pink-600 flex items-center justify-center transition-colors duration-200">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/association-des-%C3%A9tudiants-et-professionnels-haitiens-de-fance/"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="LinkedIn APEH-France"
                       class="w-9 h-9 rounded-full bg-white/10 hover:bg-blue-700 flex items-center justify-center transition-colors duration-200">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Colonne 2 : Navigation --}}
            <div>
                <h3 class="font-semibold text-white mb-4 text-sm uppercase tracking-wider">Navigation</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Qui sommes-nous ?</a></li>
                    <li><a href="{{ route('values') }}" class="hover:text-white transition-colors">Valeurs &amp; Vision</a></li>
                    <li><a href="{{ route('poles') }}" class="hover:text-white transition-colors">Pôles &amp; Contact</a></li>
                    <li><a href="{{ route('implantation') }}" class="hover:text-white transition-colors">Implantation</a></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-white transition-colors">Articles</a></li>
                    <li><a href="{{ route('status') }}" class="hover:text-white transition-colors">Statut</a></li>
                </ul>
            </div>

            {{-- Colonne 3 : Actions --}}
            <div>
                <h3 class="font-semibold text-white mb-4 text-sm uppercase tracking-wider">Rejoignez-nous</h3>
                <ul class="space-y-2 text-sm mb-6">
                    <li><a href="{{ route('member.create') }}" class="hover:text-white transition-colors">Devenir membre</a></li>
                    <li><a href="{{ route('donate') }}" class="hover:text-white transition-colors">Faire un don</a></li>
                    <li><a href="{{ route('join') }}" class="hover:text-white transition-colors">Pourquoi nous rejoindre ?</a></li>
                </ul>
                <h3 class="font-semibold text-white mb-4 text-sm uppercase tracking-wider">Contact</h3>
                <a href="mailto:apeh.france509@gmail.com"
                   class="text-sm text-apeh-gold hover:text-yellow-300 transition-colors break-all">
                    apeh.france509@gmail.com
                </a>
                <p class="text-xs text-gray-500 mt-2">
                    Maison des Étudiants, Cité Scientifique<br>
                    7 avenue Paul Langevin, 59650 Villeneuve-d'Ascq
                </p>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} APEH-France. Tous droits réservés.</p>
            <div class="flex items-center gap-4">
                <a href="{{ route('mentions') }}" class="hover:text-white transition-colors">Mentions légales</a>
                <span>·</span>
                <a href="{{ route('privacy') }}" class="hover:text-white transition-colors">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer>
