<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

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
        // Validar las entradas
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
    
        // Verificar si el usuario ha superado el límite de intentos
        if ($this->hasTooManyLoginAttempts($request)) {
            // Si el límite se ha superado, guardar el tiempo restante en la sesión
            $seconds = $this->secondsRemaining($request);
            session()->flash('secondsRemaining', $seconds);
    
            // Regresar a la vista sin mostrar error en el backend
            return back();
        }
    
        // Ajustar las credenciales para que usen 'password' en lugar de 'contraseña'
        $credentials = [
            'correo' => $request->input('correo'),
            'contraseña' => $request->input('contraseña'),
        ];
    
        // Intentar autenticar al usuario
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Si el login es exitoso, reseteamos los intentos fallidos
            $this->clearLoginAttempts($request);
            return redirect()->intended($this->redirectPath());
        }
    
        // Si la autenticación falla, incrementamos los intentos
        $this->incrementLoginAttempts($request);
    
        // Regresar con un error si las credenciales son incorrectas
        return back()->withErrors([
            'correo' => 'Credenciales incorrectas.',
        ])->onlyInput('correo');
    }
    
    // Método para verificar si el usuario ha superado el límite de intentos
    protected function hasTooManyLoginAttempts(Request $request)
    {
        return RateLimiter::tooManyAttempts($this->throttleKey($request), 3);
    }
    
    // Método para obtener la clave de rate limiting, basada en el correo y la IP del usuario
    protected function throttleKey(Request $request)
    {
        return $request->input('correo') . '|' . $request->ip();
    }
    
    // Método para obtener los segundos restantes antes de que el usuario pueda volver a intentarlo
    protected function secondsRemaining(Request $request)
    {
        return RateLimiter::availableIn($this->throttleKey($request));
    }
    
    // Método para incrementar los intentos de login
    protected function incrementLoginAttempts(Request $request)
    {
        RateLimiter::hit($this->throttleKey($request));
    }
    
    // Método para limpiar los intentos fallidos cuando el usuario se autentica correctamente
    protected function clearLoginAttempts(Request $request)
    {
        RateLimiter::clear($this->throttleKey($request));
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

