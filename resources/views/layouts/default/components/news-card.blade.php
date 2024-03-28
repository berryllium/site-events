<div class="card">
    <img src="{{ $img }}" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">{{ $text }}</p>
        <p><b>{{ \Illuminate\Support\Carbon::createFromTimeString($date)->format('d.m.Y H:i') }}</b></p>
        <a href="{{ route('detail', $id) }}" class="btn btn-primary">Подробнее</a>
    </div>
</div>