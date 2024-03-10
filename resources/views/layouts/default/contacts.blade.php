@extends('base')
@section('content')
    <div class="contact-info">
        @if($place)
            @if($place['address_link'])
                <div id="map" data-link="{{ $place['address_link'] }}" data-name="{{ $place['name'] }}" class="mb-5"></div>
            @endif
        <div class="contact-item">
            <div class="icon">&#128205;</div>
            <div class="info">{{ $place['address'] }}</div>
        </div>
        <div class="contact-item">
            <div class="icon">&#9742;</div>
            <div class="info">{{ $place['phone'] }}</div>
        </div>
        <div class="contact-item">
            <div class="icon">&#9993;</div>
            <div class="info">{{ $place['email'] }}</div>
        </div>
        @else
            <div>Нет связи с сервером</div>
        @endif
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш_api_ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="{{ asset('js/map.js') }}"></script>
@endsection