<?php

namespace App\Ichidai\coach;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lesson
 * @package App
 * @property string $name
 * @property string $info
 * @property string $coaches
 * @property string $filename
 */
class Lesson extends Model
{
    protected $fillable = [
        'name',
        'info',
        'coaches',
    ];
}
