<nav class="navbar navbar-dark navbar-expand-lg">
    <a class="navbar-brand" href="{{ route('home') }}">Сайт</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link {{request()->segment(1) == '' ? 'active' : '' }}" href="{{ route('home') }}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->segment(1) == 'about' ? 'active' : '' }}" href="{{ route('about') }}">О нас</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->segment(1) == 'news' ? 'active' : '' }}" href="{{ route('news') }}">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->segment(1) == 'contacts' ? 'active' : '' }}" href="{{ route('contacts') }}">Контакты</a>
            </li>
        </ul>
    </div>
</nav>
