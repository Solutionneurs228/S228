<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Solutionneurs228 - Votre partenaire IT, Web et Média au Togo.">
    <title>@yield('title', 'Solutionneurs228') | Solutions IT, Web & Média</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vite -->
    @vite('resources/css/style.css')
    
    @stack('styles')
</head>

<body class="font-sans text-gray-800 bg-gray-50 antialiased pt-20">

    @include('partials.navbar')
    

    @yield('slide')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- WhatsApp -->
    <a href="https://wa.me/22892671533" class="fixed bottom-6 right-6 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center text-white text-2xl shadow-lg hover:scale-110 transition-transform z-50" target="_blank" rel="noopener">
        <i class="fab fa-whatsapp"></i>
    </a>


@vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>

