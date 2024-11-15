<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinoRequest extends FormRequest
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
			'id_destino' => 'required',
			'nombre' => 'required|string',
			'pais' => 'required|string',
			'cuidad' => 'required|string',
			'activo' => 'required',
			'tour_id_tour' => 'required',
        ];
    }
}
