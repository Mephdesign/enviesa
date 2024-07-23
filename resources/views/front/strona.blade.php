@extends('front.app')
@section('content')

                    {!! $strona->content !!}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col">--}}
{{--                {!! strlen($strona->zajawka) > 0 ? $strona->content : ''  !!}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
