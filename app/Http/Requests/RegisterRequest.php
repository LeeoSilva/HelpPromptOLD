<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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

    public function messages(){
        /*
        |--------------------
        | Mensagens de erro
        |--------------------
        |
        | Função especial que retorna automaticamente
        | erros customizados para o usuário.
        | Sintaxe bem simples.
        |
        */

        return [
            'usr_name.required'  => 'Campo do usuário não preenchido.',
            'usr_name.alpha_num' => 'Campo não deve ter characteres especiais',
            'usr_name.min'       => 'Campo do usuário deve ter no mínimo 6 caractéres.',
			'usr_name.max'       => 'Campo de usuário muito grande.',
			'usr_name.unique'    => 'Usuário já registrado.',

            'usr_pass.required'  => 'Campo da senha não preenchido',
            'usr_pass.min'       => 'Campo de senha muito inseguro',           
            'usr_pass.max'       => 'Campo de senha muito grande',
            
            'usr_mail.required'  => 'Campo de email não preenchido',
            'usr_mail.email'     => 'Email não existe',
			'usr_mail.max'       => 'Email muito grande',
			'usr_mail.unique'    => 'Email já registrado.',

			'usr_cpf.required'   => 'CPF não preenchido',
			'usr_cpf.integer'    => 'Cheque seu campo de CPF',
			'usr_cpf.unique'     => 'CPF já registrado.',

            'usr_birth.required' => 'Campo de nascimento não preenchido',
            'usr_birth.date'     => 'Cheque seu campo de nascimento',
        ];
    }


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
            'usr_name'  => ['required', 'alpha_num', 'min:6', 'max:191', 'unique:users'],
            'usr_pass'  => ['required', 'min:6', 'max:191'],
            'usr_mail'  => ['required', 'email', 'max:191', 'unique:users'],
            'usr_cpf'   => ['required', 'integer', 'unique:users'],
            'usr_birth' => ['required', 'date'],
        ];
    }
}
