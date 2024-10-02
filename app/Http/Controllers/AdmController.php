<?php

namespace App\Http\Controllers;

use App\Models\Adm;
use App\Models\Tienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{

    // Mostrar listado de administradores

    public function index()
    {
        // Retornar la vista de administración
        return view('adminU');
    }

    // Formulario para crear nuevo administrador
    public function create()
    {
        $tiendas = Tienda::all(); // Para el select de tiendas
        return view('adms.create', compact('tiendas'));
    }

    // Almacenar un nuevo administrador

    public function store(Request $request)
    {
        // Pedir que el usuario ingrese su contraseña actual para confirmar
        $request->validate([
            'password' => 'required|string',
        ]);

        if (!Hash::check($request->password, Auth::user()->password)) {
            return redirect()->back()->withErrors('Contraseña incorrecta, no puedes agregar un nuevo administrador.');
        }
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tel' => 'required|string|max:15',
            'correo' => 'required|email|unique:adms,correo',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tienda_id' => 'required|exists:tienda,id',
            'password' => 'required|string|min:8|confirmed', // Validar contraseña segura
        ]);

        // Crear el nuevo administrador
        $adm = new Adm();
        $adm->nombre = $request->nombre;
        $adm->tel = $request->tel;
        $adm->correo = $request->correo;
        $adm->tienda_id = $request->tienda_id;
        $adm->password = Hash::make($request->password); // Encriptar la contraseña

        if ($request->hasFile('foto')) {
            $filePath = $request->file('foto')->store('public/fotos');
            $adm->foto = str_replace('public/', 'storage/', $filePath);
        }

        $adm->save();

        return redirect()->route('adms.index')->with('success', 'Administrador creado con éxito');
    }


    // Mostrar un administrador
    public function show($id)
    {
        $adm = Adm::findOrFail($id);
        return view('adms.show', compact('adm'));
    }


    // Formulario para editar un administrador
    public function edit(Adm $adm)
    {
        $tiendas = Tienda::all(); // Para el select de tiendas
        return view('adms.edit', compact('adm', 'tiendas'));
    }

    // Actualizar un administrador
    public function update(Request $request, Adm $adm)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
            'correo' => 'required|email|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tienda_id' => 'required|integer'
        ]);

        // Subida de imagen
        if ($request->hasFile('foto')) {
            // Eliminar foto anterior si existe
            if ($adm->foto) {
                Storage::delete('public/' . $adm->foto);
            }
            $adm->foto = $request->file('foto')->store('fotos_adm', 'public');
        }

        $adm->update($request->only(['nombre', 'tel', 'correo', 'tienda_id']));

        return redirect()->route('adms.index')->with('success', 'Administrador actualizado con éxito.');
    }


    // Eliminar un administrador
    public function destroy(Adm $adm)
    {
        if ($adm->foto) {
            Storage::delete('public/' . $adm->foto);
        }

        $adm->delete();
        return redirect()->route('adms.index')->with('success', 'Administrador eliminado con éxito.');
    }
}
