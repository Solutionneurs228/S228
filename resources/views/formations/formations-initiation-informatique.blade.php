@extends('base')


@section('title', 'MTC Initation Informatique')

<div class="home">
    @section('slide')
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item slide-img active">
                    <img class="d-block w-100 h-auto formation-img" src="../images/formations.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="home-title">Nos formations ....</h5>
                        <p class="home-description">la plus part de nos formations sont disponibles en ligne</p>
                    </div>
                </div>



            </div>

        </div>
    @endsection

    @section('content')
        <div class="big-container">

            <div class="container">
                <div class="elt formation-elt">
                    <div class="elt-title">
                        {{-- <h1 class="big-title">voici certaines de nos formations</h1> --}}
                       <br>
                       <br>
                       <br>
                        <p class="hook-description">
                            Ce sont là quelques formations que nous proposons
                            <br>
                            Elle sont très flexible et peuvent être programmées
                            en fonction de vos disponibilités
                        </p>
                    </div>
                    <div class="service-sommaire">
                        <div>
                            <a href="#initiation">
                                <span class="titleNumber">01 . </span>
                                <span class="sommaireText">Initiation à l'informatique</span>
                            </a>
                        </div>

                        <div>
                            <a href="#bureautique">
                                <span class="titleNumber">02 . </span>
                                <span class="sommaireText">Informatique Bureautique</span>
                            </a>
                        </div>
                        <div>
                            <a href="#dev">
                                <span class="titleNumber">03 . </span>
                                <span class="sommaireText">Développement web</span>
                            </a>
                        </div>
                        <div>
                            <a href="#montage">
                                <span class="titleNumber">04 . </span>
                                <span class="sommaireText">Montage vidéo</span>
                            </a>
                        </div>
                        <div>
                            <a href="#formationinfographie">
                                <span class="titleNumber">05 . </span>
                                <span class="sommaireText">Infographie</span>
                            </a>
                        </div>
                        <div>
                            <a href="#formationphotoshop">
                                <span class="titleNumber">06 . </span>
                                <span class="sommaireText">Photoshop</span>
                            </a>
                        </div>





                    </div>


                    <div class="home devis-home">
                        <div class="session devis-form-container">
                            <div class="elt-title">
                                <h1 class="big-title">Demande d'inscription </h1>
                            </div>

                            <form class=""
                            action="{{ route('devis.store') }}"
                            method="POST">
                            @csrf

                                <div class="form devis-form">

                                        <div class="form-rows">
                                            {{-- <div>
                                                            <label for="" class="contact-label">Nom Complet</label>
                                                        </div> --}}

                                            <div>
                                                <input type="text" name="name" placeholder="votre nom complet" class="contact-input">
                                            </div>
                                        </div>
                                        <div class="form-rows">
                                            {{-- <div>
                                                            <label for="" class="contact-label">Nom Complet</label>
                                                        </div> --}}

                                            <div>
                                                <input type="text" name="adress" placeholder="votre ville et pays ex : Lomé-Togo" class="contact-input">
                                            </div>
                                        </div>
                                        <div class="form-rows">
                                            {{-- <div>
                                                            <label for="" class="contact-label">Télephone</label>
                                                        </div> --}}
                                            <div>
                                                <input type="text" name="phone" placeholder="votre N° de télephone" class="contact-input">
                                            </div>
                                        </div>
                                        <div class="form-rows">
                                            {{-- <div>
                                                            <label for="" class="contact-label">service désiré</label>
                                                        </div> --}}
                                            <div>
                                                <input type="text" name="service" placeholder="laquelle de nos formations désirez-vous"
                                                    class="contact-input">
                                            </div>
                                        </div>
                                        <div class="form-rows">
                                            {{-- <div>
                                                            <label for="" class="contact-label">E-mail</label>
                                                        </div> --}}
                                            <div>
                                                <input type="email" name="email" placeholder="votre adresse E-mail" class="contact-input">
                                            </div>
                                        </div>
                                        <div class="form-rows">
                                            {{-- <div>
                                                        <label for="message" class="contact-label">Votre Message</label>
                                                    </div> --}}

                                           <div>
                                            <textarea name="message" id="" placeholder="Décrivez votre besoins ici" cols="30" rows="3"
                                            class="contact-input"></textarea>
                                           </div>
                                        </div>
                                        <p>Nous vous contacterons le plus tôt possible (en moins de 24H)</p>
                                        <div class="contact-btn-div form-rows">
                                            <button class="btn my-2 my-sm-0 contact-btn" type="submit">Soumettre</button>
                                        </div>

                                </div>
                            </form>
                        </div>

                    </div>


                    <div class="lien-formation">
                        pour toute information
                        <a href="https://wa.me/+22892671533?text=Bonjour%2C%20je%20souhaite%20me%20renseigner%20sur%20une%20formation.">écrivez nous sur whatsapp</a>
                        <p>nous vous répondrons dans un bref delais </p>

                    </div>




                    {{-- <div class="boxes ">

                        <div class="box">
                            <div class="webContent">

                                <div>
                                    <div class="webContentTop">
                                        <div>
                                            <a
                                                href=""
                                                class="wrapperLink Indicator"
                                                target="_blank"></a>
                                        </div>
                                        <a
                                            href=""
                                            class="live"
                                            target="_blank"><span>Disponible en
                                                ligne</span></a>
                                        <a
                                            href=""
                                            class="wrapperLink" target="_blank">
                                            <iconify-icon
                                                icon="mdi:github"></iconify-icon>
                                            <!-- <i class="uil uil-github-alt"></i> -->
                                        </a>
                                    </div>

                                    <div class="contentImg">
                                        <a
                                            href=""
                                            target="_blank"><img
                                                src="docs/initiation.jpg"
                                                class="contentImage"></a>
                                    </div>

                                    <div class="wrapperText">

                                        <h2 class="title">
                                            Initiation à l'Informatique
                                        </h2>
                                        <p>
                                            Premier contact avec l'outils
                                            informatique, les connaissance de
                                            base
                                            dans l'utilisation de l'ordinateur.
                                            <br>
                                            <br>
                                            modules : WINDOWS, WORD, EXCEL,
                                            POWERPOINT & INTERNET
                                        </p>

                                    </div>

                                </div>

                                <div>
                                    <div class="software">
                                        <span>2 semaine</span>
                                        <span>2H/jr</span>
                                    </div>
                                    <br>
                                    <div class="box_btn">
                                        <a
                                            href="https://wa.me/+22892671533?text=Salut MTC je vous contact au sujet de l'Initiation à l'informatique"
                                            target="_blank"
                                            style="text-decoration: none; color: #00eaff;">
                                            s'informer et/ou s'inscrire
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="box">
                            <div class="webContent">

                                <div>
                                    <div class="webContentTop">
                                        <div>

                                            <a
                                                href=""
                                                class="wrapperLink Indicator"
                                                target="_blank"></a>
                                        </div>
                                        <a
                                            href=""
                                            class="live"
                                            target="_blank"><span>Disponible en
                                                ligne</span></a>
                                        <a
                                            href=""
                                            class="wrapperLink" target="_blank">
                                            <iconify-icon
                                                icon="mdi:github"></iconify-icon>
                                            <!-- <i class="uil uil-github-alt"></i> -->
                                        </a>
                                    </div>

                                    <div class="contentImg">
                                        <a
                                            href=""
                                            target="_blank"><img
                                                src="docs/bureautique.jpg"
                                                class="contentImage"></a>
                                    </div>

                                    <div class="wrapperText">

                                        <h2 class="title">
                                            Informatique Bureautique
                                        </h2>
                                        <p>Il s'agit ici d'une étude plus ou
                                            moins
                                            profonde de l'outils informatique,
                                            de la
                                            quête d'une bonne maitrise de
                                            l'ordinateur et son utilisation.
                                            <br>
                                            <br>
                                            Modules : WINDOWS, WORD, EXCEL,
                                            POWERPOINT, INTERNET
                                        </p>

                                    </div>

                                </div>

                                <div>
                                    <div class="software">
                                        <span>3 mois</span>
                                        <span>2H/jr</span>
                                    </div>
                                    <br>
                                    <div class="box_btn">
                                        <a
                                            href="https://wa.me/+22892671533?text=Salut MTC je vous contact au sujet de l'Initiation à l'informatique"
                                            target="_blank"
                                            style="text-decoration: none; color: #00eaff;">
                                            s'informer et/ou s'inscrire
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="box">
                            <div class="webContent">

                                <div>
                                    <div class="webContentTop">
                                        <div>

                                            <a
                                                href=""
                                                class="wrapperLink Indicator"
                                                target="_blank"></a>
                                        </div>
                                        <a
                                            href=""
                                            class="live"
                                            target="_blank"><span>Disponible en
                                                ligne</span></a>
                                        <a
                                            href=""
                                            class="wrapperLink" target="_blank">
                                            <iconify-icon
                                                icon="mdi:github"></iconify-icon>
                                            <!-- <i class="uil uil-github-alt"></i> -->
                                        </a>
                                    </div>

                                    <div class="contentImg">
                                        <a
                                            href=""
                                            target="_blank"><img
                                                src="docs/montage.jpg"
                                                class="contentImage"></a>
                                    </div>

                                    <div class="wrapperText">

                                        <h2 class="title">
                                            Montage Vidéo
                                        </h2>
                                        <p>Maitrise des techniques de montage
                                            vidéo
                                            professionnel,
                                            <br>
                                            <br>
                                            Pratique sur un projet réel.
                                        </p>

                                    </div>

                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div>
                                    <div class="software">
                                        <span>2 semaines</span>
                                        <span>2H/jr</span>
                                    </div>
                                    <br>
                                    <div class="box_btn">
                                        <a
                                            href="https://wa.me/+22892671533?text=Salut MTC je vous contact au sujet de l'Initiation à l'informatique"
                                            target="_blank"
                                            style="text-decoration: none; color: #00eaff;">
                                            s'informer et/ou s'inscrire
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="box">
                            <div class="webContent">

                                <div>
                                    <div class="webContentTop">
                                        <div>

                                            <a
                                                href=""
                                                class="wrapperLink Indicator"
                                                target="_blank"></a>
                                        </div>
                                        <a
                                            href=""
                                            class="live"
                                            target="_blank"><span>Disponible en
                                                ligne</span></a>
                                        <a
                                            href=""
                                            class="wrapperLink" target="_blank">
                                            <iconify-icon
                                                icon="mdi:github"></iconify-icon>
                                            <!-- <i class="uil uil-github-alt"></i> -->
                                        </a>
                                    </div>

                                    <div class="contentImg">
                                        <a
                                            href=""
                                            target="_blank"><img
                                                src="docs/webdev.jpg"
                                                class="contentImage"></a>
                                    </div>

                                    <div class="wrapperText">

                                        <h2 class="title">
                                            Développement Web
                                        </h2>
                                        <p>Le développement web est très vaste mais
                                            cette formation vous donne des bases
                                            solides et très solides pour appréhender
                                            ce domaine.
                                            <br>
                                            <br>
                                            Un projet de fin de formation va vous
                                            permettre de répratiquer et vous assurer
                                            que vous avez maitrisé.
                                        </p>

                                    </div>

                                </div>
                                <br>
                                <br>
                                <div>
                                    <div class="software">
                                        <span>3 mois</span>
                                        <span>2H/jr</span>
                                    </div>
                                    <br>
                                    <div class="box_btn">
                                        <a
                                            href="https://wa.me/+22892671533?text=Salut MTC je vous contact au sujet de l'Initiation à l'informatique"
                                            target="_blank"
                                            style="text-decoration: none; color: #00eaff;">
                                            s'informer et/ou s'inscrire
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="box">
                            <div class="webContent">

                                <div>
                                    <div class="webContentTop">
                                        <div>

                                            <a
                                                href=""
                                                class="wrapperLink Indicator"
                                                target="_blank"></a>
                                        </div>
                                        <a
                                            href=""
                                            class="live"
                                            target="_blank"><span>Disponible en
                                                ligne</span></a>
                                        <a
                                            href=""
                                            class="wrapperLink" target="_blank">
                                            <iconify-icon
                                                icon="mdi:github"></iconify-icon>
                                            <!-- <i class="uil uil-github-alt"></i> -->
                                        </a>
                                    </div>

                                    <div class="contentImg">
                                        <a
                                            href=""
                                            target="_blank"><img
                                                src="docs/installation.jpg"
                                                class="contentImage"></a>
                                    </div>

                                    <div class="wrapperText">

                                        <h2 class="title">
                                            installation de systèmes d'exploitation
                                            & logiciels
                                        </h2>
                                        <p> il s'agit d'une formation très pratique
                                            et abordable en installation de systèmes
                                            d'exploitation (Windows 7, 8, 10, 11) et
                                            logiciels.
                                            <br>
                                            <br>
                                            la formation vous fourni aussi les
                                            moyens de télécharger les logiciels.
                                        </p>

                                    </div>

                                </div>
                                <br>
                                <br>
                                <div>
                                    <div class="software">
                                        <span>2 semaines</span>
                                        <span>2H/jr</span>
                                    </div>
                                    <br>
                                    <div class="box_btn">
                                        <a
                                            href="https://wa.me/+22892671533?text=Salut MTC je vous contact au sujet de l'Initiation à l'informatique"
                                            target="_blank"
                                            style="text-decoration: none; color: #00eaff;">
                                            s'informer et/ou s'inscrire
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="box">
                            <div class="webContent">

                                <div>
                                    <div class="webContentTop">
                                        <div>

                                            <a
                                                href=""
                                                class="wrapperLink Indicator"
                                                target="_blank"></a>
                                        </div>
                                        <a
                                            href=""
                                            class="live"
                                            target="_blank"><span>Disponible en
                                                ligne</span></a>
                                        <a
                                            href=""
                                            class="wrapperLink" target="_blank">
                                            <iconify-icon
                                                icon="mdi:github"></iconify-icon>
                                            <!-- <i class="uil uil-github-alt"></i> -->
                                        </a>
                                    </div>

                                    <div class="contentImg">
                                        <a
                                            href=""
                                            target="_blank"><img
                                                src="docs/autre.jpg"
                                                class="contentImage"></a>
                                    </div>

                                    <div class="wrapperText">

                                        <h2 class="title">
                                            Autres
                                        </h2>
                                        <p>
                                            Nous proposons des services d'assistance
                                            dans l'utilisation de vos ordinateurs et
                                            nous sommes bien disposés pour vous
                                            aider à tirer le meilleur profit de
                                            l'informatique quelque soit votre
                                            domaine d'activité
                                            <br>
                                            <br>
                                            quelque soit votre besoin ; s'il
                                            concerne l'ordinateur, son utilisation
                                            ou l'informatique n'hésitez pas à nous
                                            faire recour
                                        </p>

                                    </div>

                                </div>
                                <br>
                                <br>
                                <div>
                                    <div class="box_btn">
                                        <a
                                            href="https://wa.me/+22892671533?text=Salut MTC je vous contact au sujet de l'Initiation à l'informatique"
                                            target="_blank"
                                            style="text-decoration: none; color: #00eaff;">
                                            Discutons-en !!!
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div> --}}

                    {{-- <section class="section" id="initiation">
                        <div class="sectionTitle">
                            <span class="titleNumber">01 . </span>
                            <h4 class="titleText"> Réparation et entretien des ordinateurs
                                <div class="underline">
                                    <span></span>
                                </div>
                            </h4>
                        </div>

                        <div>

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
                            <a href="{{ route('devis') }}">commander ce service</a>
                            <a href="tel:+22892671533">telephoner</a>
                            <a href="https://wa.me/+22892671533?text=Bonjour%2C%20je%20souhaite%20demander%20un%20devis%20pour%20un%20service%20informatique.">whatsapp</a>
                            <a href="mailto:solutionneurs228@gmail.com">passer par Mail</a>
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
                            <a href="{{ route('devis') }}">commander ce service</a>
                            <a href="tel:+22892671533">telephoner</a>
                            <a href="https://wa.me/+22892671533?text=Bonjour%2C%20je%20souhaite%20demander%20un%20devis%20pour%20un%20service%20informatique.">whatsapp</a>
                            <a href="mailto:solutionneurs228@gmail.com">passer par Mail</a>
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

                            <a href="{{ route('devis') }}">commander ce service</a>
                            <a href="tel:+22892671533">telephoner</a>
                            <a href="https://wa.me/+22892671533?text=Bonjour%2C%20je%20souhaite%20demander%20un%20devis%20pour%20un%20service%20informatique.">whatsapp</a>
                            <a href="mailto:solutionneurs228@gmail.com">passer par Mail</a>
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

                            <a href="{{ route('devis') }}">commander ce service</a>
                            <a href="tel:+22892671533">telephoner</a>
                            <a href="https://wa.me/+22892671533?text=Bonjour%2C%20je%20souhaite%20demander%20un%20devis%20pour%20un%20service%20informatique.">whatsapp</a>
                            <a href="mailto:solutionneurs228@gmail.com">passer par Mail</a>
                        </div>
                        <div class="service-links-group">voulez vous voir <a href="">nos formations ?</a></div>
                        <div class="slogan">Notre slogan : un bon travail en un temps record !!!</div>
                    </section> --}}


                </div>




            </div>

        </div>

    @endsection
</div>
