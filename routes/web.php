<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\GuiumController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ParadaController;
use App\Http\Controllers\VendedorController;


//------------------------ RUTAS MARIOLY  :3 --------------------------------
Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'verUsuarios'])->name('usuarios.ver');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/create', [UsuarioController::class, 'agregarUsuario'])->name('usuarios.agregar');
Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');

Route::get('/usuarios/edit/{id}', [UsuarioController::class, 'editarUsuario'])->name('usuarios.editar');
Route::put('/usuarios/{id}', [UsuarioController::class, 'actualizarUsuario'])->name('usuarios.actualizar');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'eliminarUsuario'])->name('usuarios.eliminar');

use App\Http\Controllers\AuthController;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para el dashboard del Gerente
Route::get('/gerente/dashboard', function () {
    return view('gerente.dashboard'); // Redirige a la vista gerente/dashboard.blade.php
})->name('gerente.dashboard')->middleware('auth'); // Asegúrate de que esté protegido por autenticación

//Ruta AIlyn xd para ir al index de vendedor
Route::get('/vendedores', [VendedorController::class, 'index'])->name('vendedores.index');


// Ruta para el dashboard del Vendedor
Route::get('/vendedores/dashboard', function () {
    return view('vendedores.dashboard'); // Redirige a la vista vendedor/dashboard.blade.php
})->name('vendedor.dashboard')->middleware('auth'); // Asegúrate de que esté protegido por autenticación


//--------------------------- FIN DE LAS RUTAS MARIOLY----------------------------

//------------------------ RUTAS AILYN NO TOCAR :) --------------------------------
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tour', TourController::class);
Route::resource('destinos', DestinoController::class);
Route::resource('guium', GuiumController::class);
Route::resource('paquete', PaqueteController::class);
Route::resource('transporte', TransporteController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('depositos', DepositoController::class);
Route::resource('reservas', ReservaController::class);
Route::post('/check-deposito', [ReservaController::class, 'checkDeposito'])->name('reserva.checkDeposito');
Route::resource('paradas', ParadaController::class);
Route::get('/vendedores/dashboard', [VendedorController::class, 'dashboard'])->name('vendedores.dashboard');
Route::get('/reserva/rapido', [ReservaController::class, 'rapido'])->name('reservas.rapido');//Rota para la reserva rapida
//--------------------------- FIN DE LAS RUTAS AILYN :) ----------------------------


// routes/web.php 
//quitar esto
Route::get('/admin', function () {
    return view('admin_panel');
});
