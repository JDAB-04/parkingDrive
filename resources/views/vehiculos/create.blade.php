@extends('layout')

@section('title', 'Registrar Vehículo')

@section('content')
    <h1>Registrar Nuevo Vehículo</h1>

    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Placa</label>
            <input type="text" name="placa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Vehículo</label>
            <input type="text" name="tipo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tarifa</label>
            <select name="tarifa_id" class="form-control" required>
                @foreach($tarifas as $tarifa)
                    <option value="{{ $tarifa->id }}">{{ $tarifa->tipo_vehiculo }} - ${{ number_format($tarifa->valor_minuto, 2) }}/min</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
