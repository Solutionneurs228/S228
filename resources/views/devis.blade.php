@extends('base')
{{-- @extends('layouts.app') --}}

@section('Demande de devis')
@section('meta_description',
    'Réparation ordinateur, photographie, création de cartes de visite, affiches publicitaires.
    Demandez votre devis gratuit dès maintenant.')




@section('content')
    <div class="home devis-home">
        <div class="session devis-form-container">
            <div class="elt-title">
                <h1 class="big-title">Demande de devis</h1>
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
                                <input type="text" name="service" placeholder="lequel de nos services désirez-vous"
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
@endsection
