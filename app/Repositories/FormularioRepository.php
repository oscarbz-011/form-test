<?php

namespace App\Repositories;

use App\Models\Formulario;
use App\Repositories\BaseRepository;

/**
 * Class FormularioRepository
 * @package App\Repositories
 * @version May 21, 2022, 10:49 pm UTC
*/

class FormularioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'forma_de_pago',
        'metodo_envio',
        'tecnologia_venta_producto',
        'publicidad_de_producto',
        'fue_util_para_el_negocio',
        'noto_aumento_de_ventas',
        'siguio_utlizando'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Formulario::class;
    }
}
