@extends('layout')

@section('title', 'Editar Vehículo')

@section('content')
    <h1>Editar Vehículo</h1>

    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Placa</label>
            <input type="text" name="placa" class="form-control" value="{{ $vehiculo->placa }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Vehículo</label>
            <input type="text" name="tipo" class="form-control" value="{{ $vehiculo->tipo }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tarifa</label>
            <select name="tarifa_id" class="form-control" required>
                @foreach($tarifas as $tarifa)
                    <option value="{{ $tarifa->id }}" {{ $tarifa->id == $vehiculo->tarifa_id ? 'selected' : '' }}>
                        {{ $tarifa->tipo_vehiculo }} - ${{ number_format($tarifa->valor_minuto, 2) }}/min
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
