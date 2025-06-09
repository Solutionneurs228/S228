@extends('base')


@section('title', 'MTC Photographie Vidéographie')
<div class="home">
    @section('slide')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="../images/photo.JPG" alt="First slide">
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
                                <span class="sommaireText">Vidéos ou animations Publicitaire</span>
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
                            <p>
                                voulez-vous des prises de vues ?
                                <br>
                                ou un album pour ranger anciennes et nouvelles photo ?
                                <br>
                                ou plutôt des Agrandissements de photos dans de beaux cadres ?
                                <br>
                                avez-vous des photos que vous souhaiter tirer ?
                                <br>
                                voulez-vous une séance de photo-shooting ?
                                <br>
                                avez-vous besoins de bonnes photos pour la publicité de vos produits ?
                                <br>
                                <br>
                                <span class="bigParagraph">
                                    Vous êtes tout simplement à la bonne adresse ;
                                    n'hésitez donc pas de vous confier à nous pour une imagerie de rêve
                                </span>

                            </p>
                        </div>

                        <div class="service-links-group">
                            <div>voulez vous voir <a href="">notre galerie photo ?</a></div>
                            vous pouvez dès lors
                            <a href="">commander ce service</a>
                            <a href="">téléphoner</a>
                            <a href="">whatsapp</a>
                            <a href="">passer par Mail</a>
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
                            <p>
                                Nos équipes professionnelles sont disponibles pour la couverture entière de vos événement
                                comme un mariage, Aniversaire, Baptême, réunion, conférence, Match, funérailles ...
                            </p>
                            <p>
                                Pour votre événement nous assurons la prise de vues, le tournage, le montage vidéo,
                                un ou des albums photos.
                            </p>
                            <p>
                                Nous somme aussi disposés à collaborer avec tout autre proffesionel du metier.
                                Par exemple pour des couvertures dans notre rayon d'action.
                                <br>
                                Nous collaborons aussi avec des agences de communication
                                qui peuvent nous envoyer travailler avec leurs journaliste.
                            </p>
                            <p>
                                Nous somme situés à kara (au nord du Togo) mais nous travaillons dans toutes les régions du pays et même dans les pays voisins.
                            </p>
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
                                Vidéos ou animations publicitaire
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <p>
                                Nous oppérons également dans les vidéos de publicité ou de sensibilisation
                            </p>
                            <p>
                                vous ête une entréprise ou un particulier et vous voulez tourner une vidéo pour la publicité
                                soit de vos produit soit de vos services ? comptez sur notre expertise !!!
                            </p>
                            <p>
                                vous ête une entréprise ou un particulier, ONG, un service public ou social ;
                                vous avez une sensibilisation, un projet à promouvoir ou une idée à véhiculer ?
                                Nous allons transformer vos idées en de belles images animées !!!
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

                </div>



                <section class="section">
                    <div class="service-links-group">voulez vous voir <a href="">nos formations ?</a></div>
                    chez nous il est important que vous comprenez d'abord
                    <br>discutez avec nous
                    <br>Notre slogan c'est : un bon travail en un temps record !!!
                </section>
            </div>
            {{-- <button class="btn btn-primary" type="submit">contacter nous</button> --}}

        </div>

    @endsection
</div>
