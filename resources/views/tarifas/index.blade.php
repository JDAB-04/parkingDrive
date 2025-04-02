@extends('layout')

@section('title', 'Listado de tarifas')

@section('content')
    <h1>Tarifas Parking Drive 2025</h1>
    <a href="{{ route('tarifas.create') }}" class="btn btn-primary mb-3">Nueva Tarifa</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo de Vehiculo</th>
                <th>Valor por minuto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarifas as $tarifa)

                <tr>
                    <td>{{ $tarifa->id }}</td>
                    <td>{{ $tarifa->tipo_vehiculo }}</td>
                    <td>${{ number_format($tarifa->valor_minuto, 2) }} </td>
                    <td>
                        <a href="{{ route('tarifas.show', $tarifa) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('tarifas.edit', $tarifa) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('tarifas.destroy', $tarifa) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection