<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pruebas_resultados extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'pruebas_datos_id', 'resultado'];
}
