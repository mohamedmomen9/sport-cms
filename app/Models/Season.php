<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Season
 * @package App\Models
 * @version November 13, 2020, 1:20 pm UTC
 *
 * @property string $name
 * @property string $year
 */
class Season extends Model
{
    use SoftDeletes;

    public $table = 'seasons';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'year' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'year' => 'required'
    ];

    
}
