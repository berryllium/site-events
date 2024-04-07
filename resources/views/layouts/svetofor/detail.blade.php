@extends('base')
@section('content')
    @if($message)
    <div class="single-post row">
        <div class="col-12 mb-5">
            <div class="new-title">
                <div class="text-center">
                    Новинка
                    @if(isset($message['data']['string'])):
                    <div class="name small">{{ $message['data']['string'] }}</div>
                    @endif
                </div>
            </div>
        </div>
        @if($message['files'])
            <div class="images col-12 col-lg-6 row">
                @foreach($message['files'] as $file)
                    <div class="file col-12 pe-1 pb-1 align-self-end">
                        <div class="border p-2">
                            <a href="<?=$file['src']?>" class="d-block mb-3" target="_blank">
                                @if($file['type'] == 'video')
                                    <video width="100%" height="auto" controls>
                                        <source src="{{ $file->src }}">
                                        Your browser does not support the video tag
                                    </video>
                                @elseif($file['type'] == 'image')
                                    <img src="<?=$file['src']?>" alt="" height="auto" width="100%">
                                @endif
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 col-lg-6 ps-5 text">{!! nl2br($message['text']) !!}</div>
        @endif
    </div>
    @endif

@endsection