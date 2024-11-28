<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenteController extends Controller
{
    public function dashboard()
    {
        $reservas = \App\Models\Reserva::with(['cliente', 'tour', 'transporte'])->get();
        return view('gerente.dashboard', compact('reservas'));
    }
}
