<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
    public function rules()
    {
      return [
          'nome' => 'required|min:3|max:250',
          'email' => 'required|email|max:100|unique:clientes',
          'password' => 'required|min:5|max:150',
          'telefone' => 'required|numeric|digits:10',
          'cep' => 'required|numeric|digits:8',
          'rua' => 'required|min:3|max:150',
          'complemento' => 'required|min:3|max:150',
          'numero' => 'required|min:1|max:20',
          'cidade' => 'required|min:4|max:20',
          'bairro' => 'required|min:4|max:20',
          'uf' => 'required|min:2|max:2'
      ];
    }
}
