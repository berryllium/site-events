<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сайт</title>
    @vite(['resources/css/app.scss'])
</head>
<body>
<header>
    <div class="logo">Сайт</div>
    <nav>
        <a href="{{ route('home') }}">Главная</a>
        <a href="{{ route('news') }}">Новости</a>
        <a href="{{ route('contacts') }}">Контакты</a>
    </nav>
</header>

@yield('content')

<footer>

</footer>
</body>
</html>