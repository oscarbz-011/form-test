<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuestado extends Model
{
    use HasFactory;
    public $table = 'encuestado';

    public $fillable = [
        'email'
    ];




    public function respuesta(){
        return $this->belongsToMany(Respuesta::class,'resultados','encuestado_id', 'respuestas_id');
    }
}
