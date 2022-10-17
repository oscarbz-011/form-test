<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Ciudad
 * @package App\Models
 * @version October 15, 2022, 11:12 pm UTC
 *
 * @property integer $departamento_id
 * @property string $nombre_ciudad
 */
class Ciudad extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ciudads';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'departamento_id',
        'nombre_ciudad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'departamento_id' => 'integer',
        'nombre_ciudad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'departamento_id' => 'required',
        'nombre_ciudad' => 'required'
    ];
    
    public function formulario(){
        return $this-> hasMany('App\Models\Formulario');
    }
    public function departamento(){
        return $this-> belongsTo('App\Models\Departamento');
    }

}
