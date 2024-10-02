@extends('layouts.app')

@section('title', 'Crear Administrador')

@section('content')
<div class="container">
    <h1>Crear Nuevo Administrador</h1>
    <form action="{{ route('adms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="tel">Teléfono</label>
            <input type="text" class="form-control" id="tel" name="tel" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <small class="form-text text-muted">Debe tener al menos 8 caracteres y combinar letras, números y símbolos.</small>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="form-group">
            <label for="tienda_id">Tienda</label>
            <select class="form-control" id="tienda_id" name="tienda_id">
                @foreach ($tiendas as $tienda)
                <option value="{{ $tienda->id }}">{{ $tienda->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection