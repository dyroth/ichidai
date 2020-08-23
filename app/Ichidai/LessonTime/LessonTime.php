<?php

namespace App\Ichidai\LessonTime;

use App\Casts\CastTimestampWithoutSeconds;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lesson
 * @package App
 * @property string $day
 * @property string $name
 * @property string $starting_time
 * @property string $ending_time
 * @property string $group
 * @property string $location
 */
class LessonTime extends Model
{
    protected $fillable = [
        'day',
        'name',
        'starting_time',
        'ending_time',
        'group',
        'location',
    ];

    protected $casts = [
        'starting_time' => CastTimestampWithoutSeconds::class,
        'ending_time' => CastTimestampWithoutSeconds::class,
    ];
}
