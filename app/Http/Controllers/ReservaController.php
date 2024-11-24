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

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $reservas = Reserva::paginate();

        return view('reserva.index', compact('reservas'))
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
        
        // Pasar los datos como un array asociativo
        return view('reserva.create', [
            'reserva' => $reserva,
            'ultimoId' => $ultimoId,
            'clientes' => $clientes,
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
    public function store(ReservaRequest $request): RedirectResponse
    {
        Reserva::create($request->validated());
        $data = $request->validated();
        $data['fecha_creacion'] = date('Y-m-d'); // Forzar la fecha actual
     
        Reserva::create($data);
        $validatedData['usuario_id_usuario'] = Auth::id();    // Agregar el ID del usuario autenticado al registro
        // Crear la reserva
        Reserva::create($validatedData);
        return Redirect::route('reservas.index')
            ->with('success', 'Reserva creada exitosamente.');
    }

    public function rules(): array
    {
    return [
        'fecha_creacion' => 'required|date|before_or_equal:today',
        // Otras reglas
    ];
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
            ->with('success', 'Reserva updated successfully');
    }

    public function destroy($id_reserva): RedirectResponse
    {
        Reserva::find($id_reserva)->delete();

        return Redirect::route('reservas.index')
            ->with('success', 'Reserva deleted successfully');
    }
}
