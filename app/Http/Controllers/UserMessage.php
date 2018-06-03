<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FaleConoscoRequest;
use App\messages;

class UserMessage extends Controller{
	public function store(FaleConoscoRequest $request){
		try{
			$messages = new messages;
			$messages->usuario  = $request->usr_nome;
			$messages->telefone = $request->usr_fone;
			$messages->mensagem = $request->textarea;
			$messages->save();
		}catch(Exception $e){ die($e); }
		return redirect("/");
	}

	// public function getMessages();

}