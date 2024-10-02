@extends('layouts.app')

@section('title', 'Listado de Administradores')

@section('content')
<div class="container">
    <h1>Lista de Administradores</h1>
    <a href="{{ route('adms.create') }}" class="btn btn-primary">Agregar Administrador</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Tienda</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adms as $adm)
            <tr>
                <td>{{ $adm->nombre }}</td>
                <td>{{ $adm->tel }}</td>
                <td>{{ $adm->correo }}</td>
                <td>{{ $adm->tienda->nombre }}</td>
                <td>
                    <a href="{{ route('adms.show', $adm->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('adms.edit', $adm->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('adms.destroy', $adm->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection