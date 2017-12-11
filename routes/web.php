<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|---------p----------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Páginas
Route::get  ('/',        'Requests@index');
Route::get  ('Login',    'Requests@Login');
Route::get  ('Register', 'Request@Register');

// GeoLocalização
Route::post ('Geo/update', 'GeoLocation@update');
Route::get  ('Geo/info',   'GeoLocation@getInfo');

// Administração de usuários
Route::get  ('Users',             'UsersController@index');
Route::get  ('User/{id}', 		  'UsersController@show');
Route::post ('User/create',       'UsersController@store');
Route::get  ('Register',          'UsersController@create');
Route::get  ('User/delete/{id}',  'UsersController@destroy');
Route::post ('User/edition/{id}', 'UsersController@edition');
Route::get  ('User/edit/{id}',    'UsersController@edit');

// Métodos GET do UsersController
Route::get  ('User/IP/{id}',     'UsersController@getIP');
Route::get  ('User/Name/{id}',   'UsersController@getName');
Route::get  ('User/Pass/{id}',   'UsersController@getPass');
Route::get  ('User/Mail/{id}',   'UsersController@getMail');
Route::get  ('User/CPF/{id}',    'UsersController@getCPF');
Route::get  ('User/Birth/{id}',  'UsersController@getBirth');
Route::get  ('Users/Level/{id}', 'UsersController@getLevel');