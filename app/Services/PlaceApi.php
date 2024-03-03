<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PlaceApi
{
    private $headers;
    private $url;

    public function __construct()
    {
        $this->headers = [
            'Authorization' => 'Bearer ' . env('PLACE_API_TOKEN'),
            'Accept' => 'application/json'
        ];
        $this->url = env('PLACE_API_URL') . '/api/place/' . env('PLACE_ID') . '/';
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
        $url = $this->url . $path;
        $response = Http::withHeaders($this->headers)->get($url, $params);
        $data = $response->json();
        
        if($response->status() === 200 && $data) {
            return $data;
        } else {
            Log::channel('api')->error("Ошибка обращения к place_api", [
                'url' => $url,
                'path' => $path,
                'params' => $params,
                'message' => $data['message'] ?? ''
            ]);
            return false;
        }
    }
}