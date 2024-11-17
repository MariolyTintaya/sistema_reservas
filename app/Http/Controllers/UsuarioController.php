<?php

namespace App\Http\Controllers;
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
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->contraseña = $request->contraseña;
        $usuario->activo = $request->activo;
        $usuario->rol_id_rol = $request->rol_id_rol;
        $usuario->save();

        return redirect('/usuarios');
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
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        if ($request->contraseña) {
            $usuario->contraseña = $request->contraseña;
        }
        $usuario->activo = $request->activo;
        $usuario->rol_id_rol = $request->rol_id_rol;
        $usuario->save();

        return redirect('/usuarios');
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
