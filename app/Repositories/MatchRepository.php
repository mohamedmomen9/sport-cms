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
        'week_num',
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
        return Match::class;
    }

    public function seasons($search = [], $skip = null, $limit = null, $columns = ['*'])
    {
        $query = $this->allQuery($search, $skip, $limit);
        return $query->join('weeks', 'weeks.id', '=', 'matches.week_id')
                    ->join('seasons', 'seasons.id', '=', 'weeks.season_id')
                    ->where('weeks.deleted_at', null)
                    ->where('seasons.deleted_at', null)
                    ->get($columns);
    }
}
