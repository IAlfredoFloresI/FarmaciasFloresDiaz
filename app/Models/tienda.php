<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'tienda';

    // Desactivar las marcas de tiempo automáticas
    public $timestamps = false;

    // Proteger la columna 'id' para que no sea asignada manualmente
    protected $guarded = ['id'];

    // Definir la relación con productos
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    // Definir la relación con administradores
    public function adms()
    {
        return $this->hasMany(Adm::class);
    }

    // Agregar atributos que pueden ser asignados en masa
    protected $fillable = ['nombre']; // Ajustar según los campos que necesites
}
