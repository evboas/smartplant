<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnotacoesFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'observacoes' => 'required'
        ];
    }

    public function messages(){
        return[
            'nome.required' => 'O campo de identificação é obrigatório',
            'observacoes.required' => 'O campo de observações é obrigatório'
        ];
    }
}
