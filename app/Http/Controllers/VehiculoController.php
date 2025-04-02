<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Tarifa;

class VehiculoController extends Controller{

    public function index()
    {
        $vehiculos = Vehiculo::with('tarifa')->get();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        $tarifas = Tarifa::all();
        return view('vehiculos.create', compact('tarifas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:50',
            'placa' => 'required|string|max:10|unique:vehiculos',
            'tarifa_id' => 'required|exists:tarifas,id',
            'ingreso' => 'nullable|date',
            'salida' => 'nullable|date|after_or_equal:ingreso'
        ]);

        Vehiculo::create($request->all());

        return redirect()->route('vehiculos.index')->with('success', 'Vehículo registrado.');
    }

    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculos.show', compact('vehiculo'));
    }

    public function edit(Vehiculo $vehiculo)
    {
        $tarifas = Tarifa::all();
        return view('vehiculos.edit', compact('vehiculo', 'tarifas'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'tipo' => 'required|string|max:50',
            'placa' => 'required|string|max:10|unique:vehiculos,placa,' . $vehiculo->id,
            'tarifa_id' => 'required|exists:tarifas,id',
            'ingreso' => 'nullable|date',
            'salida' => 'nullable|date|after_or_equal:ingreso'
        ]);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')->with('success', 'Vehículo actualizado.');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado.');
    }
}
