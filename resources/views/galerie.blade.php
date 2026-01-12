@extends('base')

@section('title', 'S228 Galerie')

@section('content')

    <link rel="stylesheet" href="../css/gallery.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/gallery.css') }}"> --}}

    <section class="gallery-section">
        <h1 class="gallery-main-title">S228 Galerie</h1>

        <div class="gallery-theme">
            <h2 class="theme-title">Événements</h2>
            <p class="theme-desc">Photos et vidéos officielles</p>

            <div class="gallery-grid">

                {{-- IMAGE --}}
                <div class="gallery-item" data-type="image" data-src="{{ asset('images/eric.webp') }}"
                    data-title="Ouverture officielle" data-desc="Cérémonie d’ouverture du projet S228">
                    <img src="{{ asset('images/eric.webp') }}">
                </div>

                {{-- VIDEO LOCALE --}}
                <div class="gallery-item" data-type="video" data-src="{{ asset('videos/gedeon.mp4') }}"
                    data-title="Discours" data-desc="Discours du coordinateur général">
                    <video controls poster="{{ asset('images/gedeon-preview.png') }}" muted preload="metadata"></video>

                    <span class="play-icon">▶</span>
                </div>



                {{-- YOUTUBE --}}
                <div class="gallery-item" data-type="youtube" data-src="https://www.youtube.com/embed/hRNwlx2lE9k"
                    data-title="Résumé vidéo" data-desc="Moments forts de l’événement">
                    <img src="https://img.youtube.com/vi/hRNwlx2lE9k/hqdefault.jpg">
                    <span class="play-icon">▶</span>
                </div>

                 {{-- IMAGE --}}
                <div class="gallery-item" data-type="image" data-src="{{ asset('images/eric.webp') }}"
                    data-title="Ouverture officielle" data-desc="Cérémonie d’ouverture du projet S228">
                    <img src="{{ asset('images/eric.webp') }}">
                </div>

                {{-- VIDEO LOCALE --}}
                <div class="gallery-item" data-type="video" data-src="{{ asset('videos/gedeon.mp4') }}"
                    data-title="Discours" data-desc="Discours du coordinateur général">
                    <video controls poster="{{ asset('images/gedeon-preview.png') }}" muted preload="metadata"></video>

                    <span class="play-icon">▶</span>
                </div>



                {{-- YOUTUBE --}}
                <div class="gallery-item" data-type="youtube" data-src="https://www.youtube.com/embed/hRNwlx2lE9k"
                    data-title="Résumé vidéo" data-desc="Moments forts de l’événement">
                    <img src="https://img.youtube.com/vi/hRNwlx2lE9k/hqdefault.jpg">
                    <span class="play-icon">▶</span>
                </div>

            </div>
        </div>

        <div class="gallery-theme">
            <h2 class="theme-title">Événements</h2>
            <p class="theme-desc">Photos et vidéos officielles</p>

            <div class="gallery-grid">

                {{-- IMAGE --}}
                <div class="gallery-item" data-type="image" data-src="{{ asset('images/yovo.webp') }}"
                    data-title="Ouverture officielle" data-desc="Cérémonie d’ouverture du projet S228">
                    <img src="{{ asset('images/yovo.webp') }}">
                </div>

                {{-- VIDEO LOCALE --}}
                <div class="gallery-item" data-type="video" data-src="{{ asset('videos/moba.mp4') }}" data-title="Discours"
                    data-desc="Discours du coordinateur général">
                    <video controls duration muted preload="metadata"></video>
                    <span class="play-icon">▶</span>
                </div>

                {{-- YOUTUBE --}}
                <div class="gallery-item" data-type="youtube" data-src="https://www.youtube.com/embed/hRNwlx2lE9k"
                    data-title="Résumé vidéo" data-desc="Moments forts de l’événement">
                    <img src="https://img.youtube.com/vi/hRNwlx2lE9k/hqdefault.jpg">
                    <span class="play-icon">▶</span>
                </div>

            </div>
        </div>
    </section>

    {{-- LIGHTBOX --}}
    <div class="lightbox" id="lightbox">
        <span class="close" id="close">×</span>
        <span class="counter" id="counter"></span>

        <button class="nav prev" id="prev">‹</button>
        <button class="nav next" id="next">›</button>

        <div class="lightbox-body">
            <div class="lightbox-content" id="lightboxContent"></div>
            <div class="lightbox-meta">
                <h3 id="lbTitle"></h3>
                <p id="lbDesc"></p>
            </div>
        </div>
    </div>

    <script src="../js/gallery.js"></script>
    {{-- <script src="{{ asset('js/gallery.js') }}"></script> --}}
@endsection
