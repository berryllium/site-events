<nav class="navbar navbar-expand-lg d-flex justify-content-between mx-5 mb-5">
    <div class="d-flex">
        <a class="navbar-brand" href="{{ route('home') }}"><img width="64" src="{{ $placeInfo['logo_image_src'] }}" alt=""></a>
        <div class="name text-uppercase ms-3">{{ $placeInfo['name'] }}</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse  justify-content-end flex-grow-0 px-3" id="navbarNav">
        @include('nav')
    </div>
</nav>