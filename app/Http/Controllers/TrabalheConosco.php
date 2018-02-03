<?php namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\empresas;
	use App\Requests\TrabalheConoscoRequest;
	use App\Requests\TrabalheConoscoUpdateRequest;

	class TrabalheConosco extends Controller{
		public function index(TrabalheConoscoRequest $request){
			$empresa_nome = $request->empresa_nome;
			$empresa_mail = $request->empresa_mail;
			$empresa_fone = $request->empresa_fone;

			return  view('TrabalheConosco/create', compact('empresa_nome',
																										 'empresa_mail',
																									 	 'empresa_fone'));
		}

		public function create(){
			return  compacts('work');
		}

		public function update(TrabalheConoscoUpdateRequest $request){
			return  redirect('work');
		}

		public function edit(TrabalheConoscoEditRequest $request){
			return redirect('work');
		}

		public function delete($id){
			$table = use empresas;
			$user = $table->find($id);
			$user->delete();

			return redirect('work');
		}

	}

?>
