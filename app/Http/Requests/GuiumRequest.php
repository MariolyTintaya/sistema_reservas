<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuiumRequest extends FormRequest
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
			'id_guia' => 'required',
			'nombre' => 'required|string',
			'celular' => 'required',
            'disponibilidad' => 'required|in:Mañana,Tarde,Noche',
			'activo' => 'required',
			'tour_id_tour' => 'required',
        ];
    }
}
