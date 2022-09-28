<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Auth;
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
Route::get('/',[Home::class,'home']);
Route::get('/about',[Home::class,'about']);
Route::get('/login',[Auth::class,'login']);
Route::get('/reg',[Auth::class,'reg']);
Route::post('/reg',[Auth::class,'store']);