<?php

namespace App\Http\Controllers;

use Request;
use App\user; // Tabela de 'users' banco de dados.
use App\geo; // Tabela de 'geo' banco de dados.
use Carbon\Carbon; // Função de datas do laravel.
use App\Http\Requests\RegisterRequest; // Request de validação para registro.
use App\Http\Requests\UpdateRequest; // Request de validação para atualização de dados.
use App\Http\Requests\EditRequest; // Request de validação para edição de dados.

class UsersController extends Controller{
    public function index(){
      // Envia todos os usuários registrados no banco
      // Para uma página trata-los e lista-los

			$info = user::all();
			return view('Users.List', compact('info'));
    }

    public function store(RegisterRequest $request){
        /*
        |-------
        | Store
        |-------
        |
        | Utiliza um Request para validação e envia para o banco de dados.
        | Se quiser mais detalhes (app/Http/Requests/RegisterRequest)
        |
        */


        $users            = new user;
        $users->usr_ip    = Request::ip(); // Solicita o IP do usuário.
        $users->usr_name  = $request->usr_name;
        $users->usr_pass  = md5($request->usr_pass);
        $users->usr_mail  = $request->usr_mail;
        $users->usr_cpf   = $request->usr_cpf;
        $users->usr_birth = $request->usr_birth;
        $users->usr_level = 0;
        $users->save();

        return redirect('Users');
    }

    public function create(){
		/*
		|---------
		| Create
		|---------
		|
		| Route para enviar o usuário para a página de registro
		|
		*/

        return view('Formularios.Register');
    }


    public function show($id){
		/*
		|-------
		| Show
		|-------
		|
		| Mostra as informações da tabela Users dado seu id.
		| Caso seu id não conste no banco de dados
		| será apresentado uma página dizendo que o usuário não existe.
		|
		| <Retorno>: Em JSON
		|
		*/

		$output =  user::find($id);
		if( $output == null ){ return "Usuário não existe."; }
        return $output;
    }

	public function destroy($id){
		/*
		|----------
		| Destroy
		|----------
		|
		| Deleta um usuário dado seu id.
		| Caso seu id não conste no banco de dados
		| será apresentado uma página dizendo que o usuário não existe.
		|
		*/

		$destroy = user::find($id);
		if( $destroy == null ){ return "Usuário não existe."; }
		$destroy->delete();
		return redirect('Users');
	}

	public function edit($id){
		/*
		|-------
		| Edit
		|-------
		|
		| Manda todas as informações do usuário para
		| a página de edição, onde ele poderá edita-las.
		| Caso seu id não conste no banco de dados
		| será apresentado uma página dizendo que o usuário não existe.
		|
		*/

		$info = user::find($id);
		if( $info == null ){ return 'Usuário não existe.'; }
		return view('Formularios.Edit', compact('info'));
	}


	public function edition(EditRequest $request, $id){
		/*
		|----------
		| Edition
		|---------
		|
		| Atualiza os campos editados na página de edição
		| de um usuário dado seu id.
		| Caso seu id não coste no banco de dados
		| será apresentado uma página dizendo que o usuário não existe.
		|
		*/

		$users = user::find($id);

		if( $users == null ){ return "Usuário não existe"; }
		$users->usr_ip    = $request->usr_ip;
		$users->usr_name  = $request->usr_name;
		$users->usr_pass  = md5($request->usr_pass);
		$users->usr_mail  = $request->usr_mail;
		$users->usr_cpf   = $request->usr_cpf;
		$users->usr_birth = $request->usr_birth;
		$users->usr_level = $request->usr_level;
		$users->save();

		return redirect('Users');
	}


  public function update($id){
    $userUpToDate = Request::all();
    $user = users::find($id);
    $user->update($userUpToDate);
  }
}
