<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm"
        x-data="{ mobileOpen: false, aboutOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo + Nom --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group" aria-label="Retour à l'accueil">
                <img src="{{ asset('images/logo_apeh.png') }}"
                     alt="Logo APEH-France"
                     class="w-10 h-10 rounded-full object-cover shadow-sm group-hover:scale-105 transition-transform duration-200">
                <div class="hidden sm:block">
                    <span class="font-display font-bold text-apeh-blue text-lg leading-tight block">APEH-France</span>
                    <span class="text-xs text-gray-400 leading-tight block">Association haïtienne de France</span>
                </div>
            </a>

            {{-- Navigation desktop --}}
            <nav class="hidden lg:flex items-center gap-1" aria-label="Navigation principale">

                {{-- Dropdown À propos --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="nav-link flex items-center gap-1 px-3 py-2 rounded-lg hover:bg-gray-100"
                            aria-haspopup="true" :aria-expanded="open.toString()">
                        À propos
                        <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                         class="absolute top-full left-0 mt-1 w-56 bg-white rounded-xl shadow-xl border border-gray-100 py-2 z-50">
                        <a href="{{ route('about') }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-apeh-light hover:text-apeh-blue transition-colors">
                            Qui sommes-nous ?
                        </a>
                        <a href="{{ route('values') }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-apeh-light hover:text-apeh-blue transition-colors">
                            Valeurs &amp; Vision
                        </a>
                        <a href="{{ route('join') }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-apeh-light hover:text-apeh-blue transition-colors">
                            Pourquoi nous rejoindre ?
                        </a>
                        <a href="{{ route('poles') }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-apeh-light hover:text-apeh-blue transition-colors">
                            Pôles &amp; Contact
                        </a>
                        <a href="{{ route('implantation') }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-apeh-light hover:text-apeh-blue transition-colors">
                            Implantation
                        </a>
                    </div>
                </div>

                <a href="{{ route('articles.index') }}"
                   class="nav-link px-3 py-2 rounded-lg hover:bg-gray-100 {{ request()->routeIs('articles.*') ? 'nav-link-active' : '' }}">
                    Articles
                </a>

                <a href="{{ route('status') }}"
                   class="nav-link px-3 py-2 rounded-lg hover:bg-gray-100 {{ request()->routeIs('status') ? 'nav-link-active' : '' }}">
                    Statut
                </a>
            </nav>

            {{-- CTA buttons --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="{{ route('donate') }}"
                   class="btn-outline !border-apeh-red !text-apeh-red hover:!bg-apeh-red hover:!text-white text-sm px-4 py-2">
                    Faire un don
                </a>
                <a href="{{ route('member.create') }}"
                   class="btn-primary text-sm px-4 py-2">
                    Devenir membre
                </a>
            </div>

            {{-- Mobile menu button --}}
            <button id="menu-btn"
                    class="lg:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-apeh-blue"
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen.toString()"
                    aria-label="Ouvrir le menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu"
         x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden bg-white border-t border-gray-100 shadow-lg">
        <nav class="max-w-7xl mx-auto px-4 py-4 space-y-1" aria-label="Navigation mobile">
            <a href="{{ route('home') }}"
               class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-apeh-light hover:text-apeh-blue font-medium transition-colors">
                Accueil
            </a>
            <a href="{{ route('about') }}"
               class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-apeh-light hover:text-apeh-blue font-medium transition-colors">
                Qui sommes-nous ?
            </a>
            <a href="{{ route('values') }}"
               class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-apeh-light hover:text-apeh-blue font-medium transition-colors">
                Valeurs &amp; Vision
            </a>
            <a href="{{ route('join') }}"
               class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-apeh-light hover:text-apeh-blue font-medium transition-colors">
                Pourquoi nous rejoindre ?
            </a>
            <a href="{{ route('poles') }}"
               class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-apeh-light hover:text-apeh-blue font-medium transition-colors">
                Pôles &amp; Contact
            </a>
            <a href="{{ route('implantation') }}"
               class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-apeh-light hover:text-apeh-blue font-medium transition-colors">
                Implantation
            </a>
            <a href="{{ route('articles.index') }}"
               class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-apeh-light hover:text-apeh-blue font-medium transition-colors">
                Articles
            </a>
            <a href="{{ route('status') }}"
               class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-apeh-light hover:text-apeh-blue font-medium transition-colors">
                Statut
            </a>
            <div class="pt-3 border-t border-gray-100 flex flex-col gap-2">
                <a href="{{ route('donate') }}" class="btn-secondary w-full text-center">Faire un don</a>
                <a href="{{ route('member.create') }}" class="btn-primary w-full text-center">Devenir membre</a>
            </div>
        </nav>
    </div>
</header>

{{-- Spacer for fixed header --}}
<div class="h-16"></div>
