<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administrador')</title>
    <!-- Incluir Bootstrap u otros CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Mi Aplicación</h1>
            <nav>
                <a href="{{ route('adms.index') }}">Administradores</a>
                <!-- Agrega más enlaces según lo necesario -->
            </nav>
        </header>

        <!-- Aquí se incluirá el contenido de las vistas hijas -->
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Incluir scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
