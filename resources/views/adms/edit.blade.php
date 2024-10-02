@extends('layouts.app')

@section('title', 'Editar Administrador')

@section('content')
    <div class="container">
        <h1>Editar Administrador</h1>
        <form action="{{ route('adms.update', $adm->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $adm->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="tel">Teléfono</label>
                <input type="text" class="form-control" id="tel" name="tel" value="{{ $adm->tel }}" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" value="{{ $adm->correo }}" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            <div class="form-group">
                <label for="tienda_id">Tienda</label>
                <select class="form-control" id="tienda_id" name="tienda_id">
                    @foreach ($tiendas as $tienda)
                        <option value="{{ $tienda->id }}" {{ $adm->tienda_id == $tienda->id ? 'selected' : '' }}>
                            {{ $tienda->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
