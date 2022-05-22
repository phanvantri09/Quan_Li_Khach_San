<?php

use App\Http\Controllers\CategoryController;
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
	Route::group(['prefix'=>'category'], function(){
		Route::get('list',[CategoryController::class,'getlist']);
		Route::get('add',[CategoryController::class,'getAdd']);
		Route::post('add',[CategoryController::class,'postAdd']);
		Route::get('edit/{id}',[CategoryController::class,'getEdit']);
		Route::post('edit/{id}',[CategoryController::class,'postEdit']);
		Route::get('delete/{id}',[CategoryController::class,'delete']);
	});
});