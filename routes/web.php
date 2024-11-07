<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'index']);

Route::get('/info', function () {
    return view('auth.login');
})->name('info');

Route::post('/apilogin', [AuthController::class, 'apiLogin']);
Route::post('/apilogout', [AuthController::class, 'apiLogout']);

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/detail/{id}', [UserController::class, 'detail']);
Route::get('/form', [UserController::class, 'form']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
Route::post('/user/update', [UserController::class, 'update']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/menu', [SettingController::class, 'index']);
Route::get('/logo', [SettingController::class, 'logo']);
Route::get('/background', [SettingController::class, 'background']);
Route::get('/theme', [SettingController::class, 'theme']);
Route::post('/update/logo', [SettingController::class, 'logo_update']);
Route::post('/update/background', [SettingController::class, 'background_update']);
Route::post('/update/menu', [SettingController::class, 'menu_update']);
Route::post('/update/theme', [SettingController::class, 'theme_update']);