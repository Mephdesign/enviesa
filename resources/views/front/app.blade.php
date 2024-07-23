<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviesa</title>

    <link rel="stylesheet" href="{{ asset('css/fonts.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flickity/flickity.css') }}" />

    <script src="{{ asset('js/flickity/flickity.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
<div class="container">
    <header>
        <div class="wrapper">
            <div class="topBar">
                <h1>
                    <a href="index.html">
                        <img src="{{ asset('common/logos/logo-white.png') }}" alt="Enviesa">
                    </a>
                </h1>

                <nav>
                    <ul>
                        <li>
                            <a href="/oferta">Oferta</a>
                        </li>
                        <li>
                            <a href="/realizacje">Realizacje</a>
                        </li>
                        <li>
                            <a href="/o-nas">O nas</a>
                        </li>
                        <li>
                            <a href="/kontakt">Kontakt</a>
                        </li>
                    </ul>

                    <ul class="language">
                        <li>
                            <a href="#" class="active">PL</a>
                        </li>
                        <li>
                            <a href="#">EN</a>
                        </li>
                    </ul>
                </nav>

            </div>

            <div class="headline">
                <h2>Działamy w branży<br /> energetycznej od 10 lat </h2>
            </div>
        </div>
        <div class="gradient"></div>
    </header>
    @yield('content')
    <footer>
        <div class="wrapper footer-content">
            <div class="data">
                <div class="data-col">
                    enviesa<br />
                    ul. Toruńska 4 <br>
                    44-100 Gliwice <br><br>
                    NIP 631-265-30-34
                </div>

                <div class="data-col">
                    Sąd Rejonowy w Gliwicach <br>
                    X Wydział Gospodarczy <br>
                    KRS 0000505556 <br>
                    REGON 243536212
                </div>

                <div class="data-col">
                    Konto Millenium Bank <br>
                    83116022020000000503654350
                </div>
            </div>

            <div class="socials">
                <i class="icon"><img src="../common/icons/icons8-facebook-144.png" alt="Enviesa Facebook"></i>
                <i class="icon"><img src="../common/icons/icons8-linkedin-144.png" alt="Enviesa LinkedIn"></i>
                <i class="icon"><img src="../common/icons/icons8-instagram-144.png" alt="Enviesa Instagram"></i></div>
        </div>

        <div class="separator"></div>
        <div class="wrapper">
            &copy; <span id="currentYear"></span> Enviesa. Wszystkie prawa zastrzeżone
        </div>
    </footer>
</div>
</body>
</html>
