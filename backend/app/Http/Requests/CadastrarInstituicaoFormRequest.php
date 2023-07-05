<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastrarInstituicaoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'descricao' => 'required|string',
            'objetitvo' => 'required|string',
            'publico_alvo' => 'required|string',
            'metodologia' => 'required|string',
            'contribuicao' => 'required|string',
            'como_fazer_parte' => 'required|string',
            'redes_sociais' => 'url|required',
            'localizacao' => 'required|string',
            'pix' => 'required|url'
        ];
    }
}
