@extends('layouts.base')

@section('title', 'S228')

<div class="home">

@section('slide')
    @include('partials.slider')
@endsection


    @section('content')


        <div class="session hook">
            <div class="hook-content">
                <h1 class="big-title">Solutionneurs228</h1>
                <h3 class="hook-tag">un bon travail en un temps reccord !</h3>
                <p class="hook-description">
                    Bienvenue chez SOLUTIONNEURS228,
                    votre partenaire de confiance pour des services de maintenance informatique,
                    photographie, reportage, montage vidéo, graphisme et développement web.
                </p>
                <p class="hook-description hook-description2">
                    Sur plus de 90% de nos services nous avons un système de réduction qui va vous intéresser.
                    <br>
                    Découvrez ce
                    <a href="https://wa.me/+22892671533?text=salut%2C%20je%20souhaite%20m'informer%20sur%20votre%20système%20de%20réduction%20de%20prix."
                        target="_blank">
                        💬 système de réduction des prix
                    </a>
                </p>
            </div>
        </div>


        <div class="session">

            <Br>


            <h1 class="big-title">NOS SERVICES</h1>

            <div class="session-content">
                <!-- FRONTEND BOXES---------------------------------------------------- -->
                <div class="boxes">
                    <div class="box">

                        <div class="webContent">

                            <div class="contentImg">
                                <a href="{{ route('services.maintenance') }}" target="_blank"><img src="../images/mir1.webp"
                                        alt="service de maintenance" class="contentImage"></a>
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

                                    <a href="{{ route('services.maintenance') }}" class="btn btn-primary">voir la page</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="box">

                        <div class="webContent">

                            <div class="contentImg">
                                <a href="{{ route('services.photographie') }}" target="_blank"><img
                                        src="../images/photo1.webp" alt="service de photographie" class="contentImage"></a>
                            </div>

                            <div class="wrapperText">
                                <div>
                                    <h5 class="card-title">
                                        Photographie & Vidéographie
                                    </h5>
                                    <p class="card-text">Prise de vues, Photos shooting, Agrandissement de photos,
                                        Reportages photo & vidéo ...
                                    </p>
                                </div>
                                <div class="btn-right">

                                    <a href="{{ route('services.photographie') }}" class="btn btn-primary">voir la page</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="box">
                        <div class="webContent">

                            <div class="contentImg">
                                <a href="{{ route('services.webdev') }}" target="_blank"><img src="../images/web1.webp"
                                        alt="service web dev" class="contentImage"></a>
                            </div>

                            <div class="wrapperText">
                                <div>
                                    <h5 class="card-title">
                                        Développement Web
                                    </h5>
                                    <p class="card-text">
                                        Création de sites web et applications mobile sur mesure
                                    </p>
                                </div>
                                <div class="btn-right">

                                    <a href="{{ route('services.webdev') }}" class="btn btn-primary">voir la page</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="box">
                        <div class="webContent">
                            <div class="contentImg">
                                <a href="{{ route('services.infographie') }}" target="_blank"><img
                                        src="../images/infographie.webp" alt="service infographie"
                                        class="contentImage"></a>
                            </div>

                            <div class="wrapperText">
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

                                    <a href="" class="btn btn-primary">voir la page</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div>
        <Br>


        <div class="session reduce">
            <div class="btn-reduction">
                <a href="https://wa.me/+22892671533?text=salut%2C%20je%20souhaite%20m'informer%20sur%20votre%20système%20de%20réduction%20de%20prix."
                    target="_blank">
                    Découvrez notre <br>
                    système de réduction des prix
                </a>
            </div>
            <div class="reduce-img">
                <img src="../images/reduce.png" alt="">
            </div>
            <div class="reduce-bottom">

            </div>

            {{-- <p> Sur plus de 90% de nos services nous avons un système de réduction qui va vous intéresser.</p> --}}
        </div>

        <div class="session formations">
            <h1 class="big-title">NOS OFFRES DE FORMATIONS</h1>



            <div class="formations-boxes">

                <div class="box">

                    <div>
                        <div class="icone-title">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Initiation à l'informatique</h5>
                        </div>
                        <p class="card-text">Les connaissances de base en informatique, familiarisation avec
                            l'ordinateur, étude du clavier et de la souris... </p>
                    </div>

                    <div class="btn-right">
                        <a href="{{ route('formation') }}" class="btn btn-primary">voir la
                            page</a>
                    </div>

                </div>

                <div class="box">

                    <div>
                        <div class="icone-title">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Informatique Bureautique</h5>
                        </div>
                        <p class="card-text">En fonction du niveau de l'apprenant la formation va couvrir les
                            bases et
                            les profondeurs de chaque étude pour lui assurer une bonne maitrise à l'issu ...</p>
                    </div>
                    <div class="btn-right">

                        <a href="{{ route('formation') }}" class="btn btn-primary">voir la
                            page</a>
                    </div>

                </div>

                <div class="box">

                    <div>
                        <div class="icone-title">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Développement Web</h5>
                        </div>

                        <p class="card-text">Création de sites web et applications mobile sur mesure ...</p>
                    </div>
                    <div class="btn-right">

                        <a href="{{ route('formation') }}" class="btn btn-primary">voir la
                            page</a>
                    </div>

                </div>

                <div class="box">

                    <div>
                        <div class="icone-title">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Montage Vidéo</h5>
                        </div>

                        <p class="card-text">Techniques de montage vidéo en fonction du type d'événement...</p>
                    </div>
                    <div class="btn-right">

                        <a href="{{ route('formation') }}" class="btn btn-primary">voir la
                            page</a>
                    </div>

                </div>

                <div class="box">

                    <div>
                        <div class="icone-title">
                            <span class="icon"><i class="fa-solid fa-2x fa-computer"></i></span> <!-- Ordinateur -->
                            <h5 class="formation-card-title">Infographie</h5>
                        </div>

                        <p class="card-text">Création de cartes de visites, d'invitations,
                            logos, bages, affiches pubs ...</p>
                    </div>
                    <div class="btn-right">

                        <a href="{{ route('formation') }}" class="btn btn-primary">voir la
                            page</a>
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

                        <a href="{{ route('formation') }}" class="btn btn-primary">voir la
                            page</a>
                    </div>

                </div>

            </div>
        </div>


        <div class="session parteners">
            <h1 class="big-title">Nos partenaires</h1>
            <div class="parteners-all">

                <div class="partener">
                    <div class="partener-img">
                        <img src="../images/sostv.png" alt="partener1">
                    </div>
                    <p class="partener-description">
                        1ère chaine de Télé 100% santé en Afrique.
                        <br>
                        <a href="https://www.sos-docteur.tv/" target="_blank" rel="noopener noreferrer">visitez la
                            chaîne</a>
                    </p>
                </div>


                <div class="partener">
                    <div class="partener-img">
                        <img src="../images/qualitech.png" alt="partener1">
                    </div>
                    <p class="partener-description">photographie, vidéographie, graphique design, sérigraphie, décoration
                        3D ...</p>
                </div>

                <div class="partener">
                    <div class="partener-img">
                        <img src="../images/aide.png" alt="partener1">
                    </div>
                    <p class="partener-description">formation, conseil, audit entréprises, coaching ...</p>
                </div>

            </div>

            {{-- <span>Ils nous font tous confiance</span> --}}
        </div>



        <div class="session home-gallery">
            <div class="gallery-header">
                <h2 class="big-title">Notre Galerie</h2>
                <p>Un aperçu de nos réalisations récentes</p>
            </div>

            <div class="gallery-grid">
                <!-- Image -->
                <div class="gallery-item">
                    <img src="../images/eric.webp" alt="Photo événement">
                </div>

                <div class="gallery-item">
                    <img src="../images/yovo.webp" alt="Photo événement">
                </div>

                <!-- Vidéo -->
                <div class="gallery-item video">
                    <video controls preload="metadata">
                        <source src="{{ asset('videos/moba.mp4') }}" type="video/mp4">
                    </video>
                    {{-- <span class="play-icon">▶</span> --}}
                </div>
                <!-- Vidéo -->
                <div class="gallery-item video">
                    <iframe src="https://www.youtube.com/embed/hRNwlx2lE9k"
                        title="S228/la prestation de la chorale Salut des âmes des AD tchannadè lors du mariage de yovo &amp; Immaculée"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>


            </div>

            <div class="gallery-action">
                <a href="{{ route('galerie') }}" class="btn-gallery">Voir toute la galerie</a>
            </div>

        </div>




        <div class="session">
            <h1 class="big-title">Laissez nous un message</h1>

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
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="form-container">
                            <div>
                                <div class="contact-rows">

                                    <div>
                                        <input type="text" name="name" placeholder="votre nom complet"
                                            class="contact-input" required>
                                    </div>
                                </div>
                                <div class="contact-rows">
                                    <div>
                                        <input type="text" name="phone" placeholder="votre télephone"
                                            class="contact-input" required>
                                    </div>
                                </div>
                                <div class="contact-rows">
                                    {{-- <div>
                                        <label for="" class="contact-label">E-mail</label>
                                    </div> --}}
                                    <div>
                                        <input type="email" name="email" placeholder="votre adresse E-mail"
                                            class="contact-input" required>
                                    </div>
                                </div>
                                {{-- <div>
                                    <label for="message" class="contact-label">Votre Message</label>
                                </div> --}}
                                <textarea name="message" id="" placeholder="Saisissez votre massage ici" cols="30" rows="3"
                                    class="contact-input" required></textarea>
                                <div class="contact-btn-div">
                                    <button class="btn my-2 my-sm-0 contact-btn" type="submit">Soumettre</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            {{-- <a href="{{ route('admin') }}">page admin</a> --}}
        </div>




    @endsection
</div>
