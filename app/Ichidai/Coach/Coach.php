<?php

namespace App\Ichidai\Coach;

use App\Ichidai\Grade\Grade;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Coach
 * @package App
 * @property string $name
 * @property string $bio
 * @property integer $grade_id
 * @property string $filename
 */
class Coach extends Model
{
    protected $fillable = [
        'name',
        'bio',
        'grade_id',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
