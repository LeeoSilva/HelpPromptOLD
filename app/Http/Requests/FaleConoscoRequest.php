<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaleConoscoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
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
            "username" => ["required"],
            "userfone" => ["required", "integer"],
            "usermail" => ["required", "email"],
            "textarea" => ["required", "max:191"],
        ];
    }

    public function messages(){
        return [
            "username.required" => "Nome não preenchido.",
            
            "userfone.required" => "Telefone não preenchido.",
            "userfone.integer"  => "Cheque seu telefone.",
            
            "usermail.required" => "Email não preenchido.",
            "usermail.email"    => "FOrmato de email inválido.",
        
            "textarea.required" => "Qual mensagem deseja enviar?",
            "textarea.max"      => "Mensagem muito grande.",
        ];
    }

}
