<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Reserva;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TourRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tours = Tour::paginate();

        return view('tour.index', compact('tours'))
            ->with('i', ($request->input('page', 1) - 1) * $tours->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tours = Tour::where('activo', 1)->get(); // Obtener solo tours activos
        $clientes = Cliente::all(); // Si usas clientes
        $ultimoId = Reserva::max('id_reserva'); // Si necesitas calcular el siguiente ID

        return view('reservas.create', compact('tours', 'clientes', 'ultimoId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'id_tour' => 'required|unique:tour,id_tour',
        'informe' => 'required',
        'fecha' => 'required|date',
        'activo' => 'required|boolean',
        'transporte_num_placa' => 'required',
        'imagen' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validación de la imagen
    ]);

    // Subir la imagen si se proporciona
    if ($request->hasFile('imagen')) {
        $imagePath = $request->file('imagen')->store('tours', 'public'); // Guardar la imagen en el directorio 'tours'
    }

    // Crear el nuevo tour
    $tour = new Tour();
    $tour->id_tour = $request->id_tour;
    $tour->informe = $request->informe;
    $tour->fecha = $request->fecha;
    $tour->activo = $request->activo;
    $tour->transporte_num_placa = $request->transporte_num_placa;
    $tour->imagen = $imagePath ?? null; // Asignar la imagen al campo si se subió
    $tour->save();

    return redirect()->route('tour.index')->with('success', 'Tour creado exitosamente');
}

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tour = Tour::find($id);

        return view('tour.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tour = Tour::find($id);

        return view('tour.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TourRequest $request, Tour $tour): RedirectResponse
    {
        $tour->update($request->validated());

        return Redirect::route('tour.index')
            ->with('success', 'Tour actualizado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Tour::find($id)->delete();

        return Redirect::route('tour.index')
            ->with('success', 'Tour eliminado exitosamente');
    }
}
