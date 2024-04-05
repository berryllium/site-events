@extends('base')
@section('content')
    <div class="page-title mb-5"><span>Новости</span></div>
    <div class="row">
        @foreach($paginator as $data)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <x-news-card :data="$data"></x-news-card>
            </div>
        @endforeach
    </div>
    {{ $paginator->links('pagination::bootstrap-5') }}
@endsection