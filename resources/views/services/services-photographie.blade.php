@extends('base')


@section('title', 'S288 Photographie Vidéographie')
<div class="home">
    @section('slide')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="../images/tof.webp" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">Photographe & Vidéographie</h5>
                        <p class="home-description">Agrandissements - reportage et montage vidéo - vidéo pubs ...</p>
                         <div class="hook-btn-grp service-devis-btn">
                            <a href="{{ route('devis') }}" class="btn my-2 my-sm-0 contact-btn">📩 Demander un devis</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    @endsection


    @section('content')
        <div class="big-container">

            <div class="container">
                <div class="elt">
                    <div class="elt-title">
                        <h1 class="big-title">Que faisons nous en Photographie & Vidéographie ?</h1>
                    </div>

                    <div class="service-sommaire">
                        <div>
                            <a href="#toutePhotographie">
                                <span class="titleNumber">01 . </span>
                                <span class="sommaireText">Photographie et Agrandissement</span>
                            </a>
                        </div>

                        <div>
                            <a href="#reportageVideo">
                                <span class="titleNumber">02 . </span>
                                <span class="sommaireText">Reportage et montage vidéo</span>
                            </a>
                        </div>

                        <div>
                            <a href="#pub">
                                <span class="titleNumber">03 . </span>
                                <span class="sommaireText">Vidéos & animations Publicitaire</span>
                            </a>
                        </div>

                    </div>

<!-- SERVICE 01 : PHOTOGRAPHIE -->
<section class="service-session" id="toutePhotographie">
    <div class="service-session-container">

        <div class="service-session-media">
            <img src="../images/photo1.webp" alt="Photographie et agrandissement">
        </div>

        <div class="service-session-content">
            <div class="sectionTitle">
                <span class="titleNumber">01.</span>
                <h4 class="titleText">
                    Photographie et agrandissement
                    <div class="underline"><span></span></div>
                </h4>
            </div>

            <div class="service-session-description">
                <ul>
                    <li>Besoin de prises de vues professionnelles ?</li>
                    <li>Un album pour vos anciennes et nouvelles photos ?</li>
                    <li>Des agrandissements dans de beaux cadres ?</li>
                    <li>Des photos à tirer ou restaurer ?</li>
                    <li>Une séance de photo-shooting ?</li>
                    <li>Des photos publicitaires pour vos produits ?</li>
                </ul>

                <p>
                    Vous êtes tout simplement à la bonne adresse.
                    Confiez-nous vos projets pour une imagerie de rêve.
                </p>
            </div>

            <div class="service-links-group">
                <span>Vous pouvez dès lors :</span>
                <a href="">Commander ce service</a>
                <a href="">Téléphoner</a>
                <a href="">WhatsApp</a>
                <a href="">Par mail</a>
                <div>Voir <a href="">notre galerie photo</a></div>
            </div>
        </div>

    </div>
</section>


<!-- SERVICE 02 : REPORTAGE VIDÉO -->
<section class="service-session" id="reportageVideo">
    <div class="service-session-container reverse">

        <div class="service-session-media">
            <img src="../images/eric.webp" alt="Reportage et montage vidéo">
        </div>

        <div class="service-session-content">
            <div class="sectionTitle">
                <span class="titleNumber">02.</span>
                <h4 class="titleText">
                    Reportage et montage vidéo
                    <div class="underline"><span></span></div>
                </h4>
            </div>

            <div class="service-session-description">
                <ul>
                    <li>Couverture complète de vos événements (mariage, anniversaire, conférence, match, funérailles…)</li>
                    <li>Prise de vues, tournage, montage vidéo et albums photos</li>
                    <li>Collaboration avec d’autres professionnels du métier</li>
                    <li>Travail avec agences de communication et journalistes</li>
                    <li>Interventions dans tout le Togo et pays voisins</li>
                </ul>

                <p>
                    Confiez-nous vos projets événementiels, nous les rendrons mémorables.
                </p>
            </div>

            <div class="service-links-group">
                <span>Vous pouvez dès lors :</span>
                <a href="">Commander ce service</a>
                <a href="">Téléphoner</a>
                <a href="">WhatsApp</a>
                <a href="">Par mail</a>
            </div>
        </div>

    </div>
</section>


<!-- SERVICE 03 : PUBLICITÉ -->
<section class="service-session" id="pub">
    <div class="service-session-container">

        <div class="service-session-media">
            <img src="../images/photo.webp" alt="Vidéos et animations publicitaires">
        </div>

        <div class="service-session-content">
            <div class="sectionTitle">
                <span class="titleNumber">03.</span>
                <h4 class="titleText">
                    Vidéos & animations publicitaires
                    <div class="underline"><span></span></div>
                </h4>
            </div>

            <div class="service-session-description">
                <ul>
                    <li>Vidéos de publicité ou de sensibilisation</li>
                    <li>Promotion de produits ou de services</li>
                    <li>ONG, entreprises, services publics ou projets sociaux</li>
                </ul>

                <p>
                    Nous transformons vos idées en images animées percutantes.
                </p>
            </div>

            <div class="service-links-group">
                <span>Vous pouvez dès lors :</span>
                <a href="">Commander ce service</a>
                <a href="">Téléphoner</a>
                <a href="">WhatsApp</a>
                <a href="">Par mail</a>
            </div>
        </div>

    </div>

    <div class="service-extra">
        <div class="service-links-group">
            Voulez-vous voir <a href="">nos formations</a> ?
        </div>
        <div class="slogan">
            Notre slogan : <strong>un bon travail en un temps record !</strong>
        </div>
    </div>
</section>


                </div>
            </div>
            {{-- <button class="btn btn-primary" type="submit">contacter nous</button> --}}

        </div>

    @endsection
</div>
