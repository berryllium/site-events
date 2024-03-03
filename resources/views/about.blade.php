@extends('layouts.base')
@section('content')
    <div class="d-flex align-items-start">
        @if($place)
            @if($place['image'])
                <div class="image mw-50 me-5">
                    <img src="{{ $place['image_src'] }}" alt="{{ $place['name'] }}">
                </div>
            @endif
            <table class="table table-striped">
                <tr><th>Название:</th><td> {{ $place['name'] }} </td></tr>
                <tr><th>Описание:</th><td> {{ $place['description'] }} </td></tr>
                <tr><th>Адрес:</th><td> {{ $place['address'] }} </td></tr>
                <tr><th>Описание:</th><td> {{ $place['description'] }} </td></tr>
                <tr><th>Время работы:</th><td> {{ $place['working_hours'] }} </td></tr>
                <tr><th>Дополнительная информация:</th><td> {!! $place['additional_info'] !!} </td></tr>
                <tr><th>Ссылка для адреса:</th><td> {!! $place['address_link'] !!} </td></tr>
            </table>


        @else
            <div>Нет связи с сервером</div>
        @endif
    </div>
@endsection