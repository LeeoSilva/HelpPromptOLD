<?php

namespace App\Http\Controllers;
use Request;

// Tables;
use App\estabelecimento;
use App\estab_cep;
use App\telefones;
use App\tipo_servico;
use App\veiculos;
use App\estab_estado;
use App\estab_cidade;
use App\estab_bairro;
use App\estab_ender;
use App\represent_contato;
use App\empresa;

class EmpresasController extends Controller{
	public function index(){
		// Envia todos os dados das empresas registradas no banco
		// para uma página trata-los e lista-los.

		$info = trabalhe_conosco::all();
		return view('Empresas.List', compact('info'));
	}


	public function store(){}
	public function create(){}
	public function destroy($id){}
	public function update($id){}
	public function show($id){}
	public function edit($id){}

}
