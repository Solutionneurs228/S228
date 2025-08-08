@extends('base')
@section('title', 'S228 contact')

@section('Demande de devis')
@section('meta_description',
    'Réparation ordinateur, photographie, création de cartes de visite, affiches publicitaires.
    Demandez votre devis gratuit dès maintenant.')




@section('content')

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
            <form
            action="{{ route('contact.store') }}"
            method="POST">
            @csrf

                <div class="form-container">
                    <div>
                        <div class="contact-rows">
                            {{-- <div>
                                <label for="" class="contact-label">Nom Complet</label>
                            </div> --}}

                            <div>
                                <input type="text" name="name" placeholder="votre nom complet" class="contact-input" required>
                            </div>
                        </div>
                        <div class="contact-rows">
                            {{-- <div>
                                <label for="" class="contact-label">Télephone</label>
                            </div> --}}
                            <div>
                                <input type="text" name="phone" placeholder="votre télephone" class="contact-input" required>
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

</div>
@endsection







