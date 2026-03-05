<!DOCTYPE html>
<html lang="fr">
<head>
    {{-- Charset & responsive --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Solutionneurs228 - Votre partenaire IT, Web et Média au Togo. Maintenance informatique, développement web, design graphique et production audiovisuelle.">
    <title>Solutionneurs228 | Solutions IT, Web & Média</title>

     <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>



@vite(['resources/css/style.css', 'resources/js/app.js'])




    {{-- SEO 
    <title>@yield('title', 'MonSite – Services et Formations')</title>
    <meta name="description" content="@yield('description', 'Services de maintenance, photographie, développement web et formations à Togo')">
    <meta name="author" content="MTC">
--}}
    {{-- Favicon 
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
--}}

    {{-- FontAwesome 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
--}}
    {{-- AOS CSS 
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
--}}
    {{-- Vite CSS + JS 
    
    @yield('preload') optionnel pour preload images/fonts--}}
</head>





<body class="font-sans text-gray-800 bg-gray-50 antialiased">
    {{-- Wrapper global --}}
    <div class="site-wrapper">
        {{-- Navbar --}}
        @include('partials.navbar')

        {{-- Slider / Carousel --}}
        @yield('slide')

        {{-- Contenu principal --}}
        <main class="container-fluid py-5">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')
    </div>

    {{-- WhatsApp flottant --}}
    <a href="https://wa.me/22892671533" class="whatsapp-float" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    {{-- Section scripts spécifique à chaque page --}}
    @yield('scripts')
</body>
</html>
