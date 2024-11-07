<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    protected $login = 'login';
    protected $logout = 'logout';

    public function __construct()
    {
        $this->api_url = "http://luapi.test/ums/v1/";
    }

    public function backgroundapi()
    {
        $response = Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'background');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $backgrounds = $resp->data;
        return $backgrounds;
    }

    public function logoapi()
    {
        $response = Http::withBasicAuth('reffa', '123456')->get($this->api_url . 'logo');

        $resp = (object) json_decode($response->body(), true);
        // dd($resp->data);
        $logos = $resp->data;
        return $logos;
    }

    public function index(){
        $backgrounds = $this->backgroundapi()[0]['link'];
        $logos = $this->logoapi()[0]['link'];
        // dd($backgrounds);
        return view('auth.login', compact('backgrounds','logos'));
    }
    
    public function apiLogin(Request $request)
    {
        // dd(session('user_email'));
        $username = $request->user_email;
        
        $response = Http::withBasicAuth('reffa', '123456')->post($this->api_url . $this->login, [
            'user_email' => $request->user_email,
            'password' => $request->password,
        ]);

        $resp = (object) json_decode($response->body(), true);

        // dd($resp);
        $user = $resp->data;

        if($resp->status == '00'){
            $request->session()->put('login', 'login');
            $request->session()->put('user_email', $user['user_email']);
            $request->session()->put('user_fullname', $user['user_fullname']);
            $request->session()->put('user_status', $user['user_status']);
            return redirect()->intended('/dashboard');
        }else{
            return back()->with('loginError', 'Login Gagal!');
        }

    }

    public function apiLogout(Request $request)
    {
        // dd(session('user_email'));
        $username = session('user_email');
        
        $response = Http::withBasicAuth('reffa', '123456')->post($this->api_url . $this->logout, [
            'user_email' => $username,
        ]);

        $resp = (object) json_decode($response->body(), true);

        // dd($resp);

        if($resp->status == '00'){
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->intended('/');
        }else{
            return back()->with('Error', 'Logout Gagal!');
        }

    }
}
