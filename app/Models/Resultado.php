<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;





    public function encuestado(){
        return $this->hasMany(Encuestado::class,'resultados', 'encuestado_id','respuestas_id');
    }
    public function respuesta(){
        return $this->hasMany(Respuesta::class,'resultados','encuestado_id', 'respuestas_id');
    }
    
}
