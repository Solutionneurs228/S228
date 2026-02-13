<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
</head>

<body>



    <div class="nav-home-img">
        @include('Nav-foot')
        @yield('slide')

    </div>

    @yield('content')

    @include('footer')

</div>

@yield('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <a href="https://wa.me/+22892671533?text=Bonjour%20je%20vous%20contact%20depuis%20votre%20site%20web%20et%20je%20souhaite%20avoir%20plus%20d'informations%20sur%20...%20"
   class="whatsapp-float"
   target="_blank">
   <i class="fa-brands fa-whatsapp"></i>
</a>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

</body>

</html>
