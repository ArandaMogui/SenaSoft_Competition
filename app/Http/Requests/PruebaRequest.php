<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PruebaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'id_procedimiento' => 'required',
			'id_tipo_resultado' => 'required',
			'codigo_prueba' => 'required|string',
			'nombre_prueba' => 'required|string',
			'unidad' => 'required|string',
			'habilita' => 'required',
        ];
    }
}
