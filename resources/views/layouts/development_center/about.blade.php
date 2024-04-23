@extends('base')
@section('content')
    <div class="row mb-5 mt-5">
        <div class="col page-title d-flex align-items-center justify-content-center">
            <span class="about-title me-2">О нас</span>
            <i class="tail ms-2"></i>
            <i class="tail tail-2 ms-2"></i>
            <i class="tail tail-3 ms-2"></i>
        </div>
    </div>
    <div class="row about-block align-items-center">
        <div class="col-lg-7 col-12">
            <div class="title"> {{ $placeInfo['name'] }}</div>
            <div class="text">
                {!! $placeInfo['description'] !!}
            </div>
        </div>
        <div class="col-lg-5 col-12">
            <div class="image text-end">
                <img src="{{ @asset('/asset/development_center/images/girl.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection