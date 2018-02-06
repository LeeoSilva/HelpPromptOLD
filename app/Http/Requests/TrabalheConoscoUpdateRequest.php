<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabalheConoscoUpdateRequest extends FormRequest{
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
      // TODO
        return [
          'empresa_nome' => ['required'],
          'estab_email'  => ['required'],
          'tipo_servico' => ['required'],
          'estados'      => ['required'],
          'cidades'      => ['required'],
          'bairros'      => ['required'],
          'endereco'     => ['required'],
          'complemento'  => ['nullable'],
          'empresa_cnpj' => ['required'],

          'guinchos' => ['required'],
          'carros'   => ['required'],
          'motos'    => ['required'],

          'represent_nome'  => ['required'],
          'represent_email' => ['required'],
          'represent_fone'  => ['required'],
        ];
    }

    public function messages(){
      return[
        'empresa_nome.required'  => 'Empresa não preenchida.',
        'estab_email.required'   => 'Email empresarial não preenchido.',
        'tipo_servico.required' => 'Tipo de serviços não preenchidos.',
        'estados.required'      => 'Estado do estabelecimento não preenchido.'.
        'cidades.required'      => 'Cidade do estabelecimento não preenchido.',
        'bairros.required'      => 'Bairro do estabelecimento não preenchido.',
        'endereco.required'     => 'Endereço do estabelecimento não preenchido.',
        'empresa_cnpj.required' => 'CNPJ da empresa não preenchido.',

        'guinchos.required' => 'Guinchos do estabelecimento não preenchido.'.
        'motos.required'    => 'Motos do estabelecimento não preenchido.'
        'represent_nome.required'  => 'Nome do representante legal não preenchido.',
        'represent_email.required' => 'Email do representante legal não preenchido.',
        'represent_fone.required'  => 'Telefone do representante legal não preenchido.',
      ];
    }
}
