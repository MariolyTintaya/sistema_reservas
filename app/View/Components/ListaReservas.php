<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Reserva;

class ListaReservas extends Component
{
    /**
     * La colección de reservas a mostrar.
     *
     * @var \Illuminate\Support\Collection
     */
    public $reservas;

    /**
     * Crea una nueva instancia del componente.
     *
     * @param \Illuminate\Support\Collection $reservas
     * @return void
     */
    public function __construct($reservas)
    {
        $this->reservas = $reservas;
    }

    /**
     * Obtiene la vista que representa el componente.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.lista-reservas');
    }
}