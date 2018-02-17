<?php

/*
|---------
| Routes
|---------
|
| Para listagem de rotas utilize o comando
| `php artisan routes:list`
|
*/

Route::get('/', 'Requests@index');
Route::get('Login', 'Requests@login');

// Administração de usuários
Route::resource('Users', 'UsersController');

// Administração e registro de empresas
Route::resource('Empresas', 'EmpresasController');


Route::get('work', function () {
  return view('Formularios.workcomplementar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
