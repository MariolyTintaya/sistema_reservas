<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ReservaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Cliente;
use App\Models\Deposito;
use App\Models\Tour;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        // Cargar las relaciones necesarias
        $reservas = Reserva::with(['cliente', 'tour', 'transporte'])->paginate();

        // Verificar si no hay reservas
        if ($reservas->isEmpty()) {
            // Puedes redirigir con un mensaje si no hay reservas, o pasar un error a la vista
            return view('dashboard', compact('reservas'))->with('error', 'No hay reservas disponibles.');
        }

        // Si hay reservas, pasar la variable a la vista
        return view('dashboard', compact('reservas'))
            ->with('i', ($request->input('page', 1) - 1) * $reservas->perPage());
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $reserva = new Reserva();
        $ultimoId = Reserva::latest('id_reserva')->first(); // Obtén la última reserva
        
        // Si existe alguna reserva, obtén el id_reserva
        $ultimoId = $ultimoId ? $ultimoId->id_reserva : 0; // Puedes asignar 0 si no hay reservas
        $clientes = \App\Models\Cliente::all(); // Obtiene todos los clientes

        // Obtener el usuario autenticado
        $usuarioAutenticado = Auth::user();
        $tours = Tour::all(); 
        // Pasar los datos como un array asociativo
        return view('reserva.create', [
            'reserva' => $reserva,
            'ultimoId' => $ultimoId,
            'clientes' => $clientes,
            'tours'=>  $tours,
            'usuarioAutenticado' => $usuarioAutenticado,
        ]);
    }
    //MI PRIMER QUERY uwu no tocar 
    public function checkDeposito(Request $request)
    {
        $clienteId = $request->input('cliente_id_cliente');

        // Verificar si el cliente ha hecho un depósito
        $deposito = Deposito::where('cliente_id_cliente', $clienteId)->first();

        if ($deposito) {
            return response()->json([
                'success' => true,
                'message' => 'Este cliente ya tiene un depósito registrado.',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Este cliente no tiene un depósito registrado.',
                'redirectUrl' => route('depositos.create'),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            // Validar los datos del formulario
            $validatedData = $request->validate([
                'id_reserva' => 'required|integer|min:1',
                'cliente_id_cliente' => 'required|exists:cliente,id_cliente',
                'num_personas' => 'required|min:1|integer',
                'fecha_creacion' => 'required|date',
                'tour_id_tour' => 'required|exists:tour,id_tour',
                'transporte_id' => 'required|exists:transporte,id_transporte', // Validar transporte
            ], [
                'id_reserva.required' => 'El ID de la reserva es obligatorio.',
                'id_reserva.integer' => 'El ID de la reserva debe ser un número entero.',
                'id_reserva.min' => 'El ID de la reserva debe ser al menos 1.',
                
                'cliente_id_cliente.required' => 'Debe seleccionar un cliente.',
                'cliente_id_cliente.exists' => 'El cliente seleccionado no existe en el sistema.',

                'num_personas.integer' => 'El número de personas debe ser un número entero.',
                'num_personas.min' => 'Debe haber al menos 1 persona en la reserva.',

                'fecha_creacion.required' => 'La fecha de creación es obligatoria.',
                'fecha_creacion.date' => 'La fecha de creación debe ser válida.',
                'tour_id_tour.required' => 'Debe seleccionar un tour.',
                'transporte_id.required' => 'El tipo de transporte es obligatorio.',
                'transporte_id.exists' => 'El transporte seleccionado no existe.'
            ]);

            // Obtener el cliente asociado
            $cliente = \App\Models\Cliente::find($request->cliente_id_cliente);

            // Verificar si el cliente tiene un depósito
            $deposito = $cliente->depositos()->first(); // Si existe, obtendrás el primer depósito

            // Si el cliente tiene un depósito, asignar el id_deposito, de lo contrario, asignar null
            $validatedData['deposito_id_deposito'] = $deposito ? $deposito->id_deposito : null;

            // Agregar el ID del usuario autenticado al registro
            $validatedData['usuario_id_usuario'] = Auth::id();

            // Crear la nueva reserva con los datos validados
            Reserva::create($validatedData);

            // Redirigir con un mensaje de éxito
            return redirect()->route('reservas.index')->with('success', 'Reserva creada con éxito.');
        }
    /**
     * Display the specified resource.
     */
    public function show($id_reserva): View
    {
        $reserva = Reserva::find($id_reserva);

        return view('reserva.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_reserva): View
    {
        $reserva = Reserva::findOrFail($id_reserva);
        $clientes = \App\Models\Cliente::all();
    
        return view('reserva.edit', compact('reserva', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservaRequest $request, Reserva $reserva): RedirectResponse
    {
        $reserva->update($request->validated());

        return Redirect::route('reservas.index')
            ->with('success', 'Reserva actualizada exitosamente');
    }

    public function destroy($id_reserva): RedirectResponse
    {
        Reserva::find($id_reserva)->delete();

        return Redirect::route('reservas.index')
            ->with('success', 'Reserva Eliminada exkitosamente');
    }
    public function rapido()//Creacion de la reserva rapidas
    {
        return view('reserva.rapido');
    }
}
