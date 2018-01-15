<?php

namespace App\Http\Controllers;

use Request;
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
use Illuminate\Http\Request;


class EmpresasController extends Controller{
	public function index(){
		// Envia todos os dados das empresas registradas no banco
		// para uma página trata-los e lista-los.

		$info = trabalhe_conosco::all();
		return view('Empresas.List', compact('info'));
	}

	public function storeEstabelecimento(RegisterRequest $request){}
	public function storeTelefones(RegisterRequest $request){}
	public function storeTipo_servico(RegisterRequest $request){}
	public function storeVeiculos(RegisterRequest $request){
		$veiculos = new veiculos;
		$veiculos = $request->motos;
		$veiculos = $request->carros;
		$veiculos = $request->guinchos;
		$veiculos->save();

		return redirect('Empresas');
	}

	public function storeCidade(RegisterRequest $request){
		$cidade = new estab_cidade;
		$cidade = $request->estab_cidade;

		return redirect('Empresas');
	}

	public function storeEstado(RegisterRequest $request){
		$estado = new estab_estado;
		$estado = $request->estab_estado;
		$estado->save();
		return redirect('Empresas');

	}

	public function storeBairro(RegisterRequest $request){
		$bairro = new estab_bairro;
		$bairro = $request->estab_bairro;

		return redirect('Empresas');
	}

	public function storeEndereco(RegisterRequest $request){
		$ender = new estab_ender;
		$ender = $request->estab_ender;
		$ender->save();

		return redirect('Empresas');
	}

	public function storeCep(RegisterRequest $request){
		$cep = new estab_cep;
		$cep = $request->estab_cep;
		$cep->save();

		return redirect('Empresas');
	}

	public function storeRepresente(RegisterRequest $request){
		$represent = new represent_contato;
		$represent = $request->representNome;
		$represent = $request->representEmail;
		$represent = $request->representCel;
		$represent = $request->como_conheceu;
		$represent->save();
		return redirect('Empresas');
	}
}
