@extends('layouts.base')
@section('content')
    @if($message)
    <div class="single-post">
        @if($message['files'])
            <div class="images">
                @foreach($message['files'] as $file)
                    @if($file['type'] == 'image')
                        <div class="img">
                            <img src="{{ $file['src'] ?? 'https://placehold.co/400' }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
        <div>{!! $message['text'] !!}</div>
    </div>
    @endif

@endsection