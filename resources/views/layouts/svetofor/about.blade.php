@extends('base')
@section('content')
    <div class="page-title mb-5">
        <span>О нас</span>
    </div>
    <div class="row about mb-5">
        <div class="col-12">
            @if($place)
                @if($place['description'])
                    {{ $place['description'] }}
                @else
                    <div class="position-relative">
                        <div class="about-img">
                            <img src="{{ asset('/asset/svetofor/images/about.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h2 class="mt-5">Основная цель магазинов</h2>
                            <p>Обеспечение населения товарами<br>по самым низким ценам</p>

                            <h2 class="mt-5">Формат сети</h2>
                            <ul class="p-2">
                                <li>Формат магазинов - жесткий дискаунтер.</li>
                                <li>Средняя площадь магазинов - 1000 кв. м.</li>
                                <li>Принцип работы - самообслуживание</li>
                                <li>Ассортимент - не более 2000 наименований товаров продовольственной и непродовольственной группы.</li>
                                <li>Оформление - минимальное аскетическое исполнение торгового зала, броское внешнее оформление.</li>
                            </ul>

                            <h2 class="mt-5">Конкурентые преимущества</h2>
                            <ul class="p-2">
                                <li>цены на 20% ниже среднерыночных, за счет работы напрямую с производителями, жестким контролем над затратами и минимальной торговой надбавке</li>
                                <li>экономия времени потребителя на поиск и покупку товара</li>
                                <li>в ассортименте присутствуют товары, при покупке которых, потребителю не нужно переплачивать за бренд</li>
                                <li>удобное расположение и транспортная доступность магазинов (находятся в черте города на оживленных магистралях)</li>
                                <li>отсутствие платы за "вход" для производителей товаров.</li>
                                <li>отсутствие каких-либо дополнительных сборов с производителей товаров, отсутствие ретро-бонусов и подобных выплат.</li>
                            </ul>
                        </div>
                    </div>
                    
                @endif
                <div class="row appeal align-items-center">
                    <div class="col-lg-4 col-12 image">
                        <img class="w-100" src="{{ $placeInfo['appeal_image_src'] }}" alt="">
                    </div>
                    <div class="col-lg-8 col-12 p-5 text">
                        {!! $placeInfo['appeal_text'] !!}
                    </div>
                </div>
            @else
                <div>Нет связи с сервером</div>
            @endif
        </div>
    </div>
@endsection