<?php

namespace App\Repositories;

use App\Models\Formulario;
use App\Repositories\BaseRepository;

/**
 * Class FormularioRepository
 * @package App\Repositories
 * @version October 16, 2022, 8:39 pm UTC
*/

class FormularioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
