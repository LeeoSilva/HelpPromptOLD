<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabalheConoscoComplementar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
          'empresa_nome' => ['unique', 'min:8', 'max:191', 'required', 'alpha_num'],
          'empresa_mail' => ['email', 'required', 'unique'],
          'empresa_fone' => ['required', 'integer'],
          'tipo_servico' => ['required'],

          'represent_nome' => ['required', 'max:191']
					'represent_mail' => ['required', 'email', 'unique']
					'represent_cel' =>  ['required', 'integer']
					'como_conheceu' =>  ['required']

        ];
    }

    public function messages(){
      return [
        'empresa_nome.required' => 'Usuário não especificado.',
        'empresa_nome.unique' => 'Usuário já cadastrado.',
        'empresa_nome.min:8' => 'Campo de usuário deve ter no mínimo 8 digitos.',
        'empresa_nome.max:191' => 'Campo de usuário muito longo.',
        'empresa_nome.alpha_num' => 'Use apenas [0-9] e [A-Z].',

        'empresa_fone.required' => 'Telefone da empresa não especificado.',
        'empresa_fone.integer' => 'Cheque o telefone da empresa.',

        'empresa_mail.email' => 'Formato de email inválido.',
        'empresa_mail.required' => 'Email não especificado.',
        'empresa_mail.unique' => 'Email já cadastrado.',

        'tipo_servico.required' => 'Tipo de serviço não especificado.',

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
