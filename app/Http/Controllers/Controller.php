<?php

namespace App\Http\Controllers;

use App\Services\PlaceApi;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    public function home(PlaceApi $api)
    {
        $response = $api->getMessages(['limit' => 8]);
        return view('home', [
            'title' => 'Главная',
            'posts' => $response ? $response['messages'] : [],
        ]);
    }

    public function contacts()
    {
        return view('contacts', [
            'title' => 'Контакты'
        ]);
    }

    public function news(PlaceApi $api, Request $request)
    {
        $limit = $request->get('limit') ?? 2;
        $page = $request->get('page') ?? 1;
        $response = $api->getMessages([
            'limit' => $limit,
            'page' => $page,
        ]);

        $paginator = new LengthAwarePaginator(
            new Collection($response['messages']),
            $response['pagination']['total'],
            $limit,
            $page,
        );
        $paginator->setPath('/news');

        return view('news', [
            'title' => 'Новости',
            'paginator' => $paginator,
        ]);
    }

    public function about()
    {
        $response = Http::get('http://localhost:8000/api/place/info/1');
        $response = $response->json();
        if(isset($response['place'])) {
            return view('about', [
                'title' => 'Новости',
                'place' => $response['place'],
            ]);
        }
        return back();
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
