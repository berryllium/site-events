@extends('base')
@section('content')
    <div class="posts">
        @foreach($posts as $post)
            <a href="{{ route('detail', $post['id']) }}" class="post">
                <img class="img" src="{{ $post['main_picture'] ?? 'https://placehold.co/400' }}" alt="">
                <div class="text">{{ Str::of($post['text'])->limit(100) }}</div>
            </a>
        @endforeach
    </div>
@endsection