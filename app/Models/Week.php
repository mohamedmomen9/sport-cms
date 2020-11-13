<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Week
 * @package App\Models
 * @version November 13, 2020, 1:43 pm UTC
 *
 * @property string $title
 * @property integer $week_num
 * @property integer $season_id
 */
class Week extends Model
{
    use SoftDeletes;

    public $table = 'weeks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'week_num',
        'season_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'week_num' => 'integer',
        'season_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'week_num' => 'required',
        'season_id' => 'required'
    ];

    
}
