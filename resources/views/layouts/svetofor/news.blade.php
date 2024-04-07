@extends('base')
@section('content')
    <div class="page-title mb-5"><span>Новости</span></div>
    <div class="row news-list">
        <x-news-list :paginator="$paginator"></x-news-list>
    </div>
    @if($paginator->lastPage() != $paginator->currentPage())
        <div class="text-center">
            <span class="more" id="more">Загрузить еще</span>
        </div>
    @endif
@endsection