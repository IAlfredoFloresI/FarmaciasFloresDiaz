<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    // Definir la relación con la tienda
    public function tienda()
    {
        return $this->belongsTo(Tienda::class);
    }
}

