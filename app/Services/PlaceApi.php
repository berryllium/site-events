<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PlaceApi
{
    private $headers;
    private $url;

    public function __construct(Request $request)
    {
        $this->headers = [
            'Authorization' => 'Bearer ' . env('PLACE_API_TOKEN'),
            'Accept' => 'application/json'
        ];
        $this->url = env('PLACE_API_URL') . '/api/place/' . $request->host() . '/';
    }

    public function getPlaceInfo()
    {
        $response = $this->query('info');
        return $response['place'] ?? null;
    }

    public function getMessageById($id) : ?array
    {
        $response = $this->query("message/$id");
        return $response['message'] ?? null;
    }

    public function getMessages($params)
    {
        $response = $this->query('messages', $params);
        return $response ?? [];
    }

    private function query($path, $params = null)
    {
        $cache_id = md5(serialize($params) . $path);
        $data = Cache::remember($cache_id, env('CACHE_TIME', 5), function () use($path, $params) {
            $url = $this->url . $path;
            $response = Http::withHeaders($this->headers)->get($url, $params);
            $data = $response->json();
            if($response->status() === 200 && $data) {
                return $data;
            } else {
                Log::channel('api')->error("Ошибка обращения к place_api " . $response->status(), [
                    'url' => $url,
                    'path' => $path,
                    'params' => $params,
                    'message' => $data['message'] ?? ''
                ]);
                return false;
            }
        });

        return $data;
        

    }
}