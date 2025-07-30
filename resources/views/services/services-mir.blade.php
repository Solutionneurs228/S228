@extends('base')


@section('title', 'MTC Maintenance Informatique')
<div class="home">
    @section('slide')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            {{--
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 h-auto" src="../images/2.JPG" alt="First slide">
                <div class="carousel-caption d-md-block">
                    <h5 class="home-title">MAINTENANCE INFORMATIQUE</h5>
                    <p class="home-description">Entretien - Réparation - Assistance informatique ...</p>
                </div>
            </div>

        </div> --}}


            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="../images/mir.JPG" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">MAINTENANCE INFORMATIQUE</h5>
                        <p class="home-description">Réparation des ordinateurs - Assistance informatique ...</p>
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

                    <section class="section" id="reparation">
                        {{-- <div class="mir-service"> --}}
                        <div class="sectionTitle">
                            <span class="titleNumber">01 . </span>
                            <h4 class="titleText"> Réparation et entretien des ordinateurs
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <ul>
                                <li>votre ordinateur est en panne ?</li>
                                <li>ou vous ne comprenez plus son fonctionnement ?</li>
                            </ul>
                            <p>
                                Nous vous offrons un service fiable et abordable pour garantir le bon fonctionnement de
                                vos
                                ordinateurs
                                bureau ou portatifs.
                                Nous passons par des diagnostics rapides pour résoudre efficacement tout problème
                                matériel
                                ou
                                logiciel.
                                En termes d'entretien, nous assurons des mises à jour régulières, un nettoyage physique
                                pour
                                éviter la
                                surchauffe, et nous mettons en place des solutions de sauvegarde des données.
                            </p>
                        </div>

                        <div class="service-links-group">
                            vous pouvez dès lors
                            <a href="">commander ce service</a>
                            <a href="">telephoner</a>
                            <a href="">whatsapp</a>
                            <a href="">passer par Mail</a>
                        </div>
                    </section>

                    <section class="section" id="assistance1">
                        <div class="sectionTitle">
                            <span class="titleNumber">02 . </span>
                            <h4 class="titleText">
                                Assistance de l'achat à l'utilisation de vos ordinateurs
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <ul>
                                <li>Vous voulez mettre en place votre parc informatique ?</li>
                                <li>ou juste qu'il vous faut un (des) ordinateur(s) pour votre travail ?</li>
                            </ul>
                            <p>
                                nous somme bien indiqués pour voir quel(s) ordinateur(s) il vous faut (bureaux ou portatif),
                                de
                                quelles performences minimales, en fontion de votre travail quels sont les logiciels à y
                                installer ...
                            </p>
                        </div>

                        <div class="service-links-group">
                            vous pouvez dès lors
                            <a href="">commander ce service</a>

                            <a href="">telephoner</a>
                            <a href="">whatsapp</a>
                            <a href="">passer par Mail</a>
                        </div>
                    </section>

                    <section class="section" id="assistance2">
                        <div class="sectionTitle">
                            <span class="titleNumber">03 . </span>
                            <h4 class="titleText">
                                Assistance dans l'organisation de votre travail côté informatique
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <ul>
                                <li>vous voulez informatiser votre travail (entreprise ou particulier) ?</li>
                                <li>ou votre est déjà informatisé mais il vous faut la meilleur façon de tirer profit de
                                    l'informatique ?</li>
                            </ul>
                            <p>
                                Nous comprenons d'abord votre travail et en suite nous nous occupons du reste.
                            </p>
                        </div>


                        <div class="service-links-group">
                            vous pouvez dès lors

                            <a href="">commander ce service</a>
                            <a href="">telephoner</a>
                            <a href="">whatsapp</a>
                            <a href="">passer par Mail</a>
                        </div>

                    </section>

                    <section class="section" id="travailEnEquipe">
                        <div class="sectionTitle">
                            <span class="titleNumber">04 . </span>
                            <h4 class="titleText">
                                initiation dans le travail en équipe, à distance avec un bon système de collaboration
                                informatique
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <ul>
                                <li>votre entreprise a un nombre d'ordinateurs dont le travail est complémentaire ?</li>
                                <li> ou vous avez des collaborateurs avec qui vous devez coopérer à distance ?</li>
                            </ul>
                            <p>
                                Là encore nous comprenons d'abord votre travail et nous voyons quel système de informatique
                                vous
                                convient.
                            </p>
                        </div>


                        <div class="service-links-group">
                            vous pouvez dès lors

                            <a href="">commander ce service</a>
                            <a href="">telephoner</a>
                            <a href="">whatsapp</a>
                            <a href="">passer par Mail</a>
                        </div>
                        <div class="service-links-group">voulez vous voir <a href="">nos formations ?</a></div>
                        <div class="slogan">Notre slogan : un bon travail en un temps record !!!</div>
                    </section>


                </div>




            </div>

        </div>

    @endsection
</div>
