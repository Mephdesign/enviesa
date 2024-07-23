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
                    <h2 class="section-title">{{ $strona->nazwa }}</h2>

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="feature">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-8-circle" viewBox="0 0 16 16">
                                        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-5.03 1.803c0 1.394-1.218 2.355-2.988 2.355-1.763 0-2.953-.955-2.953-2.344 0-1.271.95-1.851 1.647-2.003v-.065c-.621-.193-1.33-.738-1.33-1.781 0-1.225 1.09-2.121 2.66-2.121s2.654.896 2.654 2.12c0 1.061-.738 1.595-1.336 1.782v.065c.703.152 1.647.744 1.647 1.992Zm-4.347-3.71c0 .739.586 1.255 1.383 1.255s1.377-.516 1.377-1.254c0-.733-.58-1.23-1.377-1.23s-1.383.497-1.383 1.23Zm-.281 3.645c0 .838.72 1.412 1.664 1.412.943 0 1.658-.574 1.658-1.412 0-.843-.715-1.424-1.658-1.424-.944 0-1.664.58-1.664 1.424"/>
                                    </svg>
                                </div>
                                {!! strlen($strona->zajawka) > 0 ? $strona->zajawka : $strona->content  !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="img-wrap">
                                <img src="{{ asset('images/strony/'.$strona->id.'/'.$strona->img) }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="row my-5">
                                    <div class="sofa-img mt-3 text-center">
                                        <img src="{{ asset('images/index/bila.png') }}" alt="Image" class="img-fluid">
                                        <img src="{{ asset('images/index/bila.png') }}" alt="Image" class="img-fluid">
                                        <img src="{{ asset('images/index/bila.png') }}" alt="Image" class="img-fluid">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                {!! strlen($strona->zajawka) > 0 ? $strona->content : ''  !!}
            </div>
        </div>
    </div>

@endsection
