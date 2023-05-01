<?php

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
Route::get('/about',function(){
    return view('pages.about');
});
Route::get('/users/{id}',function($id){
    return 'This Is User '.$id;
});
Route::get('/users/{id}/{name}',function($id,$name){
    return 'This Is User '.$name.' with id is '.$id;
});
Route::get('/','App\Http\Controllers\PagesController@index');
Route::get('/about','App\Http\Controllers\PagesController@about');
Route::get('/services','App\Http\Controllers\PagesController@services');
Route::get('/laravel','App\Http\Controllers\PagesController@laravel');
Route::get('/','App\Http\Controllers\UserController@index');
Route::get('/user','App\Http\Controllers\UserController@user');