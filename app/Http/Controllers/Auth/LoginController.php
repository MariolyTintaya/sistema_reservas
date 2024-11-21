<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Muestra el formulario de inicio de sesión.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Asegúrate de que la vista auth.login exista
    }

    /**
     * Maneja el inicio de sesión del usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Valida las entradas
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
    
        // Ajusta las credenciales para que usen 'password' en lugar de 'contraseña'
        $credentials = [
            'correo' => $request->input('correo'),
            'contraseña' => $request->input('contraseña'), // Mapea al campo 'password'
        ];
    
        // Intenta autenticar al usuario
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended($this->redirectPath());
        }
    
        // Si falla, regresa con un error
        return back()->withErrors([
            'correo' => 'Credenciales incorrectas.',
        ])->onlyInput('correo');
    }

    /**
     * Cierra la sesión del usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    /**
     * Define la ruta de redirección después del inicio de sesión.
     *
     * @return string
     */
    protected function redirectPath()
    {
        $user = Auth::user();
    
        // Redirigir basado en el rol del usuario
        if ($user->rol_id_rol == 1) { // Suponiendo que 1 es Gerente
            return '/gerente/dashboard';
        } elseif ($user->rol_id_rol == 2) { // Suponiendo que 2 es Vendedor
            return '/vendedores/dashboard';
        }
    
        return '/welcome'; // Ruta por defecto
    }
}

