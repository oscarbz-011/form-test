<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;



    public function encuestado(){
        return $this->belongsToMany(Encuestado::class,'resultados', 'encuestado_id','respuestas_id');
    }
}
