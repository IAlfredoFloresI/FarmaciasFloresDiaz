<!-- resources/views/tiendas/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tiendas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Lista de Tiendas</h1>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('tiendas.create') }}" class="btn btn-primary">Agregar Nueva Tienda</a>

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tiendas as $tienda)
                    <tr>
                        <td>{{ $tienda->id }}</td>
                        <td>{{ $tienda->nombre }}</td>
                        <td>
                            <a href="{{ route('tiendas.edit', $tienda->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('tiendas.destroy', $tienda->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            <a href="{{ route('tiendas.show', $tienda->id) }}" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
