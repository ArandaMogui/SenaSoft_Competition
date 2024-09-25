<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TarjeteroRequest extends FormRequest
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
			'historia' => 'required|string',
			'id_persona' => 'required',
			'id_regimen' => 'required',
        ];
    }
}
