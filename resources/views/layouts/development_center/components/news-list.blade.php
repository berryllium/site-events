@foreach($paginator as $data)
    <x-news-card :data="$data"></x-news-card>
@endforeach