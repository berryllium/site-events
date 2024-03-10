<div class="card">
    <img src="{{ $img }}" class="card-img-top" alt="...">
    <div class="card-body">
        <p><b>{{ $date }}</b></p>
        <p class="card-text">{{ $text }}</p>
        <a href="{{ route('detail', $id) }}" class="btn btn-primary">Подробнее</a>
    </div>
</div>