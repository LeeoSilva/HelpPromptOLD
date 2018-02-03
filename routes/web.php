<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
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
Route::get  ('User/{id}', 		  	'UsersController@show');
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

// Administração de empresas
Route::post('Empresas', 							 'EmpresasController@index');
Route::post('Empresa/estabelecimento', 'EmpresasController@storeEstabelecimento');
Route::post('Empresa/cep', 						 'EmpresasController@storeEstab_cep');
Route::post('Empresa/telefones', 			 'EmpresasController@storeTelefones');
Route::post('Empresa/TipoServico', 		 'EmpresasController@storeTipo_servico');
Route::post('Empresa/Veiculos', 			 'EmpresasController@storeVeiculos');
Route::post('Empresa/Estado', 				 'EmpresasControler@storeEstado');
Route::post('Empresa/Cidade', 				 'EmpresasController@storeCidade');
Route::post('Empresa/Bairro', 				 'EmpresasController@storeBairro');
Route::post('Empresa/Endereco', 			 'EmpresasController@storeEndereco');
Route::post('Empresa/Representante', 	 'EmpresasControler@storeRepresentante');

// Posts para administração e criação de
Route::post('TrabalheConosco', 					 'TrabalhoConosco@index');
Route::post('TrabalheConosco/create', 	 'TrabalheConosco@store');
Route::post('TrabalheConosco/update', 	 'TrabalheConosco@update');
Route::post('TrabalheConosco/delete', 	 'TrabalheConosco@delete');
Route::post('TrabalheConosco/edit/{id}', 'TrabalheConosco@edit');
