@extends('base')
@section('content')
    <div class="contact-info row mb-4">
        <div class="page-title contact-title mb-5"><span>Контакты</span></div>
        @if($placeInfo)
            <div class="d-flex content mb-5">
                <div class="left">
                    @if($placeInfo['address_link'])
                        <div id="map" data-preset="islands#blueShoppingIcon" data-link="{{ $placeInfo['address_link'] }}" data-name="{{ $placeInfo['name'] }}"></div>
                        <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш_api_ключ&lang=ru_RU" type="text/javascript"></script>
                        <script src="{{ asset('js/map.js') }}"></script>
                    @endif
                </div>
                <div class="d-flex flex-column justify-content-center p-3 right">
                    <div class="contact-item mb-3">
                        <i class="fas fa-map-marker-alt text-danger me-2"></i> {{ $placeInfo['address'] }}
                    </div>
                    <a href="tel:{{ $placeInfo['phone'] }}" class="contact-item mb-3">
                        <i class="fas fa-phone text-success me-2"></i> {{ $placeInfo['phone'] }}
                    </a>
                    <a href="mailto:{{ $placeInfo['email'] }}" class="contact-item mb-3">
                        <i class="fas fa-envelope text-dark me-2"></i> {{ $placeInfo['email'] }}
                    </a>
                    <div class="contact-item mt-3">
                        <x-social-links :place="$placeInfo" :zoom="2" class="color"></x-social-links>
                    </div>
                </div>
            </div>
        @else
            <div>Нет связи с сервером</div>
        @endif
    </div>
@endsection