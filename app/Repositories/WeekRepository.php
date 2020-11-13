<?php

namespace App\Repositories;

use App\Models\Week;
use App\Repositories\BaseRepository;

/**
 * Class WeekRepository
 * @package App\Repositories
 * @version November 13, 2020, 1:43 pm UTC
*/

class WeekRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'week_num',
        'season_id'
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
        return Week::class;
    }
}
