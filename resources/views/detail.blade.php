@extends('layouts.base')
@section('content')
    <div class="single-post">
        @if($files)
            <div class="images">
                @foreach($files as $file)
                    @if($file['type'] == 'image')
                        <div class="img">
                            <img src="{{ $file['src'] }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
            <div>{!! $text !!}</div>
    </div>

@endsection