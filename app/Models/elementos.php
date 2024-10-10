<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class elementos extends Model
{
    use HasFactory;

    protected $fillable = [
        'unidad', 'nombre', 'apellido_paterno', 'apellido_materno', 'email',
        'user_id','edad',
        'fecha_nacimiento', 'celular', 'escuela', 'grado', 'grupo',
        'promedio', 'materia_favorita', 'deporte_favorito', 'facebook',
        'instagram', 'tiktok', 'lesion', 'detalle_lesion', 'alergia',
        'servicio_medico', 'nombre_servicio_medico', 'nss', 'religion',
        'nombre_padre', 'telefono_padre', 'ocupacion_padre', 'nombre_madre',
        'telefono_madre', 'ocupacion_madre', 'concentimiento', 'contacto_emergencia',
        'procedencia_abuelo_paterno', 'procedencia_abuela_paterna', 'procedencia_abuelo_materno', 'procedencia_abuela_materna'
    ];

    function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
