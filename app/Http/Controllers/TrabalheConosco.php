<?php namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\empresas;
	use App\represent_contatos;
	use App\Http\Requests\TrabalheConoscoRequest;
	use App\Http\Requests\TrabalheConoscoComplementar;


	class TrabalheConosco extends Controller{

		public function store(){ // POST
			return view('Formularios.workcomplementar', compact('request'));
		}

		public function index(TrabalheConoscoRequest $request){ // GET
			return view('Formularios.workcomplementar', compact('request'));
		}

		public function create(TrabalheConoscoComplementar $request){
			$empresa = new empresas;
			$empresa->empresa_nome = $request->empresa_nome;
			$empresa->empresa_mail = $request->empresa_mail;
			$empresa->empresa_fone = $request->empresa_fone;
			$empresa->tipo_servico = $request->tipo_servico;
			if( $empresa->save() ){
				$represent = new represent_contatos;
				$represent->represent_nome = $request->represent_nome;
				$represent->represent_mail = $request->represent_mail;
				$represent->represent_fone = $request->represent_fone;
				$represent->como_conheceu  = $request->como_conheceu;
				if( $represent->save() ){ return view('/'); }
			}
		}

		public function destroy(TrabalheConoscoUpdateRequest $request){
			$empresa = empresas::find($id);
			$empresa->delete();

			return redirect('work');
		}

		public function update(TrabalheConoscoEditRequest $request){
			return redirect('work');
		}

		public function show($id){
			return redirect('work');
		}

		public function edit($id){

		}

	}
//
// class TrabalheConosco extends Controller{
// 	public function index(){
// 		return view('Formularios.work');
// 	}

?>
