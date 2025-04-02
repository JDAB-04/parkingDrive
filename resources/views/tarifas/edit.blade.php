@extends('layout')

@section('title', 'Editar Tarifas')

@section('content')
    <h1>Editar Tarifa</h1>

    <form action="{{ route('tarifas.update', $tarifa) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Tipo de Vehículo</label>
            <input type="text" name="tipo_vehiculo" class="form-control" value="{{ $tarifa->tipo_vehiculo }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Valor por Minuto</label>
            <input type="number" step="0.01" name="valor_minuto" class="form-control" value="{{ $tarifa->valor_minuto }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('tarifas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
