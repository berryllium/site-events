<div class="card">
    <img src="{{ $img }}" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">{{ $text }}</p>
    </div>
</div>
<div class="card-link text-center mt-2">
    <a href="{{ route('detail', $id) }}" class="text-uppercase text-decoration-none">Подробнее</a>
</div>
