<?php

namespace App\Repositories;

use App\Models\Season;
use App\Repositories\BaseRepository;

/**
 * Class SeasonRepository
 * @package App\Repositories
 * @version November 13, 2020, 1:20 pm UTC
*/

class SeasonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'year'
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
        return Season::class;
    }
}
