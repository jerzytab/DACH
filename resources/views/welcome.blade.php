<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>DACH</title>
    
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
            <a href="#" class="clickable on small"><span class="material-symbols-outlined">map</span></a>
            @if (Route::has('login'))
                <div class="clickable">
                    @auth
                        <!-- <a href="{{ url('/dashboard') }}" class="material-symbols-outlined">Dashboard</a> -->
                        <a href="#" class="clickable off small"><span class="material-symbols-outlined">favorite</span></a>
                    @else
                        <a href="{{ route('login') }}" class="clickable on"><span class="material-symbols-outlined">person</span><p>zaloguj się</p></a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=""><p>Register</p></a>
                        @endif -->
                    @endauth
                </div>
            @endif
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
            <div class="card de 1">
                    <video src="./assets/video/pexels-zlatin-georgiev-5608244%20(2160p).mp4" class="cardVideo" muted loop></video>
                <div class="rest"><h3 class="countryName">Niemcy</h3></div>
            </div>

            <div class="card at 2">
                <video src="./assets/video/production_id%204922982%20(2160p).mp4" class="cardVideo" muted loop></video>
                <div class="rest"><h3 class="countryName">Austria</h3></div>
            </div>

            <div class="card ch 3">
                <video src="./assets/video/video%20(1080p).mp4" class="cardVideo" muted loop></video>
                <div class="rest"><h3 class="countryName">Szwajcaria</h3></div>
            </div>
        </div>

    </section>

    <section class="reservation">
        <form class="reservationForm">
            <label>typ wyjazdu
                <select>
                    <option value="" selected disabled></option>
                    <option value="allin">all-inclusive</option>
                    <option value="nofood">bez wyżywienia</option>
                    <option value="breakfood">śniadania</option>
                </select>
            </label>
            <label>destynacja
                <select id="destination">
                    <option value="" selected disabled></option>
                    <option value="de">Niemcy</option>
                    <option value="at">Austria</option>
                    <option value="ch">Szwajcaria</option>
                </select>
            </label>
            <label>zakwaterowanie
                <select>
                    <option value="" selected disabled></option>
                    <option value="hotel">hotel</option>
                    <option value="apartment">apartament</option>
                </select>
            </label>
            <label>dojazd
                <select>
                    <option value="" selected disabled></option>
                    <option value="plane">samolot</option>
                    <option value="car">samochód (dojazd własny)</option>
                    <option value="bus">autokar</option>
                    <option value="train">pociąg</option>
                </select>
            </label>
            <label>data wyjazdu
                <input type="date" name="dateStart" id="tripStartDate">
            </label>
            <label>data powrotu
                <input type="date" name="dateEnd" id="tripEndDate">
            </label>
            <label>dorośli
                <input type="number" name="adults" id="adults" min="0">
            </label>
            <label>dzieci
                <input type="number" name="adults" id="children" min="0">
            </label>
        </form>
    </section>
    
    <script src="./js/main.js"></script>
</body>
</html>