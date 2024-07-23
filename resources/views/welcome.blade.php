@extends('_app')
@section('content')
    <div class="hero" style="background: url('images/4.jpg');background-repeat: no-repeat;
    background-position: center;background-size: cover; height: 100vh; ">
        <div class="container pt-5">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1><span clsas="d-block">Świat klasyki i zabawy - stoły bilardowe dla każdego!</span></h1>
                        <p><a href="" class="btn btn-secondary me-2">Sklep</a><a href="#" class="btn btn-white-outline">Komis</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->

    <!-- Start Przykladowe Produkty Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">
                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Stoły do gry w bilard klasyczny</h2>
                    <p class="mb-4">To najczęściej wybierany rodzaj stołu bilardowego o określonych z góry wymiarach.
                        Możesz spotkać go zarówno w pubach, restauracjach, jak i w miejscach rozrywk </p>
                    <p><a href="shop.html" class="btn">Oferta</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('front.produkt',['id' => $produkt->id ?? 7]) }}">
                        <img src="images/index/1.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid">
                                </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('front.produkt',['id' => $produkt->id ?? 7]) }}">
                        <img src="images/index/2.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid">
                                </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('front.produkt',['id' => $produkt->id ?? 7]) }}">
                        <img src="images/index/3.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid">
                                </span>
                    </a>
                </div>
                <!-- End Column 4 -->
            </div>
            <div class="row pt-5">
                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">

                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('front.produkt',['id' => $produkt->id ?? 7]) }}">
                        <img src="images/index/1.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid">
                                </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('front.produkt',['id' => $produkt->id ?? 7]) }}">
                        <img src="images/index/2.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid">
                                </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('front.produkt',['id' => $produkt->id ?? 7]) }}">
                        <img src="images/index/3.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid">
                                </span>
                    </a>
                </div>
                <!-- End Column 4 -->
            </div>
        </div>
    </div>
    <!-- Przykladowe Produkty-->

    <!-- Start Firma Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">25 lat na Rynku!</h2>
                    <p><strong>Producent i dystrybutor stołów bilardowych oraz akcesoriów</strong><br>
                        Bilard to gra pasjonująca rzesze osób na całym świecie – nie ma się czemu dziwić. Ten elegancki
                        sport oraz jego odmiany dostarczają mnóstwa emocji zarówno profesjonalnym graczom, jak i kibicom
                        czy amatorom, traktującym zmagania przy stole bilardowym jako formę relaksu. Naszą firmę tworzą
                        pasjonaci, dzięki którym możemy dostarczać Klientom najwyższej jakości stoły wykonane z wielu
                        odmian drewna, sukna, a także profesjonalne akcesoria do bilarda, takie jak kije, stojaki,
                        komplety bil, trójkąty oraz wiele innych dodatków, które poprawiają komfort gry.</p>
                    <div class="row my-5">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne" style="background-color: #eff2f1;">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        Akcesoria do bilarda najwyższej jakości
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Wszystkim, którzy zdecydują się skorzystać z dokładnie przemyślanej oferty, gwarantujemy, że każdy stół bilardowy, kij czy jakikolwiek innych artykuł do gry zakupiony u nas dostarczy wielkiej frajdy, a ponadto przyczyni się do poprawy umiejętności i wyników osiąganych na zawodach czy podczas treningu bilarda. Serdecznie zapraszamy do zapoznania się z asortymentem naszego sklepu oraz dokonywania zakupów. Szczególnie polecamy modele składane, z blatem lub wielofunkcyjne, a także stoły typu 2 w 1.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        Stół bilardowy dla każdego
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Jesteśmy miłośnikami wszelkich odmian gier bilardowych i staramy się dostarczyć każdemu Klientowi najwyższej jakości stoły oraz wszystkie niezbędne akcesoria bilardowe. Dzięki nim będziecie Państwo mogli czerpać przyjemność z uprawiania tej, jakże pięknej, gry. Prócz szerokiego asortymentu służymy Klientom kompleksowym doradztwem w kwestii doboru stołów oraz akcesoriów. W naszej ofercie posiadamy również inne odmiany gier jak np. piłkarzyki czy plansze do profesjonalnego darta elektronicznego. Gwarantujemy najwyższą jakość, atrakcyjne ceny i oczywiście mnóstwo frajdy.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        Stoły snookerowe, profesjonalne kije do bilarda, stół bilardowy składany
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Prawdziwa przyjemność z gry kryje się w detalach. Profesjonalne kije do bilarda z naszej oferty charakteryzuje nie tylko elegancki wygląd, ale również doskonałe wykonanie. Jeśli szukasz wysokiej jakości stołów snookerowych czy do bilarda w atrakcyjnej cenie, koniecznie sprawdź wszystkie propozycje zebrane w przejrzystych kategoriach.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                        Dlaczego warto kupić u nas wielofunkcyjny stół bilardowy?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Kluczem do sukcesu naszej firmy, jako producenta jest wykorzystanie wyłącznie materiałów najwyższej jakości oraz dbałość o nawet najdrobniejsze szczegóły. Oferowane przez nas stoły bilardowe wykonane są z naturalnego, litego drewna olchy lub dębu. Zależy nam nie tylko na tym, by proponowane produkty pięknie prezentowały się w jadalni, klubowej sali czy w restauracji, ale również by dawały rozrywkę przez wiele lat. To dlatego wszystkie elementy, takie jak nogi, boczki czy korona stołu, wykonywane są ręcznie, z niezwykłą dbałością. Wypełnienie wewnątrz nóg zwiększa wytrzymałość produktu i sprawia, że stół do bilarda jest bardziej stabilny.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                        Sklep z akcesoriami do bilarda
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        W zależności od preferencji klientów i wystroju sali lub salonu, oferujemy szeroki wybór modeli – od wyjątkowo eleganckich, do klasycznych ze zdobieniami. Znajdziesz u nas akcesoria do bilarda w domu, stoły pokazowe, połączone ze stołem do salonu, albo ekskluzywne z kamienną płytą. Wszystkie nasze produkty, niezależnie od ceny, charakteryzują się bardzo dobrą jakością. Dodatkowo pokrywamy je lakierami oraz innymi materiałami ochronnymi. Poza sprzedażą i dostarczaniem mebli do gry oferujemy również ich serwis oraz sprzedaż kijów, bil, stojaków, nakładek na stół bilardowy, a także innych akcesoriów.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                        Nie tylko profesjonalne stoły bilardowe – sprawdź całą ofertę!
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Oferowane produkty to propozycja idealna zarówno dla doświadczonych zawodowców, jak i dla graczy amatorskich. W naszym sklepie znajdziesz stoły oraz akcesoria dla tych, którzy grze w bilard chcą oddawać się przede wszystkim sporadycznie: we własnych domach, pubach, barach lub restauracjach podczas okazjonalnych wyjść z przyjaciółmi. Przekrój dostępnych w sklepie produktów jest bardzo szeroki, zarówno pod kątem cenowym, jak i stylistycznym. Oferujemy zarówno proste, pasujące do nowoczesnych wnętrz stoły bilardowe z płyty laminowanej lub meblowej w stosunkowo niskiej cenie, jak również ekskluzywne, zdobione warianty wykonane z drewna dębowego lub olchowego.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                        Już dziś wybierz swój wymarzony model!
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Każdy dostępny u nas stół bilardowy charakteryzuje się z jednej strony klasyczną formą, a z drugiej – oryginalnością. Klientom indywidualnym, którzy szukają odpowiedniego modelu do swojego domu lub mieszkania, polecamy modele, wyposażone w blat biesiadny. Dzięki temu może on służyć zarówno do gry, jak i jako mebel jadalniany. Do klasycznych, dużych salonów, wykwintnych restauracji czy hoteli przeznaczone są natomiast ekskluzywne stoły do bilarda ze zdobieniami oraz skórzanymi koszami. W trosce o komfort i zadowolenie naszych Klientów oferujemy produkty w różnych kolorach oraz wymiarach. Polecamy też warianty używane. Zapraszamy do kontaktu!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                        Stoły snookerowe, profesjonalne kije do bilarda, stół bilardowy składany
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Prawdziwa przyjemność z gry kryje się w detalach. Profesjonalne kije do bilarda z naszej oferty charakteryzuje nie tylko elegancki wygląd, ale również doskonałe wykonanie. Jeśli szukasz wysokiej jakości stołów snookerowych czy do bilarda w atrakcyjnej cenie, koniecznie sprawdź wszystkie propozycje zebrane w przejrzystych kategoriach.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                        Stoły snookerowe, profesjonalne kije do bilarda, stół bilardowy składany
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Prawdziwa przyjemność z gry kryje się w detalach. Profesjonalne kije do bilarda z naszej oferty charakteryzuje nie tylko elegancki wygląd, ale również doskonałe wykonanie. Jeśli szukasz wysokiej jakości stołów snookerowych czy do bilarda w atrakcyjnej cenie, koniecznie sprawdź wszystkie propozycje zebrane w przejrzystych kategoriach.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTen" aria-expanded="false"
                                            aria-controls="collapseTen">
                                        Stół do bilarda, który dopasujesz do stylu pomieszczenia
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Doskonale zdajemy sobie sprawę, że odpowiedni design stołu do bilarda wpływa na charakter całej przestrzeni. Często staje się on centralnym punktem pokoju gier, tym samym musi spełniać wymogi estetyczne najbardziej wymagających Klientów. Oferujemy modele wykonane z litego drewna, a w śród nich stoły klasyczne, minimalistyczne, bogato zdobione i nowoczesne. Bogaty wybór stylów oraz kolorów, a także przystępna cena, to niejedyne zalety naszych produktów. Zapraszamy!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="images/index/5.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Firma Section -->

    <!-- Start Atuty Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Nasze atuty</h2>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit
                        imperdiet dolor tempor tristique.</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/truck.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Indywidualne zamówienia</h3>
                                <p>Realizujemy indywidualne zamówienia klienta.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/bag.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Wysoka jakość</h3>
                                <p>Gwarantujemy wysoką jakość wykonania</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/support.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Konkurencyjne ceny</h3>
                                <p>Nasze stoły zachowują najwyższą jakość utrzymując przystępną cenę</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/return.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Własny transport</h3>
                                <p>Dysponujemy własnym transportem</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="images/index/4.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Atuty Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="images/index/6.jpg" alt="Untree.co" class="shadow-lg"></div>
                        <div class="grid grid-2"><img src="images/index/5.jpg" alt="Untree.co" class="shadow-lg"></div>
                        <div class="grid grid-3"><img src="images/index/8.jpg" alt="Untree.co" class="shadow-lg"></div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
                    <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada.
                        Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque
                        habitant morbi tristique senectus et netus et malesuada</p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    </ul>
                    <p><a herf="#" class="btn">Explore</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
        <div class="container">
            <div class="row">

{{--                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">--}}
{{--                    <div class="product-item-sm d-flex">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <img src="images/product-1.png" alt="Image" class="img-fluid">--}}
{{--                        </div>--}}
{{--                        <div class="pt-3">--}}
{{--                            <h3>Nordic Chair</h3>--}}
{{--                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>--}}
{{--                            <p><a href="#">Read More</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">--}}
{{--                    <div class="product-item-sm d-flex">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <img src="images/10/171594075238.webp" alt="Image" class="img-fluid">--}}
{{--                        </div>--}}
{{--                        <div class="pt-3">--}}
{{--                            <h3>Kruzo Aero Chair</h3>--}}
{{--                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>--}}
{{--                            <p><a href="#">Read More</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">--}}
{{--                    <div class="product-item-sm d-flex">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <img src="images/product-3.png" alt="Image" class="img-fluid">--}}
{{--                        </div>--}}
{{--                        <div class="pt-3">--}}
{{--                            <h3>Ergonomic Chair</h3>--}}
{{--                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>--}}
{{--                            <p><a href="#">Read More</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{----}}
            </div>
        </div>
    </div>
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Opinie</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">

                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                    odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                                    vulputate velit imperdiet dolor tempor tristique. Pellentesque
                                                    habitant morbi tristique senectus et netus et malesuada fames ac
                                                    turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                    odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                                    vulputate velit imperdiet dolor tempor tristique. Pellentesque
                                                    habitant morbi tristique senectus et netus et malesuada fames ac
                                                    turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                    odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                                    vulputate velit imperdiet dolor tempor tristique. Pellentesque
                                                    habitant morbi tristique senectus et netus et malesuada fames ac
                                                    turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Recent Blog</h2>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <a href="#" class="more">View All Posts</a>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="images/7/171473233676.webp" alt="Image"
                                                                class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">First Time Dashboard Owner Ideas</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span> <span>on <a
                                            href="#">Dec 19, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="images/8/171554712847.webp" alt="Image"
                                                                class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="images/7/171473233677.webp" alt="Image"
                                                                class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span> <span>on <a
                                            href="#">Dec 12, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Blog Section -->
@endsection
