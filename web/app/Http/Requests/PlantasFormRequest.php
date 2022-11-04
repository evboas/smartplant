<?php

namespace App\Http\Requests;

use App\Models\Planta;
use Illuminate\Foundation\Http\FormRequest;

class PlantasFormRequest extends FormRequest
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
            'nome' => ['required', 'unique:App\Models\Planta,nome'],
            'tipo' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'nome.unique' => 'Para um melhor gerenciamento, dê identificações únicas para as plantas',
            'nome.required' => 'O campo nome é obrigatório',
            'tipo.required' => 'O campo tipo é obrigatório'
        ];
    }
}
