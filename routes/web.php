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

// Administração de usuários
Route::resource('Users', 'UsersController');

// Administração de empresas
Route::resource('Empresas', 'EmpresasController');

// Rotas para o
Route::resource('TrabalheConosco', 'TrabalheConosco');
