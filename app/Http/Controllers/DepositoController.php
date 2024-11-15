<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DepositoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $depositos = Deposito::paginate();

        return view('deposito.index', compact('depositos'))
            ->with('i', ($request->input('page', 1) - 1) * $depositos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $deposito = new Deposito();

        return view('deposito.create', compact('deposito'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepositoRequest $request): RedirectResponse
    {
        Deposito::create($request->validated());

        return Redirect::route('depositos.index')
            ->with('success', 'Deposito created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $deposito = Deposito::find($id);

        return view('deposito.show', compact('deposito'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $deposito = Deposito::find($id);

        return view('deposito.edit', compact('deposito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepositoRequest $request, Deposito $deposito): RedirectResponse
    {
        $deposito->update($request->validated());

        return Redirect::route('depositos.index')
            ->with('success', 'Deposito updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Deposito::find($id)->delete();

        return Redirect::route('depositos.index')
            ->with('success', 'Deposito deleted successfully');
    }
}
