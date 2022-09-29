<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
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
Route::post('/login',[Auth::class,'logblog']);
Route::get('/reg',[Auth::class,'reg']);
Route::post('/reg',[Auth::class,'store']);
Route::get('/blog',[Home::class,'blog']);
Route::get('/contact',[Home::class,'contact']);
Route::get('/dashboard',[Dashboard::class,'dash']);
Route::get('/dashboard/delete/{id}',[Dashboard::class,'destory']);
Route::get('/dashboard/edit/{id}',[Dashboard::class,'edit']);
Route::post('/dashboard/update/{id}',[Dashboard::class,'update']);