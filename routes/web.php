<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'verUsuarios'])->name('usuarios.ver');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/create', [UsuarioController::class, 'agregarUsuario'])->name('usuarios.agregar');
Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/editar/{id}', [UsuarioController::class, 'editarUsuario'])->name('usuarios.editar');
Route::put('/usuarios/{id}', [UsuarioController::class, 'actualizarUsuario'])->name('usuarios.actualizar');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'eliminarUsuario'])->name('usuarios.eliminar');

use App\Http\Controllers\AuthController;



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/gerente/dashboard', function () {
    return view('gerente.dashboard'); // Redirige a la vista gerente/dashboard.blade.php
})->name('gerente.dashboard');

// Ruta para el dashboard del Vendedor
Route::get('/vendedores/dashboard', function () {
    return view('vendedores.dashboard'); // Redirige a la vista vendedor/dashboard.blade.php
})->name('vendedor.dashboard');

use App\Http\Controllers\VendedorController;

Route::resource('vendedores', VendedorController::class);

