@extends('base')


@section('title', 'about')
<div class="home">
    @section('slide')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="../images/2.JPG" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">MTC-DIGIT</h5>
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
                                    Bienvenue chez <b>MTC-DIGIT</b> , votre partenaire de confiance
                                    pour des services de maintenance informatique, photographie, reportage,
                                    montage vidéo, graphisme et développement web.

                                    {{-- avec un engagement inégalé envers la qualité et la satisfaction de nos
                                    clients. --}}
                                </p>
                            </div>

                        </div>

                    </section>
                    <section section class="section" id="">
                        <div class="boxes2">
                            <div class="about-box2">
                                <div class="wrapperText">
                                    <h5 class="card-title">
                                        NOTRE HISTOIRE
                                    </h5>
                                    <p class="card-text">
                                        Le projet de création de MTC-DIGIT a commencé par un simple rêve dans la tête de son
                                        créateur en 2020.
                                        mais très vite ce rêve commence à voir sa réalisation par l'ouverture d'un atelier
                                        de Maintenance Informatique
                                        et de Photographie-Vidéographie avec quelques autres services disponibles. en suite
                                        s'est ajouté le design graphique.
                                        Vers la fin de l'année 2022 MTC-DIGIT acceuil le Developpement de sites web et
                                        d'Applications mobiles.
                                        Depuis ses debuts, MTC-DIGIT rend des services très apréciés, offre des formations,
                                        des stages et une assistance informatique très louée de ses bénéficiaires.
                                        MTC-DIGIT a été et continue d'être un partenaire de confiance dans tout ses domaines
                                        d'action.
                                    </p>

                                </div>

                            </div>
                            <div class="about-box2">
                                <div class="wrapperText">
                                    <h5 class="card-title">
                                        NOS MISSIONS
                                    </h5>
                                    <p class="card-text">
                                        Nos missions sont entre-autres :

                                    </p>
                                    <ul>
                                        <li>
                                            Vous offrir des solutions complètes et innovantes,
                                            adaptées à vos besoins spécifiques dans nos différents domaines d'action
                                        </li>
                                        <li>
                                            Aider les entréprises et particuliers à tirer meilleur profit de la technology
                                            et du Digital
                                        </li>
                                    </ul>

                                </div>

                            </div>
                            <div class="about-box2">
                                <div class="wrapperText">
                                    <h5 class="card-title">
                                        NOS VALEURS
                                    </h5>
                                    <p class="card-text">
                                        En vue de vous garantir des services à la hauteur de vos attente, nous incarnons un certain nombre de valeurs.
                                    </p>
                                    <ul>
                                        <li>
                                            L'honetété est la première de nos valeurs.
                                        </li>
                                        <li>
                                            Dans le même sens nous savons reconnaitre nos limites et reparer nos insuffisances.
                                        </li>
                                        <li>
                                            Biensûre nous voulons l'argent mais nous savons que nous devons vous satisfaire pour mériter ce argent.
                                        </li>

                                        Juste essayez nous !!!
                                    </ul>

                                </div>

                            </div>
                            <div class="about-box2">
                                <div class="wrapperText">
                                    <h5 class="card-title">
                                        NOS VISIONS
                                    </h5>
                                    <p class="card-text">
                                        MTC-DIGIT envisage
                                        Dans le but de créer des solutions pertinentes en informatique et dans le digital,
                                        MTC-DIGIT compte renforcer ses capacités de .

                                        Nos perspectives sont très sensibles que nous les maintenons sécretes jusqu'à leur mise en oeuvre.
                                    </p>

                                </div>

                            </div>
                            <div class="about-box2">
                                <div class="wrapperText">
                                    <h5 class="card-title">
                                        DESCRIPTION
                                    </h5>
                                    <p class="card-text">
                                        Bienvenue chez MTC-DIGIT, votre partenaire de confiance
                                        pour des services de maintenance informatique, photographie, reportage,
                                        montage vidéo, graphisme et développement web.
                                        Notre mission est de vous offrir des solutions complètes et innovantes,
                                        adaptées à vos besoins spécifiques,
                                        avec un engagement inégalé envers la qualité et la satisfaction de nos
                                        clients.
                                    </p>

                                </div>

                            </div>
                        </div>
                    </section>



                    <section class="section">
                        <div class="service-links-group">voulez vous voir <a href="">nos formations ?</a></div>
                        chez nous il est important que vous comprenez d'abord
                        <br>discutez avec nous
                        <br>Notre slogan c'est : un bon travail en un temps record !!!
                    </section>

                </div>




            </div>
        </div>

    @endsection
</div>
