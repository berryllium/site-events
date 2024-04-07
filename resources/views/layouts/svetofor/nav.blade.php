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