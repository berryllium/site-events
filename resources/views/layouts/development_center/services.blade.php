@extends('base')
@section('content')
    <div class="row mb-5 mt-5">
        <div class="col page-title d-flex align-items-center justify-content-center">
            <i class="tail tail-3 me-2"></i>
            <i class="tail tail-2 me-2"></i>
            <i class="tail me-2"></i>
            <span class="about-title">{{ $placeInfo['service_title'] }}</span>
        </div>
    </div>
    @foreach($services as $service)
        <div class="row service-block align-items-center">
            <div class="{{ $service['image'] ? 'col-lg-7' : '' }} col-12">
                <div class="title"> {{ $service['name'] }}</div>
                <div class="text">
                    {!! $service['description'] !!}
                </div>
            </div>
            @if($service['image'])
            <div class="col-lg-5 col-12">
                <div class="image text-end">
                    <img src="{{ $service['src'] }}" alt="">
                </div>
            </div>
            @endif
        </div>
    @endforeach
@endsection