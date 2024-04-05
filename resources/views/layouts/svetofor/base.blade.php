<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default site</title>
    <link rel="icon" type="image/x-icon" href="{{ $placeInfo['logo_image_src'] ?? '' }}">
    @vite(['resources/css/app.scss', 'resources/views/layouts/'.config('app.template').'/css/style.scss', 'resources/js/app.js'])
</head>
<body>
<header>
    @include('top')
    <div class="container">
        @include('navbar')
    </div>
</header>

<main class="container flex-grow-1">
    <div class="content">
        @yield('content')
    </div>
</main>

<footer class="px-3">
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
                <x-social-links :place="$placeInfo"></x-social-links>
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