<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand logo" href="/">
        <img src="/images/logo.png" alt="logo mtc">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nos Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('services/mir')}}">Maintenance Informatique</a>
                    <a class="dropdown-item" href="{{ route('services/photographie')}}">Photographe & Vidéographie</a>
                    <a class="dropdown-item" href="{{ route('services/webdev')}}">Développement Web & Mobile</a>
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item" href="{{ route('services/infographie')}}">Infographie</a> --}}
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('formations/initiation-informatique')}}">Nos Formations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about')}}">Qui sommes nous ?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contactez nous</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

