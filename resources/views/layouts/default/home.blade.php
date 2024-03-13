@extends('base')
@section('content')

    @if($horizontal_slider)
    <div class="mb-5 d-none d-lg-block">
        <x-slider :files="$horizontal_slider"></x-slider>
    </div>
    @endif

    @if($vertical_slider)
        <div class="mb-5 d-block d-lg-none">
            <x-slider :files="$vertical_slider"></x-slider>
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