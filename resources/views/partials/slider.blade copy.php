
    @section('slide')
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="../images/mir.webp" alt="First slide">


                    <div class="carousel-caption">
                        <h5 class="home-title">MAINTENANCE INFORMATIQUE</h5>
                        <p class="home-description">Réparation des ordinateurs - Assistance informatique ...</p>
                        <div class="hook-btn-grp">
                            <a href="{{ route('devis') }}" class="btn my-2 my-sm-0 contact-btn">📩 Demander un devis</a>
                            <a href="/test-brevo" class="btn my-2 my-sm-0 contact-btn">📩 Demander un devis</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item slide-img">
                    <img class="d-block w-100 h-auto" src="../images/tof.webp" alt="First slide">

                    <div class="carousel-caption">
                        <h5 class="home-title">Photographe & Vidéographie</h5>
                        <p class="home-description">Agrandissements - reportage et montage vidéo - vidéo pubs</p>
                        <div class="hook-btn-grp">
                            <a href="{{ route('devis') }}" class="btn my-2 my-sm-0 contact-btn">📩 Demander un devis</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item slide-img">
                    <img class="d-block w-100 h-auto" src="../images/web.webp" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">Développement Web & Mobile</h5>
                        <p class="home-description">Création de sites web - applications mobiles</p>
                        <div class="hook-btn-grp">
                            <a href="{{ route('devis') }}" class="btn my-2 my-sm-0 contact-btn">📩 Demander un devis</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @endsection