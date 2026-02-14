@section('slide')
    <section class="hero-slider">

        <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            {{-- Indicateurs --}}
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>

                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>

                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            {{-- Slides --}}
            <div class="carousel-inner">

                {{-- Slide 1 --}}
                <div class="carousel-item active">
                    <div class="slide-img">
                        <img src="{{ asset('images/mir.webp') }}" class="d-block w-100"
                            alt="Maintenance informatique" loading="eager">
                    </div>

                    <div class="carousel-caption">
                        <h1 class="home-title">Maintenance & Réparation</h1>
                        <p class="home-description">
                            Réparation des ordinateurs - Assistance informatique ...
                        </p>
                        <a href="{{ route('services.maintenance') }}" class="btn my-2 my-sm-0 contact-btn">En savoir plus</a>

                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="carousel-item">
                    <div class="slide-img">
                        <img src="{{ asset('images/tof.webp') }}" class="d-block w-100" alt="Développement Web"
                            loading="lazy">
                    </div>

                    <div class="carousel-caption">
                        <h5 class="home-title">Photographe & Vidéographie</h5>
                        <p class="home-description">Agrandissements - reportage et montage vidéo - vidéo pubs</p>
                        <div class="hook-btn-grp">
                            <a href="{{ route('services.photographie') }}" class="btn my-2 my-sm-0 contact-btn">Decouvrir</a>
                        </div>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="carousel-item">
                    <div class="slide-img">
                        <img src="{{ asset('images/web.webp') }}" class="d-block w-100"
                            alt="Formations professionnelles" loading="lazy">
                    </div>

 <div class="carousel-caption">
                        <h5 class="home-title">Développement Web & Mobile</h5>
                        <p class="home-description">Création de sites web - applications mobiles</p>
                        <div class="hook-btn-grp">
                            <a href="{{ route('services.webdev') }}" class="btn my-2 my-sm-0 contact-btn">voir la page</a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Contrôles --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Précédent</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Suivant</span>
            </button>

        </div>

    </section>
@endsection
