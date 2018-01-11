<?php

namespace App\Http\Controllers;

use Request;
use App\estab_geo;
use App\estabelecimento;
use App\contato_represen;
use App\trabalhe_conosco;
use Illuminate\Http\Request;


class EmpresasController extends Controller{
	public function index(){
		// Envia todos os dados das empresas registradas no banco
		// para uma página trata-los e lista-los.

		$info = trabalhe_conosco::all();
		return view('Empresas.List', compact('info'));
	}



	public function store(){
		
	}

}
