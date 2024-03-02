@extends('layouts.base')
@section('content')
    <div class="posts">
        @foreach($posts as $post)
            <div class="post">
                <div class="title">{{ $post['title'] }}</div>
                <div class="text">{{ $post['text'] }}</div>
            </div>
        @endforeach
    </div>
@endsection