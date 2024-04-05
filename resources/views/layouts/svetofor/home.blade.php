@extends('base')
@section('content')

    @if($horizontal_slider)
    <div class="d-none d-lg-block">
        <x-slider :files="$horizontal_slider"></x-slider>
    </div>
    @endif

    @if($vertical_slider)
        <div class="mb-5 d-block d-lg-none">
            <x-slider :files="$vertical_slider"></x-slider>
        </div>
    @endif

    <div class="row">
        <div class="col">
            <div class="banner">
                <img src="{{ asset('/asset/svetofor/images/banner.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col text-center d-flex justify-content-center align-items-center page-title">
            <span class="home-title d-flex align-items-center">Свежие новости</span>
        </div>
    </div>

    <div class="row">
        @foreach($posts as $data)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <x-news-card :data="$data"></x-news-card>
            </div>
        @endforeach
    </div>
    
    <div class="row appeal align-items-center">
        <div class="col-lg-4 col-12 image">
            <img class="w-100" src="{{ $placeInfo['appeal_image_src'] }}" alt="">
        </div>
        <div class="col-lg-8 col-12 p-5 text">
            {!! $placeInfo['appeal_text'] !!}
        </div>
    </div>

    @if($placeInfo['address_link'])
        <div class="map mt-5 position-relative">
            <div class="how-to-find position-absolute text-center z-1 mt-4"><span>Как нас найти?</span></div>
            <div class="hint position-absolute z-1 w-25">{{ $placeInfo['address'] }}</div>
            <div id="map" data-preset="islands#blueShoppingIcon" data-link="{{ $placeInfo['address_link'] }}" data-name="{{ $placeInfo['name'] }}" class="mb-5"></div>
        </div>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш_api_ключ&lang=ru_RU" type="text/javascript"></script>
        <script src="{{ asset('js/map.js') }}"></script>
    @endif
@endsection