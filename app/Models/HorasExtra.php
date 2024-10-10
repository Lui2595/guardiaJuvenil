<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\elementos;

class HorasExtra extends Model
{
    use HasFactory;
    protected $table = 'horas_extra';
    protected $fillable = ['user_id', 'horas', 'descripcion'];

    public function elemento()
    {

        return $this->hasOne(elementos::class, 'user_id', 'user_id');
    }
}
