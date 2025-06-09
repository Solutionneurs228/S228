@extends('base')

@section('title', 'S228')

<div class="home">

    @section('slide')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto " src="images/mir.JPG" alt="First slide">

                    {{-- <div class="carousel-caption d-md-block"> --}}
                    <div class="carousel-caption">
                        <h5 class="home-title">MAINTENANCE INFORMATIQUE</h5>
                        <p class="home-description">Réparation des ordinateurs - Assistance informatique ...</p>
                    </div>
                </div>

                <div class="carousel-item slide-img">
                    <img class="d-block w-100 h-auto" src="images/photo.JPG" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">Photographe & Vidéographie</h5>
                        <p class="home-description">Agrandissements - reportage et montage vidéo - vidéo pubs</p>
                    </div>
                </div>

                <div class="carousel-item slide-img">
                    <img class="d-block w-100 h-auto" src="images/web.JPG" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">Développement Web & Mobile</h5>
                        <p class="home-description">Création de sites webs - applications mobiles</p>
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


    @section('content')
        <a href="{{ route('admin') }}">page admin</a>


        <div class="session accroche">


        </div>

        <div class="session">

            <Br>


            <h1 class="big-title">NOS SERVICES tg</h1>

            <div class="session-content">
                <!-- FRONTEND BOXES---------------------------------------------------- -->
                <div class="boxes">
                    <div class="box">

                        <div class="webContent">

                            <div class="contentImg">
                                <a href="#" target="_blank"><img src="images/mir1.JPG" class="contentImage"></a>
                            </div>

                            <div class="wrapperText">
                                <div>
                                    <h5 class="card-title">
                                        Maintenance informatique
                                    </h5>
                                    <p class="card-text">
                                        Entretien et réparation des ordinateurs,
                                        Installation de logiciels, Assistance informatique …
                                    </p>
                                </div>

                                <div class="btn-right">

                                    <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="box">

                        <div class="webContent">

                            <div class="contentImg">
                                <a href="#" target="_blank"><img src="images/photo1.JPG" class="contentImage"></a>
                            </div>

                            <div class="wrapperText">
                                {{-- <h2 class="card-title title"> --}}
                                <div>
                                    <h5 class="card-title">
                                        Photographie & Vidéographie
                                    </h5>
                                    <p class="card-text">Prise de vues, Photos shooting, Agrandissement de photos,
                                        Reportages photo & vidéo ...
                                    </p>
                                </div>
                                <div class="btn-right">

                                    <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="box">
                        <div class="webContent">

                            <div class="contentImg">
                                <a href="#" target="_blank"><img src="images/web1.JPG" class="contentImage"></a>
                            </div>

                            <div class="wrapperText">
                                {{-- <h2 class="card-title title"> --}}
                                <div>
                                    <h5 class="card-title">
                                        Développement Web
                                    </h5>
                                    <p class="card-text">
                                        Création de sites web et applications mobile sur mesure
                                    </p>
                                </div>
                                <div class="btn-right">

                                    <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="box">
                        <div class="webContent">
                            <div class="contentImg">
                                <a href="#" target="_blank"><img src="images/infographie.JPG"
                                        class="contentImage"></a>
                            </div>

                            <div class="wrapperText">
                                {{-- <h2 class="card-title title"> --}}
                                <div>
                                    <h5 class="card-title">
                                        Infographie
                                    </h5>
                                    <p class="card-text">
                                        Création de cartes de visites, d'invitations, logos, badges, affiches
                                        pubs, bâches, autocollants ...
                                    </p>
                                </div>
                                <div class="btn-right">

                                    <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div>
        <Br>

        <div class="session">
            <h1 class="big-title">NOS OFFRES DE FORMATIONS</h1>



            <div class="formations-boxes">

                <div class="box">

                    <div>
                        <div class="icone-titre">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Initiation à l'informatique</h5>
                        </div>
                        <p class="card-text">Les connaissances de base en informatique, familiarisation avec
                            l'ordinateur, étude du clavier et de la souris... </p>
                    </div>

                    <div class="btn-right">

                        <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                    </div>

                </div>

                <div class="box">

                    <div>
                        <div class="icone-titre">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Informatique Avancée</h5>
                        </div>
                        <p class="card-text">En fonction du niveau de l'apprenant la formation va couvrir les
                            bases et
                            les profondeurs de chaque étude pour lui assurer une bonne maitrise à l'issu ...</p>
                    </div>
                    <div class="btn-right">

                        <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                    </div>

                </div>

                <div class="box">

                    <div>
                        <div class="icone-titre">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Développement Web</h5>
                        </div>

                        <p class="card-text">Création de sites web et applications mobile sur mesure ...</p>
                    </div>
                    <div class="btn-right">

                        <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                    </div>

                </div>

                <div class="box">

                    <div>
                        <div class="icone-titre">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Montage Vidéo</h5>
                        </div>

                        <p class="card-text">Techniques de montage vidéo en fonction du type d'événement...</p>
                    </div>
                    <div class="btn-right">

                        <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                    </div>

                </div>

                <div class="box">

                    <div>
                        <div class="icone-titre">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Infographie</h5>
                        </div>

                        <p class="card-text">Création de cartes de visites, d'invitations,
                            logos, bages, affiches pubs ...</p>
                    </div>
                    <div class="btn-right">

                        <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                    </div>

                </div>

                <div class="box">

                    <div>
                        <div class="icone-titre">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Photoshop</h5>
                        </div>

                        <p class="card-text">Maitrise des bases et des outils les plus importants de Photoshop,
                            étude des différents types de conceptions possibles avec Photoshop...</p>
                    </div>
                    <div class="btn-right">

                        <a href="{{ route('services/mir') }}" class="btn btn-primary">voir la page</a>
                    </div>

                </div>

            </div>
        </div>



        <div class="session">
            <h1 class="big-title">Laissez nous un message</h1>

            <div class="session-content contact-bloc">
                <div class="contact-bloc-content">
                    <div class="contact-bloc-part adress">
                        <div class="adress-group">
                            <div><strong>Tel :</strong></div>
                            <div><i>+228 92 67 15 33</i></div>
                            <div><i>+228 97 57 49 46</i></div>

                        </div>
                        <div class="adress-group">
                            <div> <strong>Email : </strong></div>
                            <div><i>aessotchossim@gmail.com</i></div>
                            <div><i>mtcdigit@gmail.com</i></div>

                        </div>
                    </div>
                    <div class="contact-bloc-part form">
                        <form>
                            <div class="form-container">
                                <div>
                                    <div class="contact-rows">
                                        {{-- <div>
                                            <label for="" class="contact-label">Nom Complet</label>
                                        </div> --}}

                                        <div>
                                            <input type="text" placeholder="votre nom complet" class="contact-input">
                                        </div>
                                    </div>
                                    <div class="contact-rows">
                                        {{-- <div>
                                            <label for="" class="contact-label">Télephone</label>
                                        </div> --}}
                                        <div>
                                            <input type="text" placeholder="votre télephone" class="contact-input">
                                        </div>
                                    </div>
                                    <div class="contact-rows">
                                        {{-- <div>
                                            <label for="" class="contact-label">E-mail</label>
                                        </div> --}}
                                        <div>
                                            <input type="text" placeholder="votre adresse E-mail"
                                                class="contact-input">
                                        </div>
                                    </div>
                                    {{-- <div>
                                        <label for="message" class="contact-label">Votre Message</label>
                                    </div> --}}
                                    <textarea name="" id="" placeholder="Saisissez votre massage ici" cols="30" rows="3"
                                        class="contact-input"></textarea>
                                    <div class="contact-btn-div">
                                        <button class="btn my-2 my-sm-0 contact-btn" type="submit">Soumettre</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>


        </div>




    @endsection
</div>
