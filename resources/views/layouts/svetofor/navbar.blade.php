<div class="contacts mt-2 row d-lg-none">
    <div class="col-7">
        <div class="contact-item mb-2">
            <a href="tel:{{ $placeInfo['phone'] }}" class="text-decoration-none">
                <i class="fas fa-phone text-success me-2"></i> {{ $placeInfo['phone'] }}
            </a>
        </div>
    </div>
    <div class="col-5 text-end me-n2">
        <x-social-links :place="$placeInfo"></x-social-links>
    </div>
</div>

<nav class="navbar navbar-expand-lg d-flex justify-content-between mx-5 mb-5">
    <div class="d-flex">
        <a class="navbar-brand" href="{{ route('home') }}"><img width="64" src="{{ $placeInfo['logo_image_src'] }}" alt=""></a>
        <div class="name text-uppercase ms-3">{{ $placeInfo['name'] }}</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse  justify-content-end flex-grow-0 px-3" id="navbarNav">
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