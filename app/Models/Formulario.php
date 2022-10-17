<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Formulario
 * @package App\Models
 * @version October 16, 2022, 8:39 pm UTC
 *
 */
class Formulario extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'formularios';



    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_comercio',
        'rubro_id',
        'departamento_id',
        'ciudad_id',
        'direccion',
        'forma_de_pago',
        'metodo_envio',
        'tecnologia_venta_producto',
        'publicidad_de_producto',
        'fue_util_para_el_negocio',
        'noto_aumento_de_ventas',
        'siguio_utlizando'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'forma_de_pago' => 'string',
        'metodo_envio' => 'string',
        'tecnologia_venta_producto' => 'string',
        'publicidad_de_producto' => 'string',
        'fue_util_para_el_negocio' => 'string',
        'noto_aumento_de_ventas' => 'string',
        'siguio_utlizando' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'forma_de_pago' => 'required',
        'metodo_envio' => 'required',
        'tecnologia_venta_producto' => 'required',
        'publicidad_de_producto' => 'required',
        'fue_util_para_el_negocio' => 'required',
        'noto_aumento_de_ventas' => 'required',
        'siguio_utlizando' => 'required'
    ];
    public function rubro (){
        return $this-> belongsTo('App\Models\Rubro');

       }
        public function ciudad (){
        return $this-> belongsTo('App\Models\Ciudad');

       }
        public function departamento (){
        return $this-> belongsTo('App\Models\Departamento');

       }

}
