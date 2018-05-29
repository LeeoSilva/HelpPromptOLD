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
          'empresa_nome'     => ['unique:empresas', 'min:8', 'max:191', 'required', 'alpha_num'],
          'estab_email'      => ['email', 'required', 'unique:empresas'],
          'empresa_fone'     => ['required', 'integer'],
           
          'empresa_cidade'   => ['required'],
          'empresa_bairro'   => ['required'],
          'empresa_ender'    => ['required'],
           
          'represent_nome'   => ['required', 'max:191'],
					'represent_email'  => ['required', 'email', 'unique:represent_contatos'],
					'represent_cel'    => ['required', 'integer'],
           
          'tipo_servico'     => ['required'],
          'quant_guinchos'   => ['required', 'integer'],
          'quant_motoristas' => ['required', 'integer'],
        ];
    }

    public function messages(){
      return [
        'empresa_nome.required'     => 'Usuário não especificado.',
        'empresa_nome.unique'       => 'Usuário já cadastrado.',
        'empresa_nome.min:8'        => 'Campo de usuário deve ter no mínimo 8 digitos.',
        'empresa_nome.max:191'      => 'Campo de usuário muito longo.',
        'empresa_nome.alpha_num'    => 'Use apenas [0-9] e [A-Z].',
         
        'estab_email.email'         => 'Formato de email inválido.',
        'estab_email.required'      => 'Email não especificado.',
        'estab_email.unique'        => 'Email já cadastrado.',
 
        'empresa_fone.required'     => 'Telefone da empresa não especificado.',
        'empresa_fone.integer'      => 'Cheque o telefone da empresa.',
 
        `empresa_cidade.required`   => `Cidade não especificada`,
        `empresa_bairro.required`   => `Bairro não especificado`,
        `empresa_ender.required`    => `Endereço não especificado`,
 
         
        'represent_nome.required'   => 'Nome não preenchido.',
        'represent_nome.max'        => 'Nome muito longo',
         
        'represent_email.required'  => 'Email não preechido',
        'represent_email.email'     => 'Email inválido',
        'represent_email.unique'    => 'Email já registrado',
         
        'represent_cel.required'    => 'Telefone não preenchido',
        'represent_cel.integer'     => 'Apenas números permitidos',
         
        'tipo_servico.required'     => 'Tipo de serviço não especificado.',
        'quant_guinchos.required'   => 'Quantidade de guinchos não especificada',
        'quant_guinchos.integer'    => 'Cheque seu número sua quantidade de guinchos',
        'quant_motoristas.required' => 'Quantidade de motoristas não especificada',
        'quant_motoristas.integer'  => 'Cheque sua quantidade de motoristas'
      ];
    }
}
