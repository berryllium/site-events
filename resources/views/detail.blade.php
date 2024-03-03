@extends('layouts.base')
@section('content')
    @if($message)
    <div class="single-post">
        @if($message['files'])
            <div class="images">
                @foreach($message['files'] as $file)
                    <div class="file col-3 pe-1 pb-1 align-self-end">
                        <div class="border p-2">
                            <a href="<?=$file['src']?>" class="d-block mb-3" target="_blank">
                                @if($file['type'] == 'video')
                                    <video width="100%" height="auto" controls>
                                        <source src="{{ $file->src }}">
                                        Your browser does not support the video tag.
                                    </video>
                                @elseif($file['type'] == 'image')
                                    <img src="<?=$file['src']?>" alt="" height="auto" width="100%">
                                @endif
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <div>{!! $message['text'] !!}</div>
    </div>
    @endif

@endsection