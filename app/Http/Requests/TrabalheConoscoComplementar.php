<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabalheConoscoComplementar extends FormRequest{
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
          'empresa_nome' => ['unique:empresas', 'min:8', 'max:191', 'required', 'alpha_num'],
          'estab_email' => ['email', 'required', 'unique:empresas'],
          'empresa_fone' => ['required', 'integer'],
          'tipo_servico' => ['required'],

          'represent_nome' => ['required', 'max:191'],
					'represent_email' => ['required', 'email', 'unique:represent_contatos'],
					'represent_cel' =>  ['required', 'integer'],
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

        'estab_email.email' => 'Formato de email inválido.',
        'estab_email.required' => 'Email não especificado.',
        'estab_email.unique' => 'Email já cadastrado.',

        'tipo_servico.required' => 'Tipo de serviço não especificado.',

        'represent_nome.required' => 'Nome não preenchido.',
        'represent_mail.max'      => 'Nome muito grande',

        'represent_email.required' => 'Email não preechido',
        'represent_email.email'    => 'Email inválido',
        'represent_email.unique'   => 'Email já registrado',

        'represent_cel.required'  => 'Telefone não preenchido',
        'represent_cel.integer'   => 'Apenas números permitidos',

        'como_conheceu.required'  => 'Campo não preenchido'

      ];
    }
}
