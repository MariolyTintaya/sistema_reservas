<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
class AuthController extends Controller
{
    public function showLoginFormReservas()
    {
        return view('loginReservas');
    }

    public function loginReservas(Request $request)
    {
        // Validar los campos de entrada
        $request->validate([
            'correo' => 'required|email|exists:usuario,correo', // Asegura que el correo esté registrado
            'contraseña' => 'required|min:8', // Contraseña mínima de 8 caracteres
        ], [
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'Por favor ingresa un correo válido.',
            'correo.exists' => 'Este correo no está registrado.',
            'contraseña.required' => 'La contraseña es obligatoria.',
            'contraseña.min' => 'La contraseña debe tener al menos 8 caracteres.',
        ]);
    
        // Recuperar los valores de entrada
        $correo = $request->input('correo');
        $contraseña = $request->input('contraseña');
    
        // Comprobar si existe un usuario que coincida
        $user = Usuario::where('correo', $correo)->first();
    
        if ($user && Hash::check($contraseña, $user->contraseña)) {
            // Redirigir basado en el rol del usuario
            if ($user->rol_id_rol == 1) {  // Suponiendo que 1 es el ID para Gerente
                return redirect()->route('gerente.dashboard');
            } elseif ($user->rol_id_rol == 2) {  // Suponiendo que 2 es el ID para Vendedor
                return redirect()->route('vendedor.dashboard');
            }
        }
    
        // Redirigir de vuelta con un mensaje de error si no se encuentra coincidencia
        return redirect()->back()->withErrors(['loginReservas' => 'Credenciales incorrectas.']);
    }
    
    public function logoutReservas(Request $request)
    {
    // Cerrar sesión del usuario
    auth()->logout();

    // Redirigir al usuario a la página de inicio de sesión
    return redirect()->route('loginReservas');
    }

}

