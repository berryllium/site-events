<div id="{{ $id }}" class="carousel slide" data-bs-interval="100" data-bs-ride="true">
    <div class="carousel-inner">
        @foreach($files as $k => $file)
            @if($file['src'])
                <a href="{{ $file['link'] }}" class="carousel-item {{ $k ? '' : 'active' }}">
                    <img src="{{ $file['src'] }}" class="d-block w-100" alt="{{ $file['name'] }}">
                </a>
            @endif
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $id }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#{{ $id }}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>