<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>DACH</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('css/banner.css') }}">
<link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
<link rel="stylesheet" href="{{ asset('css/imports.css') }}">
<link rel="stylesheet" href="{{ asset('css/cards.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
</head>
<body>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>DACH</title>

    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/imports.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
</head>
<body>
<header>
    <div class="left">
        <h1>DACHtravel</h1>
    </div>
    <div class="right">
        @include('layouts.navigation')
    </div>
</header>


<section id="banner">
    <video src="./assets/video/mixkit-antenna-alexanderplatz-in-germany-from-above-27267-medium.mp4" autoplay loop muted></video>
    <div class="caption">
        <h3>odwiedź z nami
            <span class="nasze">NASZ</span>e destynacje</h3><br/>
        <span class="material-symbols-outlined down_arrow">keyboard_arrow_down</span>
    </div>
</section>

<section class="main">
    <h1 class="invitation">Zwiedź je z nami!</h1>
    <div class="countryCards">
        <div class="card niemcy 1">
            <video src="./assets/video/pexels-zlatin-georgiev-5608244%20(2160p).mp4" class="cardVideo" muted loop></video>
            <div class="rest"><h3 class="countryName">Niemcy</h3></div>
        </div>

        <div class="card austria 2">
            <video src="./assets/video/production_id%204922982%20(2160p).mp4" class="cardVideo" muted loop></video>
            <div class="rest"><h3 class="countryName">Austria</h3></div>
        </div>

        <div class="card szwajcaria 3">
            <video src="./assets/video/video%20(1080p).mp4" class="cardVideo" muted loop></video>
            <div class="rest"><h3 class="countryName">Szwajcaria</h3></div>
        </div>
    </div>

</section>

<section class="reservation">
    <h1 class="reserved">Dziękujemy za rezerwację!</h1>
</section>
</body>
</html>
