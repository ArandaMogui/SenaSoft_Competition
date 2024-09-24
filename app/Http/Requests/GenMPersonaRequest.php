<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenMPersonaRequest extends FormRequest
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
			'numeroid' => 'required|string',
			'apellido1' => 'required|string',
			'apellido2' => 'required|string',
			'nombre1' => 'required|string',
			'nombre2' => 'required|string',
			'direccion' => 'string',
			'tel_movil' => 'string',
			'email' => 'string',
			'id_tipoid' => 'required',
			'id_sexobiologico' => 'required',
        ];
    }
}
