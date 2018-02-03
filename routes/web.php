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

// Administração de empresas
Route::resource('Empresas', 'EmpresasController');

// Rotas para o cadastro de serviços
Route::resource('TrabalheConosco', 'TrabalheConosco');
