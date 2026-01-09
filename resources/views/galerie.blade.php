@extends('base')

@section('title', 'S228 Galerie')

@section('content')
<section class="gallery-section">

    <h1 class="gallery-main-title">S228 Galerie</h1>

    <!-- ===== THEME ===== -->
    <div class="gallery-theme">
        <h2 class="theme-title">Événements & Reportages</h2>
        <p class="theme-desc">Photos et vidéos officielles</p>

        <div class="gallery-grid">

            <!-- IMAGE -->
            <div class="gallery-item image"
                 data-title="Inauguration"
                 data-desc="Ouverture officielle">
                <img src="{{ asset('images/eric.webp') }}" alt="">
            </div>

            <!-- VIDEO LOCALE -->

<div class="gallery-item video">
                    <video controls preload="metadata">
                        <source src="{{ asset('videos/moba.mp4') }}" type="video/mp4">
                    </video>
                    {{-- <span class="play-icon">▶</span> --}}
                </div>













            <div class="gallery-item video"
                 data-title="Discours"
                 data-desc="Message officiel">
                <video preload="metadata"
                       data-duration>
                    <source src="{{ asset('videos/moba.mp4') }}" type="video/mp4">
                </video>
                <span class="play-icon">▶</span>
                <span class="duration">00:00</span>
            </div>

            <!-- YOUTUBE -->
            <div class="gallery-item youtube"
                 data-title="Présentation S228"
                 data-desc="Vidéo YouTube"
                 data-video="https://www.youtube.com/embed/hRNwlx2lE9k"
                 data-duration="05:32">
                <img src="https://img.youtube.com/vi/hRNwlx2lE9k/hqdefault.jpg" alt="">
                <span class="play-icon">▶</span>
                <span class="duration">05:32</span>
            </div>

            <!-- IMAGE -->
            <div class="gallery-item image"
                 data-title="Inauguration"
                 data-desc="Ouverture officielle">
                <img src="{{ asset('images/eric.webp') }}" alt="">
            </div>

            <!-- VIDEO LOCALE -->
            <div class="gallery-item video"
                 data-title="Discours"
                 data-desc="Message officiel">
                <video preload="metadata"
                       data-duration>
                    <source src="{{ asset('videos/moba.mp4') }}" type="video/mp4">
                </video>
                <span class="play-icon">▶</span>
                <span class="duration">00:00</span>
            </div>

            <!-- YOUTUBE -->
            <div class="gallery-item youtube"
                 data-title="Présentation S228"
                 data-desc="Vidéo YouTube"
                 data-video="https://www.youtube.com/embed/hRNwlx2lE9k"
                 data-duration="05:32">
                <img src="https://img.youtube.com/vi/hRNwlx2lE9k/hqdefault.jpg" alt="">
                <span class="play-icon">▶</span>
                <span class="duration">05:32</span>
            </div>

            <!-- IMAGE -->
            <div class="gallery-item image"
                 data-title="Inauguration"
                 data-desc="Ouverture officielle">
                <img src="{{ asset('images/eric.webp') }}" alt="">
            </div>

            <!-- VIDEO LOCALE -->
            <div class="gallery-item video"
                 data-title="Discours"
                 data-desc="Message officiel">
                <video preload="metadata"
                       data-duration>
                    <source src="{{ asset('videos/moba.mp4') }}" type="video/mp4">
                </video>
                <span class="play-icon">▶</span>
                <span class="duration">00:00</span>
            </div>

            <!-- YOUTUBE -->
            <div class="gallery-item youtube"
                 data-title="Présentation S228"
                 data-desc="Vidéo YouTube"
                 data-video="https://www.youtube.com/embed/hRNwlx2lE9k"
                 data-duration="05:32">
                <img src="https://img.youtube.com/vi/hRNwlx2lE9k/hqdefault.jpg" alt="">
                <span class="play-icon">▶</span>
                <span class="duration">05:32</span>
            </div>

        </div>
    </div>

    <!-- ===== THEME ===== -->
    <div class="gallery-theme">
        <h2 class="theme-title">Événements & Reportages</h2>
        <p class="theme-desc">Photos et vidéos officielles</p>

        <div class="gallery-grid">

            <!-- IMAGE -->
            <div class="gallery-item image"
                 data-title="Inauguration"
                 data-desc="Ouverture officielle">
                <img src="{{ asset('images/eric.webp') }}" alt="">
            </div>

            <!-- VIDEO LOCALE -->
            <div class="gallery-item video"
                 data-title="Discours"
                 data-desc="Message officiel">
                <video preload="metadata"
                       data-duration>
                    <source src="{{ asset('videos/moba.mp4') }}" type="video/mp4">
                </video>
                <span class="play-icon">▶</span>
                <span class="duration">00:00</span>
            </div>

            <!-- YOUTUBE -->
            <div class="gallery-item youtube"
                 data-title="Présentation S228"
                 data-desc="Vidéo YouTube"
                 data-video="https://www.youtube.com/embed/hRNwlx2lE9k"
                 data-duration="05:32">
                <img src="https://img.youtube.com/vi/hRNwlx2lE9k/hqdefault.jpg" alt="">
                <span class="play-icon">▶</span>
                <span class="duration">05:32</span>
            </div>

            <!-- IMAGE -->
            <div class="gallery-item image"
                 data-title="Inauguration"
                 data-desc="Ouverture officielle">
                <img src="{{ asset('images/eric.webp') }}" alt="">
            </div>

            <!-- VIDEO LOCALE -->
            <div class="gallery-item video"
                 data-title="Discours"
                 data-desc="Message officiel">
                <video preload="metadata"
                       data-duration>
                    <source src="{{ asset('videos/moba.mp4') }}" type="video/mp4">
                </video>
                <span class="play-icon">▶</span>
                <span class="duration">00:00</span>
            </div>

            <!-- YOUTUBE -->
            <div class="gallery-item youtube"
                 data-title="Présentation S228"
                 data-desc="Vidéo YouTube"
                 data-video="https://www.youtube.com/embed/hRNwlx2lE9k"
                 data-duration="05:32">
                <img src="https://img.youtube.com/vi/hRNwlx2lE9k/hqdefault.jpg" alt="">
                <span class="play-icon">▶</span>
                <span class="duration">05:32</span>
            </div>

            <!-- IMAGE -->
            <div class="gallery-item image"
                 data-title="Inauguration"
                 data-desc="Ouverture officielle">
                <img src="{{ asset('images/eric.webp') }}" alt="">
            </div>

            <!-- VIDEO LOCALE -->
            <div class="gallery-item video"
                 data-title="Discours"
                 data-desc="Message officiel">
                <video preload="metadata"
                       data-duration>
                    <source src="{{ asset('videos/moba.mp4') }}" type="video/mp4">
                </video>
                <span class="play-icon">▶</span>
                <span class="duration">00:00</span>
            </div>

            <!-- YOUTUBE -->
            <div class="gallery-item youtube"
                 data-title="Présentation S228"
                 data-desc="Vidéo YouTube"
                 data-video="https://www.youtube.com/embed/hRNwlx2lE9k"
                 data-duration="05:32">
                <img src="https://img.youtube.com/vi/hRNwlx2lE9k/hqdefault.jpg" alt="">
                <span class="play-icon">▶</span>
                <span class="duration">05:32</span>
            </div>

        </div>
    </div>


</section>

<!-- ===== LIGHTBOX ===== -->
<div class="lightbox" id="lightbox">
    <span class="close">&times;</span>

    <button class="nav prev">&#10094;</button>
    <button class="nav next">&#10095;</button>

    <div class="counter" id="counter">1 / 1</div>

    <div class="lightbox-inner">
        <h3 id="lb-title"></h3>
        <p id="lb-desc"></p>
        <div class="lightbox-content"></div>
    </div>
</div>
@endsection

@section('scripts')
{{-- <script src="{{ asset('js/gallery.js') }}"></script> --}}
<script src="../js/gallery.js"></script>
@endsection
