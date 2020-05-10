<?php

namespace App\Ichidai\coach;

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
}
