<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'id_cliente' => 'required|integer',
            'nroDocumento' => 'required|string|max:20',
            'celular' => 'required|digits_between:7,15',
            'nombre' => 'required|string|max:100',
            'ape_paterno' => 'required|string|max:100',
            'ape_materno' => 'required|string|max:100',
            'fecha_nac' => 'required|date',
            'activo' => 'required|boolean',
            'tipo_cliente_id_tipo' => 'required|integer|exists:tipo_cliente,id_tipo',
        ];
        
    }
}
