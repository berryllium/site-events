<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default site</title>
    <link rel="icon" type="image/x-icon" href="{{ $placeInfo['image_src'] }}">
    @vite(['resources/css/app.scss', 'resources/views/layouts/'.config('app.template').'/css/style.scss', 'resources/js/app.js'])
</head>
<body>
<header class="bg-dark">
    <div class="container">
        @include('navbar')
    </div>
</header>

<main class="container">
    <h1 class="mt-4 mb-4 text-center">{{ $title }}</h1>
    <div class="content">
        @yield('content')
    </div>
</main>

<footer class="bg-dark text-white px-3">
    <div class="container">
        <div class="contacts mb-2 mt-2 row small">
            <div class="col-7 col-lg-3">
                <div class="text-white mb-1">Контакты:</div>
                <div class="contact-item mb-2">
                    <a href="tel:{{ $placeInfo['phone'] }}" class="text-decoration-none">
                        <i class="fas fa-phone text-success me-2"></i> {{ $placeInfo['phone'] }}
                    </a>
                </div>
                <div class="contact-item mb-2">
                    <a href="mailto:{{ $placeInfo['email'] }}" class="text-decoration-none">
                        <i class="fas fa-envelope text-white me-2"></i> {{ $placeInfo['email'] }}
                    </a>
                </div>
            </div>
            <div class="col-5 col-lg-3">
                <div class="text-white mb-1">Мы в соцсетях:</div>
                <x-social-links :place="$placeInfo"></x-social-links>
            </div>
            <div class="d-none d-lg-block col-lg-6">
                <div class="text-white mb-1">Адрес:</div>
                <div class="contact-item mb-2">
                    <a href="tel:{{ $placeInfo['phone'] }}" class="text-decoration-none">
                        <i class="fas fa-location-dot text-danger me-2"></i> {{ $placeInfo['address'] }}
                    </a>
                </div>
            </div>
        </div>
        <p class="text-center small">&copy; @php echo date('Y') @endphp Все права защищены.</p>
    </div>
</footer>
</body>
</html>