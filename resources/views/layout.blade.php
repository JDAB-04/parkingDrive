<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('tarifas.index') }}">Parqueadero</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('tarifas.index') }}">Tarifas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('vehiculos.index') }}">Vehículos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
