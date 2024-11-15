<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\GuiumController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\TransporteController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tours', TourController::class);
Route::resource('destinos', DestinoController::class);
Route::resource('guia', GuiumController::class);
Route::resource('paquetes', PaqueteController::class);
Route::resource('transportes', TransporteController::class);