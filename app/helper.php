<?php

use Illuminate\Support\Facades\Http;

function menu_list()
{
	$response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'menu');

	$resp = (object) json_decode($response->body(), true);
	// dd($resp->data);
	$menus = $resp->data;
	return $menus;
}