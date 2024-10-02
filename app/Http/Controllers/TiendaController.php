<?php

namespace App\Http\Controllers;

use App\Models\Tienda; // Asegúrate de que el modelo Tienda esté creado
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiendas = Tienda::all(); // Obtener todas las tiendas
        return view('tiendas.index', compact('tiendas')); // Pasar las tiendas a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiendas.create'); // Retornar la vista para crear tienda
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255', // Validaciones
            // Agrega más campos según tu necesidad
        ]);

        Tienda::create($request->all()); // Crear una nueva tienda
        return redirect()->route('tiendas.index')->with('success', 'Tienda creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tienda $tienda)
    {
        return view('tiendas.show', compact('tienda')); // Retornar la vista para mostrar la tienda
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tienda $tienda)
    {
        return view('tiendas.edit', compact('tienda')); // Retornar la vista para editar la tienda
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tienda $tienda)
    {
        $request->validate([
            'nombre' => 'required|string|max:255', // Validaciones
            // Agrega más campos según tu necesidad
        ]);

        $tienda->update($request->all()); // Actualizar la tienda
        return redirect()->route('tiendas.index')->with('success', 'Tienda actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tienda $tienda)
    {
        $tienda->delete(); // Eliminar la tienda
        return redirect()->route('tiendas.index')->with('success', 'Tienda eliminada exitosamente.');
    }
}
