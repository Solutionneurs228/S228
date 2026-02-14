<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm
fixed-top
">
    <div class="container">
        {{-- Logo
        <a class="navbar-brand logo" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo MTC" height="50">
        </a>
--}}
        <a class="navbar-brand logo" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}"
                 alt="Logo S228"
                 class="logo img-fluid">
        </a>

        {{-- Bouton burger --}}
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMain"
                aria-controls="navbarMain"
                aria-expanded="false"
                aria-label="Ouvrir le menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu principal --}}
        <div class="collapse navbar-collapse" id="navbarMain">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                {{-- Services --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('services.*') ? 'active' : '' }}"
                       href="#"
                       id="servicesDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Nos Services
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ route('services.maintenance') }}">Maintenance Informatique</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.photographie') }}">Photographie & Vidéographie</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.webdev') }}">Développement Web & Mobile</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.infographie') }}">Infographie</a></li>
                    </ul>
                </li>

                {{-- Formations --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('formation') ? 'active' : '' }}"
                       href="{{ route('formation') }}">
                        Nos Formations
                    </a>
                </li>

                {{-- Galerie (ajout propre) --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galerie') ? 'active' : '' }}"
                       href="{{ route('galerie') }}">
                        Galerie
                    </a>
                </li>

                {{-- À propos --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                       href="{{ route('about') }}">
                        Qui sommes-nous ?
                    </a>
                </li>

                {{-- Contact --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                       href="{{ route('contact') }}">
                        Contactez-nous
                    </a>
                </li>

                {{-- Devis --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('devis') ? 'active' : '' }}"
                       href="{{ route('devis') }}">
                        Devis
                    </a>
                </li>

            </ul>

            {{-- Recherche --}}
            <form class="d-flex ms-lg-3" role="search">
                <label for="navbarSearch" class="visually-hidden">Rechercher</label>
                <input id="navbarSearch"
                       class="form-control me-2"
                       type="search"
                       placeholder="Rechercher">
                <button class="btn btn-outline-success" type="submit">
                    Recherche
                </button>
            </form>

        </div>
    </div>
</nav>

