@extends('layouts.base')
@section('content')
    <div>Последние новости:</div><br>
    <div class="posts">
        @foreach($posts as $post)
            <a href="{{ route('detail', $post['id']) }}" class="post">
                <img class="img" src="{{ $post['src'] }}" alt="">
                <div class="text">{{ Str::of($post['text'])->limit(20) }}</div>
            </a>
        @endforeach
    </div>
@endsection