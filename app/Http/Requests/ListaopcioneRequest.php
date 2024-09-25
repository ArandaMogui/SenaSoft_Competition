<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListaopcioneRequest extends FormRequest
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
			'variable' => 'required|string',
			'descripcion' => 'required|string',
			'valor' => 'required',
			'nombre' => 'required|string',
			'abreviacion' => 'required|string',
			'habilita' => 'required',
        ];
    }
}
