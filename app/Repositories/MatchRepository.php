<?php

namespace App\Repositories;

use App\Models\Match;
use App\Repositories\BaseRepository;

/**
 * Class MatchRepository
 * @package App\Repositories
 * @version November 13, 2020, 1:54 pm UTC
*/

class MatchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'title_ar',
        'description_ar',
        'image',
        'video',
        'week_id'
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
        return Match::class;
    }
}
