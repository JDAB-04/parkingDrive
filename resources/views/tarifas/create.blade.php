@extends('layout')

@section('title', 'Creacion de Tarifa')

@section('content')
    <h1>Crear una Tarifa</h1>

    <form action="{{ route('tarifas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tipo de Vehiculo</label>
            <input type="text" name="tipo_vehiculo" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Valor por minuto</label>
            <input type="number" step="0.01" name="valor_minuto" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('tarifas.index) }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection