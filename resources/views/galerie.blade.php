@extends('base')
@section('title', 'S228 Galérie')

@section('Demande de devis')
@section('meta_description',
    'Réparation ordinateur, photographie, création de cartes de visite, affiches publicitaires.
    Demandez votre devis gratuit dès maintenant.')




@section('content')
    <div class="home devis-home">

        <h1 class="big-title gallery-title">S228 galerie</h1>
        <p class="gallery-subtitle">
            Photos et vidéos de nos réalisations
        </p>

        <div class="gallery-grid">

            {{-- IMAGE der --}}
            <div class="gallery-card gallery-item photo" data-type="image"
                data-src="{{ asset('images/eric.webp') }}">
                <img src="{{ asset('images/eric.webp') }}">
            </div>







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
                <span class="play-icon">▶</span>
            </div>
            <!-- Vidéo -->
            <div class="gallery-item video">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/hRNwlx2lE9k"
                    title="S228/la prestation de la chorale Salut des âmes des AD tchannadè lors du mariage de yovo &amp; Immaculée"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <span class="play-icon">▶</span>
            </div>


        </div>

    </div>
@endsection
