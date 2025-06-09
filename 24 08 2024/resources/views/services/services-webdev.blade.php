@extends('base')


@section('title', 'MTC Maintenance Informatique')
<div class="home">
    @section('slide')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="../images/2.JPG" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">Développement Web & Mobile</h5>
                        <p class="home-description">Création de sites webs - applications mobiles</p>
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
                                <span class="sommaireText">Site web CV</span>
                            </a>
                        </div>
                      
                    </div>

                    <section class="section" id="reparation">
                        {{-- <div class="mir-service"> --}}
                        <div class="sectionTitle">
                            <span class="titleNumber">01 . </span>
                            <h4 class="titleText"> Création de sites web
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <p>
                                Que vous soyez une entreprise ; petite ou grande, un comerçant ou un particuler, 
                                vous avez besoins d'un site web pour exposer vos activités et/ou vos produits à la vue du monde entier.
                                <br>
                                Vous ête plutôt dans l'E-comerce ; Ne voyez-vous pas à quel point il vous est indispensable d'avoir un site web
                                où l'on peut visiter votre boutique en ligne et y éffectuer des commandes directement et d'une manière proffessionelle ?
                                <br>
                                <br>
                                Nous somme bien indiqués pour vous créer un <b>site web sur mesure</b>. 
                                Nous prénons soins de comprendre vos besoins, vos préférences, les fonctionnalités que vous desirez.
                                avant de passer à la conception.
                                
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
                               Création d'Applications mobiles
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <p>
                                Vous avez plutôt besoins d'une Application mobile à installer sur androïd, iphone ou autre appareil mobile ? 
                                <br>
                                Nous prenons soins de vous la livrer selon vos bésoins, vos préférences avec les fonctionnalités que vous voulez.
                                <br>
                              
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
                                Site web CV
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>
                            <p>
                               savez vous que vous pouvez organiser votre CV comme un site web ?
                                <br>
                                Ceci vous permet d'y mettre toutes les informations séduisante avec, des photos, vidéos si nécéssaires, 
                                toutes autres illustrations.
                                <br>                               
                                Pensez à comment votre employeur sera exité d'aller visiter un site web CV ; une 1ère 
                                <br>
                                pensez à quel impact célà fera sur sa décision
                                <br> 
                                nous pouvons vous assurer que les autres CV n'aurons aucun goût à ses yeux.
                                <br>
                                ça vous tente de <a class="links" href="">voir le mien ?</a>
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

                    <section class="section">
                        <div class="service-links-group">voulez vous voir <a href="">nos formations ?</a></div>
                        chez nous il est important que vous comprenez d'abord
                        <br>discutez avec nous
                        <br>Notre slogan c'est : un bon travail en un temps record !!!
                    </section>

                </div>




            </div>
            {{-- <button class="btn btn-primary" type="submit">contacter nous</button> --}}

        </div>

    @endsection
</div>
