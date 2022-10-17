<?php

namespace App\Repositories;

use App\Models\Rubro;
use App\Repositories\BaseRepository;

/**
 * Class RubroRepository
 * @package App\Repositories
 * @version October 15, 2022, 11:13 pm UTC
*/

class RubroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_rubro'
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
        return Rubro::class;
    }
}
