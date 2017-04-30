<?php

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
Route::get('admin/{latitude}/{longitude}','indexController@storeData');
Route::get('/index',function() {
    return view('index');
});
Route::get('/pathtrace',function() {
    return view('pathtrace');
});
Route::get('/home',function() {
	return view('home');
});