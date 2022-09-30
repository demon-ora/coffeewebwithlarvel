<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Contacts;
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
Route::get('/blog',[Home::class,'blog'])->middleware('islogin');
Route::get('/contact',[Home::class,'contact']);
Route::post('/contact',[Contacts::class,'storecontact']);
Route::get('/dashboard',[Dashboard::class,'dash'])->middleware('islogin');
Route::get('/dashboard/delete/{id}',[Dashboard::class,'destory'])->middleware('islogin');
Route::get('/dashboard/edit/{id}',[Dashboard::class,'edit'])->middleware('islogin');
Route::post('/dashboard/update/{id}',[Dashboard::class,'update'])->middleware('islogin');
Route::get('/dashboardcontact',[Dashboard::class,'dashcontact'])->middleware('islogin');
Route::get('/dashboardcontact/delete/{id}',[Dashboard::class,'destorycontact'])->middleware('islogin');
Route::get('/dashboardcontact/edit/{id}',[Dashboard::class,'editcontact'])->middleware('islogin');
Route::post('/dashboardcontact/update/{id}',[Dashboard::class,'updatecontact'])->middleware('islogin');
Route::get('/dashboardblog',[Dashboard::class,'dashblog'])->middleware('islogin');
Route::post('/dashboardblog',[Dashboard::class,'store'])->middleware('islogin');
Route::get('/dashboardblog/delete/{id}',[Dashboard::class,'destoryblog'])->middleware('islogin');
Route::get('/dashboardblog/edit/{id}',[Dashboard::class,'editblog'])->middleware('islogin');
Route::post('/dashboardblog/update/{id}',[Dashboard::class,'updateblog'])->middleware('islogin');
Route::get('/home/logout',[Home::class,'logout']);
Route::get('/dashboard/logout',[Dashboard::class,'logout']);