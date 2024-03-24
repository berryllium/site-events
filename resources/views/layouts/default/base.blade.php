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

<footer class="bg-dark text-white p-3">
    <div class="contacts mb-2 mt-2 row small">
        <div class="col-7">
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
        <div class="col-5">
            <div class="text-white mb-1">Мы в соцсетях:</div>
            <div class=""><x-social-links :place="$placeInfo" class="col-6"></x-social-links></div>
        </div>
    </div>
</footer>
</body>
</html>