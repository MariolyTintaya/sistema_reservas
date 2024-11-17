<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $roles = Rol::all(); // Obtén todos los roles
        return view('auth.register', compact('roles'));
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required', 'string', 'max:45'],
            'correo' => ['required', 'email', 'max:100', 'unique:usuario,correo'],
            'contraseña' => ['required', 'string', 'min:8', 'confirmed'],
            'rol_id_rol' => ['required', 'integer', 'exists:rol,id_rol'],
        ]);

        $data['contraseña'] = Hash::make($data['contraseña']);
        $data['activo'] = true;

        Usuario::create($data);

        return redirect('/login')->with('success', 'Usuario registrado correctamente.');
    }
}

