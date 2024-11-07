<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Permohonan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->api_url = "http://luapi.test/ums/v1/";
    }

    public function menu()
    {
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'menu');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $menus = $resp->data;
        return $menus;
    }

    public function themeapi()
    {
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'theme/used');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $themes = $resp->data;
        return $themes;
    }

    public function logoapi()
    {
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'logo');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $logos = $resp->data;
        return $logos;
    }

    public function backgroundapi()
    {
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'background');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $backgrounds = $resp->data;
        return $backgrounds;
    }
    
    public function index()
    {
        // dd(session('user_email'));
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'user/list');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $users = $resp->data;
        $user = [
            "count" => $resp->user, 
            "title" => "User", 
            "percentage" => round($resp->user_login/$resp->user*100, 2),
            "desc" => "Login : ".$resp->user_login." user"
        ];
        $menus = $this->menu();
        $logos = $this->logoapi()[0]['link'];
        $themes = $this->themeapi()[0]['colour'];
        return view('home.index', compact('user','menus','logos','themes'));
    }
}
