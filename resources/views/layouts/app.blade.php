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
        <form class="reservationForm">
            <label>typ wyjazdu
                <select class="formEl">
                    <option value="" selected disabled></option>
                    <option value="allin">all-inclusive</option>
                    <option value="nofood">bez wyżywienia</option>
                    <option value="breakfood">śniadania</option>
                </select>
            </label>
            <label>destynacja
                <select id="destination" class="formEl">
                    <option value="" selected disabled></option>
                    <option value="Niemcy">Niemcy</option>
                    <option value="Austria">Austria</option>
                    <option value="Szwajcaria">Szwajcaria</option>
                </select>
            </label>
            <label>zakwaterowanie
                <select class="formEl">
                    <option value="" selected disabled></option>
                    <option value="hotel">hotel</option>
                    <option value="apartment">apartament</option>
                </select>
            </label>
            <label>dojazd
                <select class="formEl">
                    <option value="" selected disabled></option>
                    <option value="plane">samolot</option>
                    <option value="car">samochód (dojazd własny)</option>
                    <option value="bus">autokar</option>
                    <option value="train">pociąg</option>
                </select>
            </label>
            <label>data wyjazdu
                <input type="date" name="dateStart" id="tripStartDate" class="formEl">
            </label>
            <label>data powrotu
                <input type="date" name="dateEnd" id="tripEndDate" class="formEl">
            </label>
            <label>dorośli
                <input type="number" name="adults" id="adults" min="0" class="formEl">
            </label>
            <label>dzieci
                <input type="number" name="adults" id="children" min="0" class="formEl">
            </label>
        </form>
    </section>

    <section class="mapSection">
        <div id="map"></div>
    </section>

    <script src="./js/main.js"></script>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    {{--     <script src="./js/map.js"></script>--}}
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

        function test(id, country) {
            document.querySelector(".reservation").scrollIntoView({behavior: "smooth"});
            const destination = document.querySelector("#destination");
            console.log(destination.value + ", " + country);
            destination.value = country;
        }


        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        map.flyTo(new L.LatLng(48.208176, 16.373819));


        const myServices = [];
        @foreach ($table as $service)
        L.marker([{{$service->lat}}, {{$service->lng}}]).addTo(map)
            .bindPopup("<h3 class='place'>{{$service->miejsce}}</h3><br /><p>{{$service->opis}}</p> <br /> <button class='mapBtn {{$service->id}}' onclick='test({{$service->id}},`{{$service->kraj}}`)'>zamów!</button>")
        @endforeach
    </script>
    <footer class="footer"></footer>
</body>
</html>
