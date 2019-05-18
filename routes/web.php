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

Route::get('blogs','BlogController@index');
Route::get('blog/create','BlogController@create');
Route::post('blogs','BlogController@store');
Route::get('blog/edit/{id}','BlogController@edit');
Route::put('blogs/{id}','BlogController@update');
Route::delete('blogs/{id}','BlogController@destroy');
