@extends('layouts.base')
@section('content')
    <div>Название: {{ $place['name'] }}</div><br>
    <div>Адрес: {{ $place['address'] }}</div><br>
    <div>Описание: {{ $place['description'] }}</div><br>
@endsection