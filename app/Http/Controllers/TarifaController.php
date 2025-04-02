<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarifa;

class TarifaController extends Controller{
    
    public function index()
    {
        $tarifas = Tarifa::all();
        return view('tarifas.index', compact('tarifas'));
    }

    public function create()
    {
        return view('tarifas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'valor_minuto' => 'required|numeric',
            'tipo_vehiculo' => 'required|string|max:50'
        ]);

        Tarifa::create($request->all());

        return redirect()->route('tarifas.index')->with('success', 'Tarifa creada correctamente.');
    }

    public function show(Tarifa $tarifa)
    {
        return view('tarifas.show', compact('tarifa'));
    }

    public function edit(Tarifa $tarifa)
    {
        return view('tarifas.edit', compact('tarifa'));
    }

    public function update(Request $request, Tarifa $tarifa)
    {
        $request->validate([
            'valor_minuto' => 'required|numeric',
            'tipo_vehiculo' => 'required|string|max:50'
        ]);

        $tarifa->update($request->all());

        return redirect()->route('tarifas.index')->with('success', 'Tarifa actualizada.');
    }

    public function destroy(Tarifa $tarifa)
    {
        $tarifa->delete();
        return redirect()->route('tarifas.index')->with('success', 'Tarifa eliminada.');
    }
}
