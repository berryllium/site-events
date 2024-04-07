<?php

namespace App\Http\Controllers;

use App\Services\PlaceApi;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;

class Controller extends BaseController
{
    public function home(PlaceApi $api)
    {
        $response = $api->getMessages(['limit' => 8]);
        $place = $api->getPlaceInfo();
        $sliders = $place['sliders'] ?? [];
        $vertical = [];
        $horizontal = [];
        foreach ($sliders as $slider) {
            foreach ($slider['slides'] as $slide) {
                $type = $slider['type'];
                $$type[] = $slide;
            }
        }

        return view('home', [
            'title' => 'Главная',
            'posts' => $response ? $response['messages'] : [],
            'place' => $place,
            'vertical_slider' => $vertical,
            'horizontal_slider' => $horizontal,
        ]);
    }

    public function contacts(PlaceApi $api)
    {
        $response = $api->getPlaceInfo();
        return view('contacts', [
            'title' => 'Контакты',
            'place' => $response
        ]);
    }

    public function news(PlaceApi $api, Request $request)
    {
        $limit = $request->get('limit') ?? 8;
        $page = $request->get('page') ?? 1;
        $response = $api->getMessages([
            'limit' => $limit,
            'page' => $page,
        ]);

        if(!$response) abort(404);
        $paginator = new LengthAwarePaginator(
            new Collection($response['messages']),
            $response['pagination']['total'],
            $limit,
            $page,
        );
        $paginator->setPath('/news');

        if($request->get('ajax')) {
            return [
                'html' => view('components/news-list', ['paginator' => $paginator])->render(),
                'last_page' => $paginator->lastPage() == $paginator->currentPage(),
            ];
        }

        return view('news', [
            'title' => 'Новости',
            'paginator' => $paginator,
        ]);
    }

    public function about(PlaceApi $api)
    {
        return view('about', [
            'title' => 'О нас',
            'place' => $api->getPlaceInfo(),
        ]);
    }

    public function detail($id, PlaceApi $api)
    {
        $message = $api->getMessageById($id);
        if(!$message) abort(404);
        return view('detail', [
            'title' => 'Детальная страница',
            'message' => $message,
        ]);
    }
}
