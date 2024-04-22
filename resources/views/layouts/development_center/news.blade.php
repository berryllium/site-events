@extends('base')
@section('content')
    <div class="row mb-5 mt-5">
        <div class="col page-title d-flex align-items-center justify-content-center">
            <span class="about-title me-2">Новости</span>
            <i class="tail me-2"></i>
            <i class="tail tail-2 me-2"></i>
            <i class="tail tail-3 me-2"></i>
        </div>
    </div>
    <div class="row news-list">
        <x-news-list :paginator="$paginator"></x-news-list>
    </div>
    @if($paginator->lastPage() != $paginator->currentPage())
        <div class="text-center">
            <span class="more" id="more">Загрузить еще</span>
        </div>
    @endif
@endsection