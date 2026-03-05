@extends('layouts.base')


@section('title', 'S228 Développement web')
<div class="home">
    @section('slide')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="../images/web.webp" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">Développement Web & Mobile</h5>
                        <p class="home-description">Création de sites web - applications mobiles</p>
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
                        <h1 class="big-title">Que faisons nous en développement Web ?</h1>
                    </div>
                    <div class="service-sommaire">
                        <div>
                            <a href="#reparation">
                                <span class="titleNumber">01 . </span>
                                <span class="sommaireText">Création de sites web</span>
                            </a>
                        </div>

                        <div>
                            <a href="#assistance1">
                                <span class="titleNumber">02 . </span>
                                <span class="sommaireText">Création d'Applications mobiles</span>
                            </a>
                        </div>

                        <div>
                            <a href="#assistance1">
                                <span class="titleNumber">03 . </span>
                                <span class="sommaireText">Site web CV (portfolio)</span>
                            </a>
                        </div>

                    </div>

                    <!-- SERVICE 01 : SITE WEB -->
                    <section class="service-session" id="creationSiteWeb">
                        <div class="service-session-container">

                            <div class="service-session-media">
                                <img src="../images/web1.webp" alt="Création de sites web">
                            </div>

                            <div class="service-session-content">
                                <div class="sectionTitle">
                                    <span class="titleNumber">01.</span>
                                    <h4 class="titleText">
                                        Création de sites web
                                        <div class="underline"><span></span></div>
                                    </h4>
                                </div>

                                <div class="service-session-description">
                                    <ul>
                                        <li>
                                            Entreprise, commerçant ou particulier, un site web est indispensable
                                            pour exposer vos activités et vos produits au monde entier.
                                        </li>
                                        <li>
                                            En e-commerce, un site web professionnel vous permet de présenter
                                            votre boutique et de recevoir des commandes en ligne.
                                        </li>
                                    </ul>

                                    <p>
                                        Nous concevons des <strong>sites web sur mesure</strong>.
                                        Nous prenons le temps de comprendre vos besoins, vos préférences
                                        et les fonctionnalités souhaitées avant toute conception.
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


                    <!-- SERVICE 02 : APPLICATION MOBILE -->
                    <section class="service-session" id="creationAppMobile">
                        <div class="service-session-container reverse">

                            <div class="service-session-media">
                                <img src="../images/web.webp" alt="Création d'applications mobiles">
                            </div>

                            <div class="service-session-content">
                                <div class="sectionTitle">
                                    <span class="titleNumber">02.</span>
                                    <h4 class="titleText">
                                        Création d’applications mobiles
                                        <div class="underline"><span></span></div>
                                    </h4>
                                </div>

                                <div class="service-session-description">
                                    <p>
                                        Vous avez besoin d’une application mobile à installer sur Android,
                                        iPhone ou autres appareils mobiles ?
                                    </p>
                                    <p>
                                        Nous développons votre application selon vos besoins,
                                        vos préférences et les fonctionnalités souhaitées,
                                        avec une expérience utilisateur professionnelle.
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


                    <!-- SERVICE 03 : SITE CV / PORTFOLIO -->
                    <section class="service-session" id="portfolioWeb">
                        <div class="service-session-container">

                            <div class="service-session-media">
                                <img src="../images/web1.webp" alt="Site web CV portfolio">
                            </div>

                            <div class="service-session-content">
                                <div class="sectionTitle">
                                    <span class="titleNumber">03.</span>
                                    <h4 class="titleText">
                                        Site web CV (Portfolio)
                                        <div class="underline"><span></span></div>
                                    </h4>
                                </div>

                                <div class="service-session-description">
                                    <p>
                                        Savez-vous que votre CV peut être présenté comme un site web ?
                                    </p>

                                    <ul>
                                        <li>
                                            Présentez vos compétences avec textes, photos, vidéos et illustrations.
                                        </li>
                                        <li>
                                            Offrez à votre employeur une expérience unique et professionnelle.
                                        </li>
                                        <li>
                                            Un site CV crée un impact fort sur la prise de décision.
                                        </li>
                                        <li>
                                            Les CV classiques paraîtront fades à côté du vôtre.
                                        </li>
                                    </ul>

                                    <p>
                                        Ça vous tente de <a class="links" href="">voir le mien ?</a>
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

        </div>

    @endsection
</div>
