<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use App\Models\Rol;
class UsuarioController extends Controller
{
    // Ver todos los usuarios
    public function verUsuarios()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        $roles = Rol::all(); // Obtén todos los roles
        return view('usuarios.create', compact('roles')); // Pasa los roles a la vista
    }
    // Método para agregar un nuevo usuario
    public function agregarUsuario(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuario,correo',
            'contraseña' => 'required|string|min:8',
            'activo' => 'nullable|boolean',
            'rol_id_rol' => 'required|exists:rol,id_rol',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo debe ser válido.',
            'correo.unique' => 'Este correo ya está registrado.',
            'contraseña.required' => 'La contraseña es obligatoria.',
            'contraseña.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'rol_id_rol.required' => 'Debe seleccionar un rol.',
            'rol_id_rol.exists' => 'El rol seleccionado no es válido.',
        ]);
    
        try {
            $usuario = new Usuario();
            $usuario->nombre = $request->nombre;
            $usuario->correo = $request->correo;
            $usuario->contraseña = Hash::make($request->contraseña);
            $usuario->activo = $request->activo ?? 1;
            $usuario->rol_id_rol = $request->rol_id_rol;
            $usuario->save();
        
            return redirect()->route('usuarios.ver')->with('success', 'Usuario registrado exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hubo un problema al registrar el usuario: ' . $e->getMessage());
        }
    }

    // Editar un usuario
    public function editarUsuario($id)
    {
        $usuario = Usuario::find($id);
        return view('editar_usuario', ['usuario' => $usuario]);
    }

    // Actualizar un usuario
    public function actualizarUsuario(Request $request, $id)
{
    // Buscar el usuario
    $usuario = Usuario::findOrFail($id);

    // Validación de datos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'correo' => 'required|email|unique:usuario,correo,' . $id . ',id_usuario', // Excluye el actual usuario
        'contraseña' => 'nullable|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
        'rol_id_rol' => 'required|exists:rol,id_rol',
    ]);

    // Actualizar datos
    $usuario->nombre = $request->nombre;
    $usuario->correo = $request->correo;

    // Encriptar la nueva contraseña solo si fue proporcionada
    if ($request->filled('contraseña')) {
        $usuario->contraseña = Hash::make($request->contraseña);
    }

    $usuario->activo = $request->activo;
    $usuario->rol_id_rol = $request->rol_id_rol;
    $usuario->save();

    return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente.');
}

    public function store(Request $request)
    {
        $request->validate([
            'contraseña' => [
                'required',
                'string',
                'min:8',            // Mínimo 8 caracteres
                'max:20',           // Máximo 20 caracteres
                'regex:/[a-z]/',    // Al menos una letra minúscula
                'regex:/[A-Z]/',    // Al menos una letra mayúscula
                'regex:/[0-9]/',    // Al menos un número
                'regex:/[@$!%*#?&]/' // Al menos un carácter especial
            ],
        ]);
    
        // Procesar los datos si la validación es correcta
        return back()->with('success', 'Contraseña válida y registrada.');
    }

    // Eliminar un usuario
    public function eliminarUsuario($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect('/usuarios');
    }
}
