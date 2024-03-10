@extends('base')
@section('content')
    @if($files)
    <div class="mb-5">
        <x-slider :files="$files"></x-slider>
    </div>
    @endif
    <div class="row">
        @foreach($posts as $data)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <x-news-card :data="$data"></x-news-card>
            </div>
        @endforeach
    </div>
@endsection