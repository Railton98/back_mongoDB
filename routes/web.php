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

//Usuario
Route::get('user', 'UserController@index');
Route::post('user', 'UserController@create');
Route::put('user/{id}', 'UserController@update');
Route::delete('user/{id}', 'UserController@destroy');

//Perfil
Route::get('profile', 'PerfilController@index');
Route::post('profile', 'PerfilController@create');
Route::put('profile/{id}', 'PerfilController@update');
Route::delete('profile/{id}', 'PerfilController@destroy');
