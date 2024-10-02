<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adm extends Model
{
    use HasFactory;

    protected $table = 'adm';

    // Desactivar las marcas de tiempo automáticas si no las usas
    public $timestamps = false;

    // Campos permitidos
    protected $fillable = ['nombre', 'tel', 'correo', 'foto', 'tienda_id'];

    // Relación con la tabla tienda
    public function tienda()
    {
        return $this->belongsTo(Tienda::class);
    }
}
