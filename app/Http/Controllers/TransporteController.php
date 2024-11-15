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
        $transportes = Transporte::paginate();

        return view('transporte.index', compact('transportes'))
            ->with('i', ($request->input('page', 1) - 1) * $transportes->perPage());
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

        return Redirect::route('transportes.index')
            ->with('success', 'Transporte created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($num_placa): View|RedirectResponse
    {
        $transporte = Transporte::find($num_placa);

        if (!$transporte) {
            return Redirect::route('transportes.index')->with('error', 'Transporte not found.');
        }

        return view('transporte.show', compact('transporte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($num_placa): View|RedirectResponse
    {
        $transporte = Transporte::find($num_placa);

        if (!$transporte) {
            return Redirect::route('transportes.index')->with('error', 'Transporte not found.');
        }

        return view('transporte.edit', compact('transporte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransporteRequest $request, Transporte $transporte): RedirectResponse
    {
        $transporte->update($request->validated());

        return Redirect::route('transportes.index')
            ->with('success', 'Transporte updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($num_placa): RedirectResponse
    {
        $transporte = Transporte::find($id);

        if (!$transporte) {
            return Redirect::route('transportes.index')->with('error', 'Transporte not found.');
        }

        try {
            $transporte->delete();
            return Redirect::route('transportes.index')
                ->with('success', 'Transporte deleted successfully');
        } catch (QueryException $e) {
            return Redirect::route('transportes.index')
                ->with('error', 'Cannot delete Transporte: it has associated records in other tables.');
        }
    }
}
