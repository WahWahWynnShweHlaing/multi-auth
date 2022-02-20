<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', [LoginController::class , 'showAdminLoginForm']);
Route::get('/login/user', [LoginController::class , 'showWriterLoginForm']);
Route::get('/register/admin', [RegisterController::class , 'showAdminRegisterForm']);
Route::get('/register/user', [RegisterController::class , 'showWriterRegisterForm']);

Route::post('/login/admin', [LoginController::class , 'adminLogin']);
Route::post('/login/user', [LoginController::class , 'writerLogin']);
Route::post('/register/admin', [RegisterController::class , 'createAdmin']);
Route::post('/register/user', [RegisterController::class , 'createWriter']);

Route::view('/home', 'layouts.home')->middleware('auth');
Route::view('/admin', 'layouts.admin');
Route::view('/user', 'layouts.user');