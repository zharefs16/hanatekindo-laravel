<?php

namespace App\Http\Controllers;

use App\Models\asetbmn;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
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
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'user/list');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $users = $resp->data;
        $menus = $this->menu();
        $logos = $this->logoapi()[0]['link'];
        $themes = $this->themeapi()[0]['colour'];
        return view('data.user', compact('users','menus','logos','themes'));
    }
    
    public function form()
    {
        $menus = $this->menu();
        $logos = $this->logoapi()[0]['link'];
        $themes = $this->themeapi()[0]['colour'];
        return view('form.user', compact('menus','logos','themes'));
    }

    public function store(Request $request)
    {
        if($request->password != $request->confirm_password){
            return redirect()->back()->with('failed', 'Password dan konfirmasi password tidak sama');
        }

        $response =Http::withBasicAuth('reffa', '123456')->post($this->api_url . 'user/create', [
            'user_email' => $request->user_email,
            'user_fullname' => $request->user_fullname,
            'password' => $request->password,
        ]);

        $resp = (object) json_decode($response->body(), true);

        // dd($resp);

        return Redirect::route('user')->with('success', 'Registrasi User Berhasil!');
    }

    public function detail($user_id)
    {
        $response =Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'user', [
            'user_id' => $user_id,
        ]);

        $resp = (object) json_decode($response->body(), true);
        $users = $resp->data;

        $menus = $this->menu();
        $logos = $this->logoapi()[0]['link'];
        $themes = $this->themeapi()[0]['colour'];
        return view('show.user', compact('users', 'menus','logos','themes'));
    }

    public function hapus($user_id)
    {
        // dd($user_id);
        $response =Http::withBasicAuth('reffa', '123456')->post($this->api_url . 'user/hapus', [
            'user_id' => $user_id,
        ]);

        $resp = (object) json_decode($response->body(), true);
        return Redirect::route('user')->with('success', 'Hapus User Berhasil!');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        if($request->password != $request->confirm_password){
            return redirect()->back()->with('failed', 'Password dan konfirmasi password tidak sama');
        }
        $response =Http::withBasicAuth('reffa', '123456')->post($this->api_url . 'user/update', [
            'user_id' => $request->user_id,
            'user_email' => $request->user_email,
            'user_fullname' => $request->user_fullname,
            'password' => $request->password
        ]);

        $resp = (object) json_decode($response->body(), true);

        // dd($resp);

        return Redirect::route('user')->with('success', 'Update User Berhasil!');
    }
 
}
