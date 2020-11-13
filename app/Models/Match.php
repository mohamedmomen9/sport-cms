<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Match
 * @package App\Models
 * @version November 13, 2020, 1:54 pm UTC
 *
 * @property string $title
 * @property string $description
 * @property string $title_ar
 * @property string $description_ar
 * @property string $image
 * @property string $video
 * @property integer $week_id
 */
class Match extends Model
{
    use SoftDeletes;

    public $table = 'matches';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'title_ar',
        'description_ar',
        'image',
        'video',
        'week_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'title_ar' => 'string',
        'description_ar' => 'string',
        'image' => 'string',
        'video' => 'string',
        'week_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'title_ar' => 'required',
        'description_ar' => 'required',
        'week_id' => 'required'
    ];

    
}
