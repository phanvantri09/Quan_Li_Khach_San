<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'], function(){
	Route::get('home',[HomeController::class,'home'])->name("home");
	Route::group(['prefix'=>'category'], function(){
		Route::get('list',[CategoryController::class,'getlist']);
		Route::get('add',[CategoryController::class,'getAdd']);
		Route::post('add',[CategoryController::class,'postAdd']);
		Route::get('edit/{id}',[CategoryController::class,'getEdit']);
		Route::post('edit/{id}',[CategoryController::class,'postEdit']);
		Route::get('delete/{id}',[CategoryController::class,'delete']);
	});
	Route::group(['prefix'=>'users'], function(){
		Route::get('list',[UsersController::class,'getlist']);
		Route::get('add',[UsersController::class,'getAdd']);
		Route::post('add',[UsersController::class,'postAdd']);
		Route::get('edit/{id}',[UsersController::class,'getEdit']);
		Route::post('edit/{id}',[UsersController::class,'postEdit']);
		Route::get('delete/{id}',[UsersController::class,'delete']);
	});
});
Route::get('dangnhap',[HomeController::class,'login'])->name("login");
Route::get('dangky',[HomeController::class,'register'])->name("register");
Route::post('postlogin',[HomeController::class,'postlogin'])->name("postlogin");
Route::post('postregister',[HomeController::class,'postregister'])->name("postregister");
Route::get('dangxuat',[HomeController::class,'logout'])->name("logout");