<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $clientes = Cliente::paginate();

        return view('cliente.index', compact('clientes'))
            ->with('i', ($request->input('page', 1) - 1) * $clientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       // Crear una nueva instancia del cliente
         $cliente = new Cliente();
        // Obtener el último ID de cliente y calcular el siguiente
        $ultimoId = Cliente::latest('id_cliente')->first(); // Obtén al ultimo cliente
        // Si existe alguna cliente, obtén el cleinte
        $ultimoId = $ultimoId ? $ultimoId->id_cliente : 0;
        // Pasar el siguiente ID a la vista
        return view('cliente.create', compact('cliente', 'ultimoId'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ClienteRequest $request): RedirectResponse
    {
        Cliente::create($request->validated());

        return Redirect::route('clientes.index')
            ->with('success', 'Cliente agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_cliente): View
    {
        $cliente = Cliente::find($id_cliente);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_cliente)
    {
        // Buscar al cliente por el ID
        $cliente = Cliente::find($id_cliente);

        // Verificar si el cliente existe
        if (!$cliente) {
            return redirect()->route('clientes.index')->with('error', 'Cliente no encontrado');
        }

        // Retornar la vista con los datos del cliente
        return view('cliente.edit', compact('cliente'));
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(ClienteRequest $request, Cliente $cliente): RedirectResponse
    {
        $cliente->update($request->validated());

        return Redirect::route('clientes.index')
            ->with('success', 'Cliente actualizado exitosamente');
    }

    public function destroy($id_cliente): RedirectResponse
    {
        Cliente::find($id_cliente)->delete();

        return Redirect::route('clientes.index')
            ->with('success', 'Cliente eliminado exitosamente');
    }
}
