@extends('layout')

@section('title', 'Lista de Vehículos')

@section('content')
    <h1>Vehículos Registrados</h1>
    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary mb-3">Registrar Vehículo</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Tarifa</th>
                <th>Ingreso</th>
                <th>Salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->tipo }}</td>
                    <td>${{ number_format($vehiculo->tarifa->valor_minuto, 2) }} / min</td>
                    <td>{{ $vehiculo->ingreso ?? 'No registrado' }}</td>
                    <td>{{ $vehiculo->salida ?? 'No registrado' }}</td>
                    <td>
                        <a href="{{ route('vehiculos.show', $vehiculo) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar vehículo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
