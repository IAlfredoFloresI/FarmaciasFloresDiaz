<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdmController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class); // Rutas CRUD para usuarios

// Rutas específicas para productos y tienda
Route::resource('productos', ProductoController::class);
Route::resource('tiendas', TiendaController::class);

// Ruta para la parte de administración
Route::get('/admin', [UserController::class, 'index'])->name('admin.index');

// Ruta para manejar el dashboard
Route::get('/dash', function () {
    return view('dash');
})->name('dash');


Route::get('/admin', function () {
    return view('adminU');
});
