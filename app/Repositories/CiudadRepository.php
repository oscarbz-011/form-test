<?php

namespace App\Repositories;

use App\Models\Ciudad;
use App\Repositories\BaseRepository;

/**
 * Class CiudadRepository
 * @package App\Repositories
 * @version October 15, 2022, 11:12 pm UTC
*/

class CiudadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'departamento_id',
        'nombre_ciudad'
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
        return Ciudad::class;
    }
}
