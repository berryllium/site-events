<nav class="navbar navbar-expand-lg d-flex mb-5">
    <div class="d-flex">
        <a class="navbar-brand" href="{{ route('home') }}"><img width="128" src="{{ $placeInfo['logo_image_src'] }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse  justify-content-end flex-grow-0" id="navbarNav">
        @include('nav')
    </div>
</nav>