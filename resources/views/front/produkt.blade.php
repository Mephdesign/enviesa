@extends('front.app')
@section('content')
    <div class="hero" style="background-image: url('/images/3.jpg');background-repeat: no-repeat;
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
    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">{{ $produkt->nazwa }}</h2>

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="feature">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-8-circle" viewBox="0 0 16 16">
                                        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-5.03 1.803c0 1.394-1.218 2.355-2.988 2.355-1.763 0-2.953-.955-2.953-2.344 0-1.271.95-1.851 1.647-2.003v-.065c-.621-.193-1.33-.738-1.33-1.781 0-1.225 1.09-2.121 2.66-2.121s2.654.896 2.654 2.12c0 1.061-.738 1.595-1.336 1.782v.065c.703.152 1.647.744 1.647 1.992Zm-4.347-3.71c0 .739.586 1.255 1.383 1.255s1.377-.516 1.377-1.254c0-.733-.58-1.23-1.377-1.23s-1.383.497-1.383 1.23Zm-.281 3.645c0 .838.72 1.412 1.664 1.412.943 0 1.658-.574 1.658-1.412 0-.843-.715-1.424-1.658-1.424-.944 0-1.664.58-1.664 1.424"/>
                                    </svg>
                                </div>
                                {!! $produkt->opis !!}
                            </div>
                            @if($produkt->kategorie == 1)
                                <img src="{{ asset('images/product/sukna.jpg') }}" alt="Wzornik Sukna" class="img-fluid my-5">
                                <div class="container my-5">
                                    <h3>Karta kolorów</h3>
                                    <div class="col-12">
                                        <img src="{{ asset('images/product/karta-kolorow.png') }}" alt="Image" class="img-fluid">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
{{--Prawa strona--}}
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-12 col-md-12">

                        <div class="img-wrap">
                            <img src="{{ asset('images/'.$produkt->id.'/'.$produkt->img) }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="row my-5">
                            @if($produkt->specyfikacja)
                                <h3>Specyfikacja stołu</h3>
                                {!! $produkt->specyfikacja !!}
                                <div class="row">
                                    <h2>Konfigurator</h2>
                                    <label for="rozmiar">Rozmiar stołu</label>
                                    <select id="rozmiar" class="form-control">
                                        <option value="0">6ft</option>
                                        <option value="300">7ft</option>
                                        <option value="600">8ft</option>
                                    </select>
                                    <label for="rozmiar">Płyta rozgrywająca</label>
                                    <select id="plyta" class="form-control">
                                        <option value="0">Płyta meblowa</option>
                                        <option value="1100">Płyta kamienna</option>
                                    </select>
                                    <label for="rozmiar">Blat nakrywający</label>
                                    <select id="blat" class="form-control">
                                        <option value="0">Brak</option>
                                        <option value="600">Blat do tenisa</option>
                                        <option value="600">Blat laminowany</option>
                                        <option value="800">Blat lakierowany</option>
                                    </select>

                                    <h2 id="result" class="my-3">0 zł</h2>
                                    <div class="row text-center">
                                        <a href="{{ route('front.zamowienie', ['id' => $produkt->id]) }}" class="btn btn-success my-5">Zamów</a>
                                    </div>
                                </div>
                            @else
                                <div class="sofa-img mt-3 text-center">
                                    <img src="{{ asset('images/index/bila.png') }}" alt="Image" class="img-fluid">
                                    <img src="{{ asset('images/index/bila.png') }}" alt="Image" class="img-fluid">
                                    <img src="{{ asset('images/index/bila.png') }}" alt="Image" class="img-fluid">
                                </div>
                            @endif
                        </div>
                        </div>
                    </div>

                </div>
{{--END Prawa strona--}}

            </div>
        </div>
    </div>
    @if($produkt->kategorie == 1)
        <div class="container mb-5">
            <h3>Tabela rozmiarów</h3>
            <div class="col-12">
                {!! $produkt->tabela_rozmiarow !!}
            </div>
        </div>

        <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Stół bilardowo-biesiadny</h1>
                        <p>
                            Od dawna marzysz o stole bilardowym, ale rozsądek podpowiada jednak zakup praktycznego stołu do
                            jadalni? Teraz już nie musisz wybierać! Stół bilardowy połączony ze stołem do salonu to rozwiązanie,
                            które stanowi doskonały kompromis między aspektem użytkowym a rozrywkowym. Komfortowo zjesz przy nim
                            obiad z całą rodziną, a wieczorem zagrasz w bilard. Stół bilardowy z blatem zapewnia nie tylko
                            wygodę i świetną zabawę, ale również stanowi oszczędność miejsca oraz pieniędzy. Przekonaj się sam,
                            dlaczego jeszcze warto zainwestować w to rozwiązanie!
                        </p>
                        <h1>Stół bilardowy — wielofunkcyjny mebel do Twoich wnętrz</h1>
                        <p>
                            W naszej ofercie znajdziesz najwyższej jakości stoły bilardowe wielofunkcyjne, które stanowią
                            również solidny stół biesiadny. Takie połączenie to doskonałe rozwiązanie do wielu pomieszczeń —
                            wykorzystywane są w hotelach, restauracjach czy pubach, jednak równie dobrze sprawdzają się w
                            prywatnych domach, np. w salonie oraz jadalni. Oferowany przez nas stół bilardowy z blatem jadalnym
                            wykonany został z płyty laminowanej dostępnej w szerokiej palecie barw. Powierzchnia do bilarda
                            również stworzona jest z największą starannością nawet o najmniejsze detale, pokryta jest
                            wytrzymałym suknem w kolorze zielonym bądź innym, zgodnym z życzeniem Klienta. Wykonanie z wysokiej
                            jakości materiałów, estetyczne wykończenie oraz wygoda użytkowania sprawiają, że jest to mebel
                            wielofunkcyjny. Stół jadalny z bilardem równie dobrze sprawdza się jako stół bilardowy, jak i stół
                            do jadalni, niezawodnie pełniąc obie te funkcje.
                        </p>
                        <h1>Stół bilardowy 2w1 — postaw na sprawdzone i wygodne rozwiązanie!</h1>
                        <p>
                            Stół bilardowy do jadalni Elegant to unikalne połączenie wysokiej jakości wykonania, funkcjonalności
                            i atrakcyjnej ceny. W naszej ofercie model ten dostępny jest w kilku rozmiarach oraz w różnej
                            kolorystyce stołu i sukna, dzięki czemu każdy może wybrać stół bilardowy 2w1 dopasowany do swoich
                            wnętrz. Zachęcamy do zapoznania się z galerią naszych realizacji, a także z dokładnymi parametrami
                            stołów. Zapraszamy do kontaktu!
                        </p>
                    </div>
                </div>
            </div>
    @endif

    <div class="container">

        <h3>Galeria produktu</h3>

        <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-start">
            @foreach($galeria as $img)
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <a href="{{ asset('images/'.$produkt->id.'/'.$img->nazwa) }}" data-lightbox="roadtrip" class="d-block">
                        <div class="img-box-border">
                            <div class="img-box img-fluid">
                                <img src="{{ asset('images/'.$produkt->id.'/'.$img->nazwa) }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Stół bilardowo-biesiadny</h1>
                <p>
                    Od dawna marzysz o stole bilardowym, ale rozsądek podpowiada jednak zakup praktycznego stołu do
                    jadalni? Teraz już nie musisz wybierać! Stół bilardowy połączony ze stołem do salonu to rozwiązanie,
                    które stanowi doskonały kompromis między aspektem użytkowym a rozrywkowym. Komfortowo zjesz przy nim
                    obiad z całą rodziną, a wieczorem zagrasz w bilard. Stół bilardowy z blatem zapewnia nie tylko
                    wygodę i świetną zabawę, ale również stanowi oszczędność miejsca oraz pieniędzy. Przekonaj się sam,
                    dlaczego jeszcze warto zainwestować w to rozwiązanie!
                </p>
                <h1>Stół bilardowy — wielofunkcyjny mebel do Twoich wnętrz</h1>
                <p>
                    W naszej ofercie znajdziesz najwyższej jakości stoły bilardowe wielofunkcyjne, które stanowią
                    również solidny stół biesiadny. Takie połączenie to doskonałe rozwiązanie do wielu pomieszczeń —
                    wykorzystywane są w hotelach, restauracjach czy pubach, jednak równie dobrze sprawdzają się w
                    prywatnych domach, np. w salonie oraz jadalni. Oferowany przez nas stół bilardowy z blatem jadalnym
                    wykonany został z płyty laminowanej dostępnej w szerokiej palecie barw. Powierzchnia do bilarda
                    również stworzona jest z największą starannością nawet o najmniejsze detale, pokryta jest
                    wytrzymałym suknem w kolorze zielonym bądź innym, zgodnym z życzeniem Klienta. Wykonanie z wysokiej
                    jakości materiałów, estetyczne wykończenie oraz wygoda użytkowania sprawiają, że jest to mebel
                    wielofunkcyjny. Stół jadalny z bilardem równie dobrze sprawdza się jako stół bilardowy, jak i stół
                    do jadalni, niezawodnie pełniąc obie te funkcje.
                </p>
            </div>
        </div>
    </div>
@endsection
