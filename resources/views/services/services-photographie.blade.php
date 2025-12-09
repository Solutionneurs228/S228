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
                            <a href="#reportageVidéo">
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

                    <section class="section" id="toutePhotographie">

                        <div class="sectionTitle">
                            <span class="titleNumber">01 . </span>
                            <h4 class="titleText">
                                Photographie et Agrandissement
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <ul>
                                <li>voulez-vous des prises de vues ?</li>
                                <li>ou un album pour ranger anciennes et nouvelles photo ?</li>
                                <li>ou plutôt des Agrandissements de photos dans de beaux cadres ?</li>
                                <li>avez-vous des photos que vous souhaiter tirer ?</li>
                                <li>voulez-vous une séance de photo-shooting ?</li>
                                <li>avez-vous besoins de bonnes photos pour la publicité de vos produits ?</li>
                            </ul>
                             Vous êtes tout simplement à la bonne adresse ;
                             n'hésitez donc pas de vous confier à nous pour une imagerie de rêve
                        </div>

                        <div class="service-links-group">

                            vous pouvez dès lors
                            <a href="">commander ce service</a>
                            <a href="">téléphoner</a>
                            <a href="">whatsapp</a>
                            <a href="">passer par Mail</a>
                            <div>voulez vous voir <a href="">notre galerie photo ?</a></div>
                        </div>
                    </section>

                    <section class="section" id="reportageVidéo">
                        {{-- <div class="mir-service"> --}}
                        <div class="sectionTitle">
                            <span class="titleNumber">02 . </span>
                            <h4 class="titleText">
                                Reportage et montage vidéo
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <ul>
                                <li>Nos équipes professionnelles sont disponibles pour la couverture entière de vos événement
                                comme mariage, Aniversaire, Baptême, réunion, conférence, Match, funérailles ...</li>
                                <li>Pour votre événement nous assurons la prise de vues, le tournage, le montage vidéo,
                                un ou des albums photos.</li>
                                <li>Nous somme aussi disposés à collaborer avec tout autre proffesionel du metier.
                                Par exemple pour des couvertures dans notre rayon d'action.</li>
                                <li>Nous collaborons aussi avec des agences de communication
                                qui peuvent nous envoyer travailler avec leurs journaliste.</li>
                                <li>
                                     Nous somme situés à kara (au nord du Togo) mais nous travaillons
                                     dans toutes les régions du pays et même dans les pays voisins.
                                </li>
                            </ul>
                            N'hésitez donc pas à nous confier vos projets événementiels.
                        </div>

                        <div class="service-links-group">
                            vous pouvez dès lors
                            <a href="">commander ce service</a>
                            <a href="">telephoner</a>
                            <a href="">whatsapp</a>
                            <a href="">passer par Mail</a>
                        </div>
                    </section>
                    </section>

                    <section class="section" id="pub">
                        <div class="sectionTitle">
                            <span class="titleNumber">03 . </span>
                            <h4 class="titleText">
                                Vidéos & animations publicitaire
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <ul>
                                <li>Nous oppérons également dans les vidéos de publicité ou de sensibilisation</li>
                                <li>vous ête une entréprise ou un particulier et vous voulez tourner une vidéo pour la publicité
                                soit de vos produit soit de vos services ? comptez sur notre expertise !!!</li>
                                <li>vous ête une entréprise ou un particulier, ONG, un service public ou social ;
                                vous avez une sensibilisation, un projet à promouvoir ou une idée à véhiculer ?
                                </li>
                            </ul>
                            Nous allons transformer vos idées en de belles images animées !!!
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
            {{-- <button class="btn btn-primary" type="submit">contacter nous</button> --}}

        </div>

    @endsection
</div>
