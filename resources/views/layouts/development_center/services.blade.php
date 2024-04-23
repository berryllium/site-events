@extends('base')
@section('content')
    <div class="row mb-5 mt-5">
        <div class="col page-title d-flex align-items-center justify-content-center">
            <span class="about-title me-2">{{ $placeInfo['service_title'] }}</span>
            <i class="tail ms-2"></i>
            <i class="tail tail-2 ms-2"></i>
            <i class="tail tail-3 ms-2"></i>
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