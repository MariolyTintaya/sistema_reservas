<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TransporteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Database\QueryException;

class TransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $transporte = Transporte::paginate();

        return view('transporte.index', compact('transporte'))
            ->with('i', ($request->input('page', 1) - 1) * $transporte->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $transporte = new Transporte();

        return view('transporte.create', compact('transporte'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransporteRequest $request): RedirectResponse
    {
        Transporte::create($request->validated());

        return Redirect::route('transporte.index')
            ->with('success', 'Transporte creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($num_placa): View|RedirectResponse
    {
        $transporte = Transporte::find(urldecode($num_placa));

        if (!$transporte) {
            return Redirect::route('transporte.index')->with('error', 'Transporte no encontrado');
        }

        return view('transporte.show', compact('transporte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($num_placa): View|RedirectResponse
    {
        $transporte = Transporte::find(urldecode($num_placa));

        if (!$transporte) {
            return Redirect::route('transporte.index')->with('error', 'Transporte no encontrado');
        }

        return view('transporte.edit', compact('transporte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransporteRequest $request, $num_placa): RedirectResponse
    {
        $transporte = Transporte::find(urldecode($num_placa));

        if (!$transporte) {
            return Redirect::route('transporte.index')->with('error', 'Transporte no encontrado');
        }

        $transporte->update($request->validated());

        return Redirect::route('transporte.index')
            ->with('success', 'Transporte actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($num_placa): RedirectResponse
    {
        $transporte = Transporte::find(urldecode($num_placa));

        if (!$transporte) {
            return Redirect::route('transporte.index')->with('error', 'Transporte no encontrado');
        }

        try {
            $transporte->delete();
            return Redirect::route('transporte.index')
                ->with('success', 'Transporte eliminaod exitosamente');
        } catch (QueryException $e) {
            return Redirect::route('transporte.index')
                ->with('error', 'No se puede eliminar este transporte');
        }
    }
}
