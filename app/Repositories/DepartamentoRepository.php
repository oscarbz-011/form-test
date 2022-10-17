<?php

namespace App\Repositories;

use App\Models\Departamento;
use App\Repositories\BaseRepository;

/**
 * Class DepartamentoRepository
 * @package App\Repositories
 * @version October 15, 2022, 11:01 pm UTC
*/

class DepartamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_departamento'
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
        return Departamento::class;
    }
}
