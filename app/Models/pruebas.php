<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pruebas_datos;
class pruebas extends Model
{
    use HasFactory;

    public function prueba_datos()
    {
        return $this->hasMany(pruebas_datos::class);
    }
}
