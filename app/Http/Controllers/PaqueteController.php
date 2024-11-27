<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\Tour;  // Asegúrate de agregar esta línea
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PaqueteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $paquete = Paquete::paginate();
    
        return view('paquete.index', compact('paquete'))
            ->with('i', ($request->input('page', 1) - 1) * $paquete->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        
        // Obtener todos los tours existentes
        $tours = Tour::all();

        // Obtén el último paquete registrado para el siguiente id_paquete
        $lastPaquete = Paquete::orderBy('id_paquete', 'desc')->first();
        $nextIdPaquete = $lastPaquete ? $lastPaquete->id_paquete + 1 : 1;

        // Obtener todos los tipos de paquetes registrados
        $tiposPaquete = Paquete::select('tipo_paquete')->distinct()->get();

        // Crea un objeto vacío de Paquete
        $paquete = new Paquete();

        // Pasar el objeto $paquete, el siguiente id_paquete, los tipos de paquetes y los tours a la vista
        return view('paquete.create', compact('paquete', 'nextIdPaquete', 'tiposPaquete', 'tours'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaqueteRequest $request): RedirectResponse
    {
        // Validar que la fecha de inicio no sea menor a la fecha actual
        $request->validate([
            'fechaInicio' => 'required|date|after_or_equal:today', // Asegura que la fecha no sea menor a hoy
            'tour_id_tour' => 'required|exists:tour,id_tour', // Asegura que tour_id_tour sea válido y exista en la tabla tours
        ]);

        // Verificar si se seleccionó 'nuevo' y si se proporcionó un nuevo tipo de paquete
        $tipoPaquete = $request->tipo_paquete === 'nuevo' && $request->nuevo_tipo_paquete
            ? $request->nuevo_tipo_paquete  // Si es nuevo, usar el valor del campo 'nuevo_tipo_paquete'
            : $request->tipo_paquete;       // Si no, usar el tipo seleccionado

        // Crear el paquete con el tipo de paquete correcto
        Paquete::create(array_merge($request->validated(), ['tipo_paquete' => $tipoPaquete]));

        return Redirect::route('paquete.index')
            ->with('success', 'Paquete creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_paquete): View
    {
        $paquete = Paquete::find($id_paquete);

        return view('paquete.show', compact('paquete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_paquete): View
    {
        $paquete = Paquete::find($id_paquete);

        // Obtener todos los tours existentes
        $tours = Tour::all();

        // Obtener todos los tipos de paquetes registrados
        $tiposPaquete = Paquete::select('tipo_paquete')->distinct()->get();

        // Pasar las variables necesarias a la vista de edición
        return view('paquete.edit', compact('paquete', 'tiposPaquete', 'tours'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaqueteRequest $request, Paquete $paquete): RedirectResponse
    {
        // Validar que la fecha de inicio no sea menor a la fecha actual
        $request->validate([
            'fechaInicio' => 'required|date|after_or_equal:today', // Asegura que la fecha no sea menor a hoy
        ]);

        $paquete->update($request->validated());

        return Redirect::route('paquete.index')
            ->with('success', 'Paquete actualizado exitosamente');
    }

    public function destroy($id_paquete): RedirectResponse
    {
        Paquete::find($id_paquete)->delete();

        return Redirect::route('paquete.index')
            ->with('success', 'Paquete deleted successfully');
    }
}
