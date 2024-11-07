<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use App\Traits\ApiTrait;

class SettingController extends Controller
{
    //
    public function __construct()
    {
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

    public function colourapi()
    {
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'theme');

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

    public function index(){
        $menus = $this->menu();
        $logos = $this->logoapi()[0]['link'];
        $themes = $this->themeapi()[0]['colour'];
        $themes = $this->themeapi()[0]['colour'];
        return view('show.setting', compact('menus','logos','themes'));
    }

    public function logo(){
        $logos = $this->logoapi()[0]['link'];
        $themes = $this->themeapi()[0]['colour'];
        $menus = $this->menu();
        return view('show.logo', compact('menus','logos','themes'));
    }

    public function background(){
        $logos = $this->logoapi()[0]['link'];
        $themes = $this->themeapi()[0]['colour'];
        $menus = $this->menu();
        $backgrounds = $this->backgroundapi()[0]['link'];
        return view('show.background', compact('menus','logos','themes','backgrounds'));
    }

    public function theme(){
        $logos = $this->logoapi()[0]['link'];
        $themes = $this->themeapi()[0]['colour'];
        $menus = $this->menu();
        $colours = $this->colourapi();
        return view('show.theme', compact('menus','logos','themes','colours'));
    }

    public function menu_update(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $response =Http::withBasicAuth('reffa', '123456')->post($this->api_url . 'setting/menu', 
            $data,
        );

        $resp = (object) json_decode($response->body(), true);

        // dd($resp);

        return Redirect('/menu')->with('success', 'Update Menu Berhasil!');}

    public function logo_update(Request $request)
    {
        $upload_photo = $request->file('file_logo')->store('logo');
        $response =Http::withBasicAuth('reffa', '123456')->post($this->api_url . 'setting/logo', [
            'logo' => $upload_photo,
        ]);

        $resp = (object) json_decode($response->body(), true);

        // dd($resp);

        return Redirect('/logo')->with('success', 'Update logo Berhasil!');
    }

    public function background_update(Request $request)
    {
        // dd($request->all());
        $upload_photo = $request->file('file_background')->store('background');
        $response =Http::withBasicAuth('reffa', '123456')->post($this->api_url . 'setting/background', [
            'background' => $upload_photo,
        ]);

        $resp = (object) json_decode($response->body(), true);

        // dd($resp);

        return Redirect('/background')->with('success', 'Update background Berhasil!');
    }

    public function theme_update(Request $request)
    {
        // dd($request->all());
        $response =Http::withBasicAuth('reffa', '123456')->post($this->api_url . 'setting/theme', [
            'theme' => $request->theme,
        ]);

        $resp = (object) json_decode($response->body(), true);

        // dd($resp);

        return Redirect('/theme')->with('success', 'Update theme Berhasil!');
    }
}
