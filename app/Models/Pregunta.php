<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;





    public function opcion(){
        return $this->belongsToMany(Opcion::class,'respuestas', 'opciones_id','preguntas_id');
    }
}
