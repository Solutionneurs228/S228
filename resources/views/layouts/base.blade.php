<!DOCTYPE html>
<html lang="fr">
<head>
    {{-- Charset & responsive --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- SEO --}}
    <title>@yield('title', 'MonSite – Services et Formations')</title>
    <meta name="description" content="@yield('description', 'Services de maintenance, photographie, développement web et formations à Togo')">
    <meta name="author" content="MTC">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">


    {{-- FontAwesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    {{-- AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- Vite CSS + JS --}}
    @vite(['resources/css/style.css', 'resources/js/app.js'])

    @yield('preload') {{-- optionnel pour preload images/fonts --}}
</head>
<body>
    {{-- Wrapper global --}}
    <div class="site-wrapper">
        {{-- Navbar --}}
        @include('partials.navbar')

        {{-- Slider / Carousel --}}
        @yield('slide')

        {{-- Contenu principal --}}
        <main class="container py-5">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')
    </div>

    {{-- WhatsApp flottant --}}
    <a href="https://wa.me/22892671533" class="whatsapp-float" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    {{-- JS AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({ duration: 1000, once: true });
        });
    </script>

    {{-- Section scripts spécifique à chaque page --}}
    @yield('scripts')
</body>
</html>
