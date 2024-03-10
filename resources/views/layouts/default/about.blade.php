@extends('base')
@section('content')
    <div class="row">
        @if($place)
            @if($place['image'])
                <div class="col-6">
                    <img src="{{ $place['image_src'] }}" alt="{{ $place['name'] }}" class="w-100">
                </div>
            @endif
        <div class="col-6 overflow-hidden">
            <table class="table table-striped">
                <tr><th>Название:</th><td> {{ $place['name'] }} </td></tr>
                <tr><th>Описание:</th><td> {{ $place['description'] }} </td></tr>
                <tr><th>Адрес:</th><td> {{ $place['address'] }} </td></tr>
                <tr><th>Описание:</th><td> {{ $place['description'] }} </td></tr>
                <tr><th>Время работы:</th><td> {{ $place['working_hours'] }} </td></tr>
                <tr><th>Дополнительная информация:</th><td> {!! $place['additional_info'] !!} </td></tr>
            </table>
        </div>

        @else
            <div>Нет связи с сервером</div>
        @endif
    </div>
@endsection