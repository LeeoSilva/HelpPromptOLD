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

// Requests
use App\Http\Requests\EstabelecimentoRequest;
use App\Http\Requests\CepRequest;
use App\Http\Requests\TelefonesRequest;
use App\Http\Requests\ServicoRequest;
use App\Http\Requests\VeiculosRequest;
use App\Http\Requests\EstadoRequest;
use App\Http\Requests\CidadeRequest;
use App\Http\Requests\BairroRequest;
use App\Http\Requests\EnderecoRequest;
use App\Http\Requests\RepresentanteRequest;
use App\Http\Requests\EmpresasRequest;

class EmpresasController extends Controller{
	public function index(){
		// Envia todos os dados das empresas registradas no banco
		// para uma página trata-los e lista-los.

		$info = trabalhe_conosco::all();
		return view('Empresas.List', compact('info'));
	}

	public function storeTelefones(TelefonesRequest $request){
		$tel = new telefones;
		$tel = $request->estab_tel;
		$tel->save();

		return redirect('Empresas');
	}
		public function storeTipo_servico(ServicoRequest $request){
		$tipo = new tipo_servico;
		$tipo = $request->tipo_servico;
		$tipo->save()

		return redirect('Empresas');
	}
	public function storeVeiculos(VeiculosRequest $request){
		$veiculos = new veiculos;
		$veiculos = $request->motos;
		$veiculos = $request->carros;
		$veiculos = $request->guinchos;
		$veiculos->save();

		return redirect('Empresas');
	}

	public function storeCidade(CidadeRequest $request){
		$cidade = new estab_cidade;
		$cidade = $request->estab_cidade;

		return redirect('Empresas');
	}

	public function storeEstado(EstadoRequest $request){
		$estado = new estab_estado;
		$estado = $request->estab_estado;
		$estado->save();
		return redirect('Empresas');
	}

	public function storeBairro(BairroRequest $request){
		$bairro = new estab_bairro;
		$bairro = $request->estab_bairro;

		return redirect('Empresas');
	}

	public function storeEndereco(EnderecoRequest $request){
		$ender = new estab_ender;
		$ender = $request->estab_ender;
		$ender->save();

		return redirect('Empresas');
	}

	public function storeCep(CepRequest $request){
		$cep = new estab_cep;
		$cep = $request->estab_cep;
		$cep->save();

		return redirect('Empresas');
	}

	public function storeRepresente(RepresentanteRequest $request){
		$represent = new represent_contato;
		$represent = $request->representNome;
		$represent = $request->representEmail;
		$represent = $request->representCel;
		$represent = $request->como_conheceu;
		$represent->save();
		return redirect('Empresas');
	}
}
