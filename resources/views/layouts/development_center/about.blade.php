@extends('base')
@section('content')
    <div class="row mb-5 mt-5">
        <div class="col page-title d-flex align-items-center justify-content-center">
            <i class="tail tail-3 me-2"></i>
            <i class="tail tail-2 me-2"></i>
            <i class="tail me-2"></i>
            <span class="about-title">О нас</span>
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