<?php

namespace App\Http\Controllers;
use Request;

// Tabelas.
use App\empresas; // Tabela 'empresas' do banco de dados.
use App\represent_contatos; // Tabela 'represent_contatos' do banco de dados.

// Requests de validação.
use App\Http\Requests\TrabalheConoscoRequest; // Request de validação inicial.
use App\Http\Requests\TrabalheConoscoComplementar; // Request de validação complementar.
use App\Http\Requests\TrabalheConoscoUpdateRequest; // Request de validação de updates.
use App\Http\Requests\TrabalheConoscoEditRequest; // Request de validação de edição.

	class EmpresasController extends Controller{
		public function store(TrabalheConoscoRequest $request){ // POST
			/*
			|--------
			| store
			|--------
			|
			| Recebe as entradas na página principal
			| e envia para a segunda página (complementar).
			|
			*/
			return view('Formularios.work', compact('request'));
		}

		public function index(TrabalheConoscoRequest $request){ // GET
			/*
			|-----
			| index
			|-----
			|
			| Request GET para a página do formulário.
			*/

			return view('Formularios.workcomplementar');
		}

		public function create(TrabalheConoscoComplementar $request){
			try{ // Error handler for empresas.
				$empresa 			   = new empresas;
				$empresa->empresa_nome = $request->empresa_nome;
				$empresa->estab_email  = $request->estab_email;
				$empresa->empresa_fone = $request->empresa_fone;
				$empresa->tipo_servico = $request->tipo_servico;
				$empresa->save();
			}catch(Exception $e){ die($e); }

			try{ // Error handler for represent_contatos.
				$represent 				   = new represent_contatos;
				$represent->represent_nome = $request->represent_nome;
				$represent->estab_email    = $request->estab_email;
				$represent->represent_fone = $request->represent_fone;
				$represent->como_conheceu  = $request->como_conheceu;
				$represent->save();
			}catch(Exception $e){ die($e); }
		}

		public function destroy($id){
			/*
			|---------
			| destroy
			|---------
			|
			| Deleta todo o conteúdo de uma empresa
			| dado seu id.
			|
			*/

			if (  empresas::FindorFail($id) == null ){ die("Empresa não existe."); }
			else {
				try{ (empresas::find($id))->delete(); }
				catch( Exception $e ){ die($e); }
				return redirect('/');
		 }
		}

		public function update(TrabalheConoscoUpdateRequest $request, $id){
			/*
			|--------
			| update
			|--------
			|
			| Atualiza todas as informações da empresa,
			| enviados por um formulário.
			*/

			try{ // Error handling
				$empresa 	   = Empresas::FindorFail($id);
				$representante = represent_contatos::where('estab_id')->value($id);
				$empresa->fill($request->only(['empresa_nome', 'estab_email',
										  	   'tipo_servico', 'estados',
											   'estados', 'cidades',
											   'bairros', 'endereco',
											   'complemento', 'empresa_cnpj',
											   'guinchos', 'carros',
											   'motos', 'represent_nome',
											   'represent_mail', 'represent_fone'
				]));
				$empresas->save();
			}catch(Exception $e){ die($e); }
		}

		public function show($id){
			/*
			|-------
			| show
			|-------
			|
			| Envia todas as informações de uma empresa
			| para exibi-las depois.
			|
			| <Retorno>: Em JSON
			|
			*/

			return empresas::FindorFail($id);;
		}

		public function edit(TrabalheConoscoEditRequest $request, $id){
			try{ // Error handling for empresas.
				$empresa 						   = empresas::FindorFail($id);
				$empresa->empresa_nome = $request->empresa_nome;
				$empresa->empresa_mail = $request->empresa_mail;
				$empresa->empresa_fone = $request->empresa_fone;
				$empresa->tipo_servico = $request->tipo_servico;
				$empresa->save();
			}catch(Exception $e){ die($s); }

			try{
				$represent								 = represent_contatos::FindorFail($id);
				$represent->represent_nome = $request->represent_nome;
				$represent->represent_mail = $request->represent_mail;
				$represent->represent_fone = $request->represent_fone;
				$represent->como_conheceu  = $request->como_conheceu;
				$represent->save();
			}catch(Exception $e){ die($e); }
			return redirect('/');
		}
}
