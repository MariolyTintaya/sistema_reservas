<?php

namespace App\Http\Controllers;

use App\Models\Guium;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GuiumRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Tour;

class GuiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        // Cargar la relación con 'tour' para cada guium
        $guia = Guium::with('tour')->paginate();

        return view('guium.index', compact('guia'))
            ->with('i', ($request->input('page', 1) - 1) * $guia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // Obtener el último id_guia registrado
        $lastGuium = Guium::orderBy('id_guia', 'desc')->first();
        $nextId = $lastGuium ? $lastGuium->id_guia + 1 : 1;

        // Crear una nueva instancia de Guium con el id_guia precalculado
        $guium = new Guium();
        $guium->id_guia = $nextId;

        // Opciones para el campo disponibilidad
        $disponibilidadOptions = ['Mañana', 'Tarde', 'Noche'];

        // Obtener todos los tours disponibles
        $tours = Tour::all(); // Asegúrate de tener el modelo Tour correctamente definido

        return view('guium.create', compact('guium', 'disponibilidadOptions', 'tours'));
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(GuiumRequest $request): RedirectResponse
    {
        // Obtener el último id_guia registrado
        $lastGuium = Guium::orderBy('id_guia', 'desc')->first();
        $nextId = $lastGuium ? $lastGuium->id_guia + 1 : 1;

        // Crear un nuevo registro asegurando el id_guia
        $guia = new Guium($request->except('id_guia'));
        $guia->id_guia = $nextId;
        $guia->save();

        return Redirect::route('guia.index')
            ->with('success', 'Guia creado exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id_guia): View
    {
        $guium = Guium::find($id_guia);

        return view('guium.show', compact('guium'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_guia): View
    {
        $guium = Guium::find($id_guia);

        // Opciones para el campo disponibilidad
        $disponibilidadOptions = ['Mañana', 'Tarde', 'Noche'];

        // Obtener todos los tours disponibles
        $tours = Tour::all(); // Asegúrate de tener el modelo Tour correctamente definido

        return view('guium.edit', compact('guium', 'disponibilidadOptions', 'tours'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(GuiumRequest $request, Guium $guium): RedirectResponse
    {
        $guium->update($request->validated());

        return Redirect::route('guia.index')
            ->with('success', 'Guia actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_guia): RedirectResponse
    {
        Guium::find($id_guia)->delete();

        return Redirect::route('guia.index')
            ->with('success', 'Guia eliminado exitosamente.');
    }
}
