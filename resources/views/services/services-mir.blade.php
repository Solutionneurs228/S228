@extends('layouts.base')


@section('title', 'S228 Maintenance Informatique')
<div class="home">
    @section('slide')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="../images/mir.webp" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">MAINTENANCE INFORMATIQUE</h5>
                        <p class="home-description">Réparation des ordinateurs - Assistance informatique ...</p>
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
                        <h1 class="big-title">Que faisons nous en maintenance ?</h1>
                    </div>
                    <div class="service-sommaire">
                        <div>
                            <a href="#reparation">
                                <span class="titleNumber">01 . </span>
                                <span class="sommaireText">Réparation et entretien des ordinateurs</span>
                            </a>
                        </div>

                        <div>
                            <a href="#assistance1">
                                <span class="titleNumber">02 . </span>
                                <span class="sommaireText">Assistance depuis l'achat, les installations de systèmes
                                    d'exploitation et logiciels
                                    jusqu'à l'utilisation de vos ordinateurs</span>
                            </a>
                        </div>
                        <div>
                            <a href="#assistance2">
                                <span class="titleNumber">03 . </span>
                                <span class="sommaireText">Assistance dans l'organisation de votre travail côté
                                    informatique</span>
                            </a>
                        </div>
                        <div>
                            <a href="#travailEnEquipe">
                                <span class="titleNumber">04 . </span>
                                <span class="sommaireText">Initiation dans le travail en équipe, à distance avec un bon
                                    système de collaboration
                                    informatique</span>
                            </a>
                        </div>





                    </div>

<!-- SERVICE 01 -->
<section class="service-session" id="reparation">
    <div class="service-session-container">

        <div class="service-session-media">
            <img src="../images/mir.webp" alt="Réparation et entretien des ordinateurs">
        </div>

        <div class="service-session-content">
            <div class="sectionTitle">
                <span class="titleNumber">01.</span>
                <h4 class="titleText">
                    Réparation et entretien des ordinateurs
                    <div class="underline"><span></span></div>
                </h4>
            </div>

            <div class="service-session-description">
                <ul>
                    <li>Votre ordinateur est en panne ?</li>
                    <li>Ou vous ne comprenez plus son fonctionnement ?</li>
                </ul>
                <p>
                    Nous vous offrons un service fiable et abordable pour garantir le bon fonctionnement
                    de vos ordinateurs bureau ou portables. Diagnostics rapides, réparations efficaces,
                    mises à jour, nettoyage physique et sauvegarde des données.
                </p>
            </div>

            <div class="service-links-group">
                <span>Vous pouvez dès lors :</span>
                <a href="{{ route('devis') }}">Commander ce service</a>
                <a href="tel:+22892671533">Téléphoner</a>
                <a href="https://wa.me/22892671533?text=Bonjour%2C%20je%20souhaite%20demander%20un%20devis%20pour%20un%20service%20informatique.">
                    WhatsApp
                </a>
                <a href="mailto:solutionneurs228@gmail.com">Par mail</a>
            </div>
        </div>

    </div>
</section>


<!-- SERVICE 02 -->
<section class="service-session" id="assistance1">
    <div class="service-session-container reverse">

        <div class="service-session-media">
            <img src="../images/mir.webp" alt="Assistance informatique">
        </div>

        <div class="service-session-content">
            <div class="sectionTitle">
                <span class="titleNumber">02.</span>
                <h4 class="titleText">
                    Assistance de l’achat à l’utilisation de vos ordinateurs
                    <div class="underline"><span></span></div>
                </h4>
            </div>

            <div class="service-session-description">
                <ul>
                    <li>Vous voulez mettre en place votre parc informatique ?</li>
                    <li>Vous avez besoin d’ordinateurs adaptés à votre travail ?</li>
                </ul>
                <p>
                    Nous vous aidons à choisir les ordinateurs adaptés (bureau ou portable),
                    définir les performances minimales et installer les logiciels nécessaires.
                </p>
            </div>

            <div class="service-links-group">
                <span>Vous pouvez dès lors :</span>
                <a href="{{ route('devis') }}">Commander ce service</a>
                <a href="tel:+22892671533">Téléphoner</a>
                <a href="https://wa.me/22892671533">WhatsApp</a>
                <a href="mailto:solutionneurs228@gmail.com">Par mail</a>
            </div>
        </div>

    </div>
</section>


<!-- SERVICE 03 -->
<section class="service-session" id="assistance2">
    <div class="service-session-container">

        <div class="service-session-media">
            <img src="../images/mir.webp" alt="Organisation informatique du travail">
        </div>

        <div class="service-session-content">
            <div class="sectionTitle">
                <span class="titleNumber">03.</span>
                <h4 class="titleText">
                    Organisation de votre travail côté informatique
                    <div class="underline"><span></span></div>
                </h4>
            </div>

            <div class="service-session-description">
                <ul>
                    <li>Vous voulez informatiser votre travail ?</li>
                    <li>Ou mieux exploiter l’informatique existante ?</li>
                </ul>
                <p>
                    Nous analysons votre activité et mettons en place les outils informatiques
                    adaptés pour améliorer votre productivité.
                </p>
            </div>

            <div class="service-links-group">
                <span>Vous pouvez dès lors :</span>
                <a href="{{ route('devis') }}">Commander ce service</a>
                <a href="tel:+22892671533">Téléphoner</a>
                <a href="https://wa.me/22892671533">WhatsApp</a>
                <a href="mailto:solutionneurs228@gmail.com">Par mail</a>
            </div>
        </div>

    </div>
</section>


<!-- SERVICE 04 -->
<section class="service-session" id="travailEnEquipe">
    <div class="service-session-container reverse">

        <div class="service-session-media">
            <img src="../images/mir.webp" alt="Travail en équipe à distance">
        </div>

        <div class="service-session-content">
            <div class="sectionTitle">
                <span class="titleNumber">04.</span>
                <h4 class="titleText">
                    Initiation au travail en équipe à distance
                    <div class="underline"><span></span></div>
                </h4>
            </div>

            <div class="service-session-description">
                <ul>
                    <li>Votre travail est complémentaire entre plusieurs ordinateurs ?</li>
                    <li>Vous collaborez à distance ?</li>
                </ul>
                <p>
                    Nous vous aidons à mettre en place un système de collaboration
                    informatique efficace et adapté à vos besoins.
                </p>
            </div>

            <div class="service-links-group">
                <span>Vous pouvez dès lors :</span>
                <a href="{{ route('devis') }}">Commander ce service</a>
                <a href="tel:+22892671533">Téléphoner</a>
                <a href="https://wa.me/22892671533">WhatsApp</a>
                <a href="mailto:solutionneurs228@gmail.com">Par mail</a>
            </div>
        </div>

    </div>

    <div class="service-extra">
        <div class="service-links-group">
            Voulez-vous voir <a href="#">nos formations ?</a>
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
