<?php

namespace App\Http\Controllers;
use Request;

// Tabelas
use App\empresas;
use App\represent_contatos;

// Requests
use App\Http\Requests\TrabalheConoscoRequest;
use App\Http\Requests\TrabalheConoscoComplementar;
use App\Http\Requests\TrabalheConoscoUpdateRequest;
use App\Http\Requests\TrabalheConoscoEditRequest;


	class EmpresasController extends Controller{

		public function store(TrabalheConoscoRequest $request){ // POST
			return view('Formularios.work', compact('request'));
		}

		public function index(TrabalheConoscoRequest $request){ // GET
			dd('teste2');
			// return view('Formularios.workcomplementar');
		}

		public function create(TrabalheConoscoComplementar $request){
			$empresa = new empresas;
			$empresa->empresa_nome = $request->empresa_nome;
			$empresa->estab_email = $request->estab_email;
			$empresa->empresa_fone = $request->empresa_fone;
			$empresa->tipo_servico = $request->tipo_servico;
			if( $empresa->save() ){
				$represent = new represent_contatos;
				$represent->represent_nome = $request->represent_nome;
				$represent->estab_email 	 = $request->estab_email;
				$represent->represent_fone = $request->represent_fone;
				$represent->como_conheceu  = $request->como_conheceu;
				if( $represent->save() ){ return view('/'); }
				else{ dd('erro'); }
			}else{ dd('erro'); }
		}

		public function destroy(TrabalheConoscoUpdateRequest $request){
			$empresa = empresas::find($id);
			$empresa->delete();

			return redirect('/');
		}

		public function update(){
			$empresaUpToDate = Request::all();
	    $empresa = empresas::find($id);
	    $empresa->update($empresaUpToDate);

			return redirect('/');
		}

		public function show($id){
			$output = empresas::find($id);
			if( $output == null ){ return "Empresa não cadastrada."; }
			else{  return $output; }
		}

		public function edit(TrabalheConoscoEditRequest $request, $id){
			$empresa = empresas::find($id);
			$empresa->empresa_nome = $request->empresa_nome;
			$empresa->empresa_mail = $request->empresa_mail;
			$empresa->empresa_fone = $request->empresa_fone;
			$empresa->tipo_servico = $request->tipo_servico;
			if( $empresa->save() ){
				$represent = represent_contatos::find($id);
				$represent->represent_nome = $request->represent_nome;
				$represent->represent_mail = $request->represent_mail;
				$represent->represent_fone = $request->represent_fone;
				$represent->como_conheceu  = $request->como_conheceu;
				if( $represent->save() ){ return view('/'); }
		}

	}
}
