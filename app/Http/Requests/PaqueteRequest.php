<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaqueteRequest extends FormRequest
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
			'id_paquete' => 'required',
			'temporada' => 'required|string',
			'tipo_paquete' => 'required|string',
			'precio' => 'required',
			'nombre' => 'required|string',
			'fechaInicio' => 'required',
			'fechaFin' => 'required',
			'activo' => 'required',
			'tour_id_tour' => 'required',
        ];
    }
}
