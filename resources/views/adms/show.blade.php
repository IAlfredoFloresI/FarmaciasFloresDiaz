@extends('layouts.app')

@section('title', 'Detalles del Administrador')

@section('content')
    <div class="container">
        <h1>Detalles del Administrador</h1>
        <p><strong>Nombre:</strong> {{ $adm->nombre }}</p>
        <p><strong>Teléfono:</strong> {{ $adm->tel }}</p>
        <p><strong>Correo:</strong> {{ $adm->correo }}</p>
        <p><strong>Tienda:</strong> {{ $adm->tienda->nombre }}</p>
        <p><strong>Foto:</strong></p>
        <img src="{{ asset($adm->foto) }}" alt="Foto del Administrador" width="200">
        <a href="{{ route('adms.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
