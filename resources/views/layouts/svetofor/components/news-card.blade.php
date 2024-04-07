<div data-id="{{ $id }}" class="card-wrap col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card">
        <img src="{{ $img }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{ $text }}</p>
        </div>
    </div>
    <div class="card-link text-center mt-2">
        <a href="{{ route('detail', $id) }}" class="text-uppercase">Подробнее</a>
    </div>
</div>