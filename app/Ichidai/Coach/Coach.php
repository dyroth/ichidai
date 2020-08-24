<?php

namespace App\Ichidai\Coach;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coach
 * @package App
 * @property string $name
 * @property string $bio
 * @property string $grade
 * @property string $filename
 */
class Coach extends Model
{
    protected $fillable = [
        'name',
        'bio',
        'grade',
    ];
}
