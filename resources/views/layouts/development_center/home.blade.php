@extends('base')
@section('content')

    @if($horizontal_slider)
    <div class="d-none d-lg-block mb-5">
        <x-slider :files="$horizontal_slider"></x-slider>
    </div>
    @endif

    @if($vertical_slider)
        <div class="mb-5 d-block d-lg-none">
            <x-slider :files="$vertical_slider"></x-slider>
        </div>
    @endif

    <div class="row mb-5 mt-5">
        <div class="col page-title d-flex align-items-center">
            <span class="home-title pe-5">Свежие новости</span>
            <i class="tail ms-2"></i>
            <i class="tail tail-2 ms-2"></i>
            <i class="tail tail-3 ms-2"></i>
        </div>
    </div>

    <div class="row">
        <x-news-list :paginator="$posts"></x-news-list>
    </div>
    
    <div class="row appeal align-items-start">
        <div class="col-lg-4 col-12 image mt-3">
            <img class="w-100" src="{{ $placeInfo['appeal_image_src'] }}" alt="">
        </div>
        <div class="col-lg-8 col-12 text">
            {!! $placeInfo['appeal_text'] !!}
        </div>
    </div>

    @if($placeInfo['address_link'])
        <div class="map mt-5 position-relative">
            <div class="how-to-find position-absolute text-center z-1 mt-4"><span>Как нас найти?</span></div>
            <div class="hint position-absolute z-1">{{ $placeInfo['address'] }}</div>
            <div id="map" data-preset="islands#blueShoppingIcon" data-link="{{ $placeInfo['address_link'] }}" data-name="{{ $placeInfo['name'] }}" class="mb-5"></div>
        </div>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш_api_ключ&lang=ru_RU" type="text/javascript"></script>
        <script src="{{ asset('js/map.js') }}"></script>
    @endif
@endsection