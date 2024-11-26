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
    <div class="wrapper">

{{--        <section class="blocks">--}}
{{--            <div class="block">--}}
{{--                <div class="icon">--}}
{{--                    <img src="../common/icons/icons8-automotive-100.png" alt="Przygotowanie inwestycji i dział prawny">--}}
{{--                </div>--}}
{{--                <h3>Przygotowanie inwestycji i dział prawny</h3>--}}
{{--            </div>--}}

{{--            <div class="block">--}}
{{--                <div class="icon">--}}
{{--                    <img src="../common/icons/icons8-oil-industry-100.png" alt="Pracownia projektowa">--}}
{{--                </div>--}}
{{--                <h3>Pracownia projektowa</h3>--}}
{{--            </div>--}}

{{--            <div class="block">--}}
{{--                <div class="icon">--}}
{{--                    <img src="../common/icons/icons8-sustainability-100.png" alt="Dział realizacji i inwestycji">--}}
{{--                </div>--}}
{{--                <h3>Dział realizacji i inwestycji</h3>--}}
{{--            </div>--}}
{{--        </section>--}}
        <div class="clear"></div>
        <div style="text-align: center">
            <h1 style="color: white">Strona w budowie zapraszamy niebawem</h1>
        </div>
        <div class="clear"></div>
{{--        <section class="information">--}}
{{--            <div class="textContent">--}}
{{--                <h4>Usługi w zakresie budowy linii kablowych i napowietrznych</h4>--}}
{{--                <p>--}}
{{--                    Naszym klientom oferujemy:--}}
{{--                <ul class="dotted">--}}
{{--                    <li>--}}
{{--                        Usługi w zakresie przygotowania inwestycji - Uzgodnienia z właścicielami nieruchomości; weryfikacja materiałów mających wpływ na sposób realizacji, Uzyskiwanie wymaganych prawem zgód i decyzji, uzgodnienia branżowe, rozliczanie odszkodowań powykonawczych.--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        Budowę linii napowietrznych i kablowych 110kV, 220kV i 400kV--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        Przebudowę, remonty i prace eksploatacyjne na sieciach 110kV, 220kV i 400kV--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        Budowę i modernizację podstacji trakcyjnych 110/15kV--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        Budowę traktów światłowodowych typu OPGW i ADSS--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        Prace eksploatacyjne, remontowe i usługi serwisowe--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="image">--}}
{{--                <img src="../common/images/electric.jpg" alt="Usługi w zakresie budowy linii kablowych i napowietrznych">--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="information">--}}
{{--            <div class="image">--}}
{{--                <img src="../common/images/solarpanels.jpg" alt="Nasze atuty">--}}
{{--            </div>--}}
{{--            <div class="textContent">--}}
{{--                <h4>--}}
{{--                    Nasze atuty--}}
{{--                </h4>--}}
{{--                <ul class="dotted">--}}
{{--                    <li>--}}
{{--                        kompleksowość wykonywanych obiektów--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        wszechstronna oferta i wysoka jakość świadczonych usług--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        szeroki zakres oferowanych usług--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        wysoko wyspecjalizowana kadra pracowników--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        nowoczesny park maszynowy--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        liczne certyfikaty i referencje--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        wieloletnie doświadczenie na rynku</li>--}}
{{--                    <li>--}}
{{--                        ponad 1000 zrealizowanych projektów--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        realizujemy prace "pod klucz" i zapewniamy obsługę prawną inwestycji na każdym etapie projektu--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="clients">--}}
{{--            <h4>Zaufali nam</h4>--}}
{{--            <div class="carousel js-flickity">--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/budimex.png" alt="Budimex Logo">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/grinea.png" alt="Grinea Logo">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/strabag.png" alt="Strabag Logo">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/pinggao.png" alt="Pinggao Group Logo">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/grupa_zarmen.png" alt="Grupa Zermen Logo">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/tauron.webp" alt="Tauron Logo">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/pandq.png" alt="p&q Logo">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/energa.png" alt="Energa Logo">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/enea.png" alt="Enea Logo">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="../common/logos/ELMONT.png" alt="Elmont Logo">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
    </div>

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
