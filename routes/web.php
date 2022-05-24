<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ImghotelController;
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
	Route::group(['prefix'=>'room'], function(){
		Route::get('show/{id}',[RoomController::class,'show']);

		Route::get('list',[RoomController::class,'getlist']);
		Route::get('add',[RoomController::class,'getAdd']);
		Route::post('add',[RoomController::class,'postAdd']);
		Route::get('edit/{id}',[RoomController::class,'getEdit']);
		Route::post('edit/{id}',[RoomController::class,'postEdit']);
		Route::get('delete/{id}',[RoomController::class,'delete']);
	});
	Route::group(['prefix'=>'img'], function(){
		Route::get('list',[ImghotelController::class,'getlist']);
		Route::get('add/{id}',[ImghotelController::class,'getAdd']);
		Route::post('add/{id}',[ImghotelController::class,'postAdd']);
		Route::get('edit/{id}',[ImghotelController::class,'getEdit']);
		Route::post('edit/{id}',[ImghotelController::class,'postEdit']);
		Route::get('delete/{id}',[ImghotelController::class,'delete']);
	});
});

Route::group(['prefix'=>'/'], function(){
	Route::get('/',[HomeController::class,'homepage'])->name('homepage');
	Route::get('/tim-kiem',[HomeController::class,'search'])->name('search');
	Route::group(['prefix'=>'cart'], function(){
		Route::get('/',[BookController::class,'cart'])->name('cart');
		//Route::get('add',[UsersController::class,'getAdd']);
		// Route::post('add',[UsersController::class,'postAdd']);
		// Route::get('edit/{id}',[UsersController::class,'getEdit']);
		// Route::post('edit/{id}',[UsersController::class,'postEdit']);
		// Route::get('delete/{id}',[UsersController::class,'delete']);
	});
	Route::group(['prefix'=>'room'], function(){
		Route::get('/',[RoomController::class,'room'])->name('cart');
	});
});

Route::get('dangnhap',[HomeController::class,'login'])->name("login");
Route::get('dangky',[HomeController::class,'register'])->name("register");
Route::post('postlogin',[HomeController::class,'postlogin'])->name("postlogin");
Route::post('postregister',[HomeController::class,'postregister'])->name("postregister");
Route::get('dangxuat',[HomeController::class,'logout'])->name("logout");