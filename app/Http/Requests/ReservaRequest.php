<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
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
			'id_reserva' => 'required',
			'monto_total' => 'required',
			'num_personas' => 'required',
			'fecha_creacion' => 'required',
			'activo' => 'required',
			'tour_id_tour' => 'required',
			'cliente_id_cliente' => 'required',
			'deposito_id_deposito' => 'required',
			'usuario_id_usuario' => 'required',
        ];
    }
}
