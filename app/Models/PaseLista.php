<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaseLista extends Model
{
    use HasFactory;

    protected $table = 'pase_lista';
    protected $fillable = ['user_id', 'horas', 'fecha'];
}
