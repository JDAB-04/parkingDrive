@extends('layout')

@section('title', 'Detalles de la Tarifa')

@section('content')
    <h1>Detalles de la Tarifa</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $tarifa->id }}</li>
        <li class="list-group-item"><strong>Tipo de Vehículo:</strong> {{ $tarifa->tipo_vehiculo }}</li>
        <li class="list-group-item"><strong>Valor por Minuto:</strong> ${{ number_format($tarifa->valor_minuto, 2) }}</li>
    </ul>

    <a href="{{ route('tarifas.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
