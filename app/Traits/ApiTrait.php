<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait ApiTrait
{
    public function __construct()
    {
        $this->api_url = "http://luapi.test/ums/v1/";
    }

    public function menuApi()
    {
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'menu');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $menus = $resp->data;
        return $menus;
    }

    public function logoApi()
    {
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'logo');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $logos = $resp->data;
        return $logos;
    }

    public function background()
    {
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'background');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $backgrounds = $resp->data;
        return $backgrounds;
    }
}