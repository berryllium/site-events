@extends('base')
@section('content')
    <div class="contact-info row mb-4">
        @if($placeInfo)
            <div class="col-12 col-lg-6">
                @if($placeInfo['address_link'])
                    <div id="map" data-link="{{ $placeInfo['address_link'] }}" data-name="{{ $placeInfo['name'] }}" class="mb-5"></div>
                @endif
            </div>
            <div class="col-12 col-lg-6">
                <div class="contact-item mb-2">
                    <i class="fas fa-map-marker-alt text-danger me-2"></i> {{ $placeInfo['address'] }}
                </div>
                <a href="tel:{{ $placeInfo['phone'] }}" class="contact-item mb-2">
                    <i class="fas fa-phone text-success me-2"></i> {{ $placeInfo['phone'] }}
                </a>
                <a href="mailto:{{ $placeInfo['email'] }}" class="contact-item mb-2">
                    <i class="fas fa-envelope text-dark me-2"></i> {{ $placeInfo['email'] }}
                </a>
                <div class="contact-item mt-3">
                    <x-social-links :place="$placeInfo"></x-social-links>
                </div>
            </div>
        @else
            <div>Нет связи с сервером</div>
        @endif
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш_api_ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="{{ asset('js/map.js') }}"></script>
@endsection