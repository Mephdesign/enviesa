@extends('front.app')
@section('content')
    <div class="hero" style="background: url('/images/2.jpg');background-repeat: no-repeat;
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
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">

                @foreach($produkty as $produkt)
                    <!-- Start Column 1 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="{{ route('front.produkt',['id' => $produkt->id]) }}">
                            <img src="{{ asset('images/'.$produkt->id .'/'. $produkt->img) }}"
                                 class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $produkt->nazwa }}</h3>
                            <strong class="product-price">{{ $produkt->cena }}</strong>

                            <span class="icon-cross">
								<img src="{{ asset('images/cross.svg') }}" class="img-fluid">
							</span>
                        </a>
                    </div>
                    <!-- End Column 1 -->
                @endforeach


            </div>
        </div>
    </div>
@endsection
