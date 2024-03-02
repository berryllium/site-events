<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    public function home()
    {
        $place = 1;
        $response = Http::get("http://127.0.0.1:8000/api/place/$place/messages", [
            'limit' => 8,
        ]);
        $response = $response->json();
        $posts = [];
        if(isset($response['messages'])) {
            foreach ($response['messages'] as $message) {
                $src = 'https://placehold.co/150';
                foreach ($message['message_files'] as $file) {
                    if(preg_match('#\.(jpg|png|webp|gif|svg)$#',$file['src'])) {
                        $src = $file['src'];
                        break;
                    }
                }
                $posts[] = [
                    'id' => $message['id'],
                    'text' => $message['text'],
                    'src' => $src
                ];
            }
        }

        return view('home', [
            'title' => 'Главная',
            'posts' => $posts
        ]);
    }

    public function contacts()
    {
        return view('contacts', [
            'title' => 'Контакты'
        ]);
    }

    public function news()
    {
        for($i = 0; $i < 8; $i++) {
            $posts[] = [
                'title' => fake('ru')->title,
                'text' => fake('ru')->text(150)
            ];
        }
        return view('news', [
            'title' => 'Новости',
            'posts' => $posts,
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

    public function detail($id)
    {
        $post = [];
        $place = 1;
        $response = Http::get("http://localhost:8000/api/place/$place/messages/$id");
        $response = $response->json();
        if(isset($response['message'])) {
            $files = [];
            foreach ($response['message']['message_files'] as $file) {
                if(preg_match('#\.(jpg|png|webp|gif|svg)$#',$file['src'])) {
                    $files[] = [
                        'type' => 'image',
                        'src' => $file['src']
                    ];
                    break;
                }
            }
            $post = [
                'text' => $response['message']['text'],
                'files' => $files
            ];
        }

        if(!$post) abort(404);


        return view('detail', [
            'title' => 'Детальная страница',
            'text' => $response['message']['text'],
            'files' => $files,
        ]);
    }
}
