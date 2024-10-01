<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorasExtra extends Model
{
    use HasFactory;
    protected $table = 'horas_extra';
    protected $fillable = ['user_id', 'horas', 'descripcion'];

    public function elemento()
    {
        return $this->belongsTo(Elementos::class, 'user_id', 'user_id');
    }
}
