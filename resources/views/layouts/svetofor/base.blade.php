<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if($placeInfo['seo_description'])
        <meta name="description" content="{{ $placeInfo['seo_description'] }}">
    @endif
    <title>{{ $placeInfo['seo_title'] ?? $placeInfo['name'] }}</title>
    <link rel="icon" type="image/x-icon" href="{{ $placeInfo['logo_image_src'] ?? '' }}">
    @vite(['resources/css/app.scss', 'resources/views/layouts/'.config('app.template').'/css/style.scss', 'resources/views/layouts/'.config('app.template').'/js/script.js'])
</head>
<body class="d-flex flex-column justify-content-between">
<header>
    <div class="d-none d-lg-block">
        @include('top')
        <div class="container">
            @include('navbar')
        </div>
    </div>
    <div class="d-lg-none mob-header mb-5">
        <div class="container py-4 d-flex align-items-center justify-content-between">
            <img width="100" src="{{ $placeInfo['logo_image_src'] }}" alt="">
            <span>{{ $placeInfo['name'] }}</span>
            <div class="menu-button">
                <img class="cross" style="display: none" width="40" src="{{ asset('/asset/svetofor/images/cross.png') }}" alt="">
                <img class="burger" style="display: block" width="40" src="{{ asset('/asset/svetofor/images/burger.png') }}" alt="">
            </div>
        </div>
        <div class="position-relative">
            <div class="mob-nav p-3 pb-5 justify-content-end position-absolute z-1 end-0" style="display: none">
                <div class="menu-links">
                    <x-social-links :place="$placeInfo" class="color"></x-social-links>
                    @include('nav')
                </div>
            </div>
        </div>
    </div>
</header>

<main class="container flex-grow-1 pb-5">
    <div class="content">
        @yield('content')
    </div>
</main>

<footer class="p-3">
    <div class="container">
        <div class="contacts mb-2 mt-2 row small">
            <div class="col-7 col-lg-3">
                <div class="mb-1">Контакты:</div>
                <div class="contact-item mb-2">
                    <a href="tel:{{ $placeInfo['phone'] }}" class="text-decoration-none">
                        <i class="fas fa-phone text-success me-2"></i> {{ $placeInfo['phone'] }}
                    </a>
                </div>
                <div class="contact-item mb-2">
                    <a href="mailto:{{ $placeInfo['email'] }}" class="text-decoration-none">
                        <i class="fas fa-envelope text-success me-2"></i> {{ $placeInfo['email'] }}
                    </a>
                </div>
            </div>
            <div class="col-5 col-lg-3">
                <div class="mb-1">Мы в соцсетях:</div>
                <x-social-links :place="$placeInfo" class="color"></x-social-links>
            </div>
            @if($placeInfo['working_hours'])
            <div class="d-none d-lg-block col-lg-3">
                <div class="mb-1">Время работы:</div>
                <div class="contact-item mb-2">
                    <i class="fas fa-calendar text-warning me-2"></i> {{ $placeInfo['working_hours'] }}
                </div>
            </div>
            @endif
            <div class="d-none d-lg-block col-lg-3">
                <div class="mb-1">Адрес:</div>
                <div class="contact-item mb-2 d-flex">
                    <i class="fas fa-location-dot text-danger me-2"></i>
                    <span>{{ $placeInfo['address'] }}</span>
                </div>
            </div>
        </div>
        <div class="text-center small pb-3">&copy; @php echo date('Y') @endphp Все права защищены.</div>
    </div>
</footer>
</body>
</html>