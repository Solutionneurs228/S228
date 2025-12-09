@extends('base')


@section('title', 'à propos de S228')
<div class="home">
    @section('slide')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="../images/formations.webp" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">SOLUTIONNEURS228</h5>
                        {{-- <p class="home-description">qui somme nous ?</p> --}}
                        <p class="home-description">un bon travail en un temps record !!!</p>
                    </div>
                </div>



            </div>

        </div>

    @endsection

    @section('content')
        <div class="big-container">

            <div class="container">
                <div class="elt">

                    <section class="section" id="">

                        <div class="about-box1">
                            <div class="wrapperText">
                                <h5 class="card-title">
                                    DESCRIPTION
                                </h5>
                                <p class="card-text">
                                    Bienvenue chez <b>SOLUTIONNEURS228</b> , votre partenaire de confiance
                                    pour des services de maintenance informatique, photographie, reportage,
                                    montage vidéo, graphisme et développement web.

                                    {{-- avec un engagement inégalé envers la qualité et la satisfaction de nos
                                    clients. --}}
                                </p>
                            </div>

                        </div>

                    </section>

                    <section class="section">
                        <div class="formations-boxes">

                            <div class="box">

                                <div>
                                    <div class="icone-title">
                                        {{-- <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur --> --}}
                                        <h5 class="formation-card-title">NOTRE HISTOIRE</h5>
                                    </div>
                                    <p class="card-text">Le projet de création de SOLUTIONNEURS228 a commencé par un simple rêve dans la tête de son
                                        créateur en 2020.
                                        mais très vite ce rêve commence à voir sa réalisation par l'ouverture d'un atelier
                                        de Maintenance Informatique
                                        et de Photographie-Vidéographie avec quelques autres services disponibles. en suite
                                        s'est ajouté le design graphique.
                                        Vers la fin de l'année 2022 SOLUTIONNEURS228 acceuil le Developpement de sites web et
                                        d'Applications mobiles.
                                        Depuis ses debuts, SOLUTIONNEURS228 rend des services très apréciés, offre des formations,
                                        des stages et une assistance informatique très louée de ses bénéficiaires.
                                        SOLUTIONNEURS228 a été et continue d'être un partenaire de confiance dans tout ses domaines
                                        d'action.</p>
                                </div>

                                <div class="btn-right">
                                    {{-- <a href="{{ route('formations/initiation-informatique') }}" class="btn btn-primary">voir la page</a> --}}
                                </div>

                            </div>

                            <div class="box">

                                <div>
                                    <div class="icone-title">
                                        {{-- <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur --> --}}
                                        <h5 class="formation-card-title">NOS MISSIONS</h5>
                                    </div>
                                    <p class="card-text">
                                        Nos missions sont entre-autres :
                                        <ul>
                                            <li>
                                                Vous offrir des solutions complètes et innovantes,
                                                adaptées à vos besoins spécifiques dans nos différents domaines d'action
                                            </li>
                                            <BR></BR>
                                            <li>
                                                Aider les entréprises et particuliers à tirer meilleur profit de la technology
                                                et du Digital
                                            </li>
                                        </ul>
                                    </div>
                                <div class="btn-right">

                                    {{-- <a href="{{ route('formations/initiation-informatique') }}" class="btn btn-primary">voir la page</a> --}}
                                </div>

                            </div>

                            <div class="box">

                                <div>
                                    <div class="icone-title">
                                        {{-- <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur --> --}}
                                        <h5 class="formation-card-title">NOS VALEURS</h5>
                                    </div>

                                    <p class="card-text">
                                        En vue de vous garantir des services à la hauteur de vos attente, nous incarnons un certain nombre de valeurs.
                                        <ul>
                                            <li>
                                                L'honetété est la première de nos valeurs.
                                            </li>
                                            <br>
                                            <li>
                                                Dans le même sens nous savons reconnaitre nos limites et reparer nos insuffisances.
                                            </li>
                                            <br>
                                            <li>
                                                Biensûre nous voulons l'argent mais nous savons que nous devons vous satisfaire pour mériter ce argent.
                                            </li>

                                            Juste essayez nous !!!
                                        </ul>
                                    </p>
                                </div>
                                <div class="btn-right">

                                    {{-- <a href="{{ route('formations/initiation-informatique') }}" class="btn btn-primary">voir la page</a> --}}
                                </div>

                            </div>

                            <div class="box">

                                <div>
                                    <div class="icone-title">
                                        {{-- <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur --> --}}
                                        <h5 class="formation-card-title">NOS VISIONS</h5>
                                    </div>

                                    <p class="card-text">
                                        Continuer à innover, à apprendre et à évoluer, pour toujours rester à la hauteur de vos attentes et au service de vos ambitions.
<br>
<br>
                                        Nos perspectives sont très sensibles que nous les maintenons sécretes jusqu'à leur mise en oeuvre.</p>
                                </div>
                                <div class="btn-right">

                                    {{-- <a href="{{ route('formations/initiation-informatique') }}" class="btn btn-primary">voir la page</a> --}}
                                </div>

                            </div>

                            {{-- <div class="box">

                                <div>
                                    <div class="icone-title">
                                        <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                                        <h5 class="formation-card-title">Infographie</h5>
                                    </div>

                                    <p class="card-text">Création de cartes de visites, d'invitations,
                                        logos, bages, affiches pubs ...</p>
                                </div>
                                <div class="btn-right">

                                    <a href="{{ route('formations/initiation-informatique') }}" class="btn btn-primary">voir la page</a>
                                </div>

                            </div>

                            <div class="box">

                                <div>
                                    <div class="icone-title">
                                        <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                                        <h5 class="formation-card-title">Photoshop</h5>
                                    </div>

                                    <p class="card-text">Maitrise des bases et des outils les plus importants de Photoshop,
                                        étude des différents types de conceptions possibles avec Photoshop...</p>
                                </div>
                                <div class="btn-right">

                                    <a href="{{ route('formations/initiation-informatique') }}" class="btn btn-primary">voir la page</a>
                                </div>

                            </div> --}}

                        </div>
                    </section>

                    <section class="section">
                        <div class="slogan">Notre slogan : un bon travail en un temps record !!!</div>
                    </section>

                </div>
            </div>
        </div>

    @endsection
</div>
