@extends('layout')

@section('title', 'Detalles del Vehículo')

@section('content')
    <h1>Detalles del Vehículo</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Placa:</strong> {{ $vehiculo->placa }}</li>
        <li class="list-group-item"><strong>Tipo:</strong> {{ $vehiculo->tipo }}</li>
        <li class="list-group-item"><strong>Tarifa:</strong> {{ $vehiculo->tarifa->tipo_vehiculo }} - ${{ number_format($vehiculo->tarifa->valor_minuto, 2) }}/min</li>
        <li class="list-group-item"><strong>Ingreso:</strong> {{ $vehiculo->ingreso ?? 'No registrado' }}</li>
        <li class="list-group-item"><strong>Salida:</strong> {{ $vehiculo->salida ?? 'No registrado' }}</li>
    </ul>

    <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
