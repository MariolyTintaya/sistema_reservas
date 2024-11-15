<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;
use App\Models\Usuario;
class VendedorController extends Controller
{
    // Mostrar todos los vendedores
    public function index()
    {
        $vendedores = Vendedor::with('usuario')->get(); // Carga los vendedores y sus usuarios asociados
        return view('vendedores.index', compact('vendedores'));
    }
    
    // Mostrar el formulario para crear un nuevo vendedor
    public function create()
    {
        $usuarios = Usuario::where('rol_id_rol', 2)->get(); // Filtra solo los empleados (rol_id_rol = 2)
        return view('vendedores.create', compact('usuarios'));
    }

    // Almacenar un nuevo vendedor en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'sueldo' => 'nullable|numeric',
            'fecha_contrato' => 'nullable|date',
            'turno' => 'nullable|string|max:25',
            'celular' => 'nullable|integer',
            'activo' => 'required|boolean',
            'usuario_id_usuario' => 'required|integer|exists:usuarios,id_usuario'
        ]);

        Vendedor::create($request->all());
        return redirect()->route('vendedores.index');
    }

    // Mostrar el vendedor específico
    public function show(Vendedor $vendedor)
    {
        return view('vendedores.show', compact('vendedor'));
    }

    // Mostrar el formulario para editar un vendedor existente
    public function edit($id)
{
    $vendedor = Vendedor::findOrFail($id);
    $usuarios = Usuario::where('rol_id_rol', 2)->get(); // Filtra solo los empleados (rol_id_rol = 2)
    return view('vendedores.edit', compact('vendedor', 'usuarios'));
}

    // Actualizar un vendedor en la base de datos
    public function update(Request $request, Vendedor $vendedor)
    {
        $request->validate([
            'sueldo' => 'nullable|numeric',
            'fecha_contrato' => 'nullable|date',
            'turno' => 'nullable|string|max:25',
            'celular' => 'nullable|integer',
            'activo' => 'required|boolean',
            'usuario_id_usuario' => 'required|integer|exists:usuarios,id_usuario'
        ]);

        $vendedor->update($request->all());
        return redirect()->route('vendedores.index');
    }

    // Eliminar un vendedor
    public function destroy(Vendedor $vendedor)
    {
        $vendedor->delete();
        return redirect()->route('vendedores.index');
    }
}
