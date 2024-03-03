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
    <a href="{{ route('home') }}" class="logo">Сайт</a>
    <nav>
        <ul>
            <li><a class="link {{request()->segment(1) == '' ? 'active' : '' }}" href="{{ route('home') }}">Главная</a></li>
            <li><a class="link {{request()->segment(1) == 'news' ? 'active' : '' }}" href="{{ route('news') }}">Новости</a></li>
            <li><a class="link {{request()->segment(1) == 'contacts' ? 'active' : '' }}" href="{{ route('contacts') }}">Контакты</a></li>
            <li><a class="link {{request()->segment(1) == 'about' ? 'active' : '' }}" href="{{ route('about') }}">О нас</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>{{ $title }}</h1>
    <div class="content">
        @yield('content')
    </div>
</main>

<footer>
    <p>&copy; @php echo date('Y') @endphp Простой сайт. Все права защищены.</p>
</footer>
</body>
</html>