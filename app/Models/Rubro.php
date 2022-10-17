<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Rubro
 * @package App\Models
 * @version October 15, 2022, 11:13 pm UTC
 *
 * @property string $nombre_rubro
 */
class Rubro extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'rubros';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_rubro'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre_rubro' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_rubro' => 'required'
    ];

    public function formulario (){
        return $this-> hasMany('App\Models\Formulario');
    }
}
