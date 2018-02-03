<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepresentanteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
					'represent_nome' => ['required', 'max:191']
					'represent_mail' => ['required', 'email', 'unique']
					'represent_cel' =>  ['required', 'integer']
					'como_conheceu' =>  ['required']
        ];
    }


    public function messages(){
      return [
        'represent_nome.required' => 'Nome não preenchido.',
        'represent_mail.max'      => 'Nome muito grande',

        'represent_mail.required' => 'Email não preechido',
        'represent_mail.email'    => 'Email inválido',
        'represent_mail.unique'   => 'Email já registrado',

        'represent_cel.required'  => 'Telefone não preenchido',
        'represent_cel.integer'   => 'Apenas números permitidos',

        'como_conheceu.required'  => 'Campo não preenchido',
      ];
    }

}
