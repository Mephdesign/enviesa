<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviesa</title>

    <link rel="stylesheet" href="{{ asset('css/fonts.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
{{--    <link rel="stylesheet" href="{{ asset('css/styles/styles.css') }}" />--}}
    <link rel="stylesheet" href="{{ asset('css/styles/offer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles/homepage.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles/projects.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles/projects.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flickity/flickity.css') }}" />
</head>
<body>
<div class="container">
    <header>
        <div class="wrapper">
            <div class="topBar">
                <h1>
                    <a href="/">
                        <img src="common/logos/logo-white.png" alt="Enviesa">
                    </a>
                </h1>

                <nav id="mainMenu">
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
                </nav>

                <div class="mobileMenu" id="mobileMenu">
                    <span class="burger"></span>
                </div>

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
                <i class="icon"><img src="common/icons/icons8-facebook-144.png" alt="Enviesa Facebook"></i>
                <i class="icon"><img src="common/icons/icons8-linkedin-144.png" alt="Enviesa LinkedIn"></i>
                <i class="icon"><img src="common/icons/icons8-instagram-144.png" alt="Enviesa Instagram"></i></div>
        </div>

        <div class="separator"></div>
        <div class="wrapper">
            &copy; <span id="currentYear"></span> Enviesa. Wszystkie prawa zastrzeżone
        </div>
    </footer>
</div>
</body>

    <script src="{{ asset('js/flickity.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/flicky.script.js') }}" defer></script>

</html>
