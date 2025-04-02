<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\VehiculoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tarifas', TarifaController::class);
Route::resource('vehiculos', VehiculoController::class);
