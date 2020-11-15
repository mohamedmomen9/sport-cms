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
 * @SWG\Definition(
 *      definition="Match",
 *      required={"title", "description", "title_ar", "description_ar", "week_id"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="title_ar",
 *          description="title_ar",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description_ar",
 *          description="description_ar",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="image",
 *          description="image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="video",
 *          description="video",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="week_num",
 *          description="week_num",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="year",
 *          description="year",
 *          type="string"
 *      )
 * )
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
        'image' => 'required|image',
        'video' => 'required|file',
        'week_id' => 'required'
    ];

    public function week(){
        return $this->belongsTo(Week::class);
    }
    
}
