<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validar los campos de entrada
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required',
        ]);

        // Recuperar los valores de entrada
        $correo = $request->input('correo');
        $contraseña = $request->input('contraseña');

        // Comprobar si existe un usuario que coincida
        $user = Usuario::where('correo', $correo)
                        ->where('contraseña', $contraseña)
                        ->first();

        if ($user) {
            // Redirigir basado en el rol del usuario
            if ($user->rol_id_rol == 1) {  // Suponiendo que 1 es el ID para Gerente
                return redirect()->route('gerente.dashboard');
            } elseif ($user->rol_id_rol == 2) {  // Suponiendo que 2 es el ID para Vendedor
                return redirect()->route('vendedor.dashboard');
            }
        }

        // Redirigir de vuelta con un mensaje de error si no se encuentra coincidencia
        return redirect()->back()->withErrors(['login' => 'Credenciales incorrectas.']);
    }
}

