<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmPasswordController
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->rol->nombre === $role) {
            return $next($request);
        }

        return redirect('/login')->withErrors(['no_access' => 'No tienes acceso a esta sección.']);
    }
}