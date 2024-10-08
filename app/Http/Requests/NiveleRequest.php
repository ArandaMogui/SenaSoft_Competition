<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NiveleRequest extends FormRequest
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
			'nivel' => 'required|string',
			'nombre' => 'required|string',
			'id_eps' => 'required',
			'id_regimen' => 'required',
        ];
    }
}
