<!-- resources/views/tiendas/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Tienda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Detalles de la Tienda</h1>

        <div class="mb-3">
            <strong>ID:</strong> {{ $tienda->id }}
        </div>
        <div class="mb-3">
            <strong>Nombre:</strong> {{ $tienda->nombre }}
        </div>

        <a href="{{ route('tiendas.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>
