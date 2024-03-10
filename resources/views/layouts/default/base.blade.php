<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default site</title>
    @vite(['resources/css/app.scss', 'resources/views/layouts/'.config('app.template').'/css/style.scss'])
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

<footer class="bg-dark text-center text-white p-3">
    <p>&copy; @php echo date('Y') @endphp Простой сайт. Все права защищены.</p>
</footer>
</body>
</html>