<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabalheConoscoRequest extends FormRequest{
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
      /*
          |----------------------
          | Regras de validação:
          |----------------------
          |
          | Funcionamento: Utiliza os campos passados pelo método post
          | e os trata com algumas especificações como:
          |
          | 'required': Campo obrigatóriamente não será nulo;
          | 'min:N': Especifica o número mínimo de caracteres que o campo deverá ter;
          | 'max:N: Especifica o número máximo de caracteres que o campo deverá ter;
          | 'alpha_num': Campo deverá ser alpha numérico (contem letras e números);
          | 'email': Campo deverá ter formato de email [e.g] exemplo@exemplo;
          | 'ipv4': Campo deverá ter o formato de um endereço ipv4 [e.g] 127.0.0.1;
          | 'integer': Campo deverá ser preenchido por números inteiros;
          | 'date': Campo deverá ter o formato de uma data;
          |
          | Obs: o número máximo dos campos no banco de dados são 191
          | caracteres, por isso estão definidos com esse parâmetro.
          |
          | Para mais parâmetros entre na documentação do laravel:
          | https://laravel.com/docs/5.5/validation#available-validation-rules
          |
          */

        return [
          'empresa_nome'  => ['unique:empresas', 'min:8', 'max:191', 'required', 'alpha_num'],
          'estab_email' => ['email', 'required', 'unique:empresas'],
          'empresa_fone'  => ['required', 'integer'],
          'tipo_servico'  => ['required'],
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

        'empresa_email.email' => 'Formato de email inválido.',
        'empresa_email.required' => 'Email não especificado.',
        'empresa_email.unique' => 'Email já cadastrado.',

        'tipo_servico.required' => 'Tipo de serviço não especificado.'
      ];
    }
}
