<?php

namespace App\Ichidai\Settings;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 * @package App
 * @property string $name
 * @property string $properties
 */
class Setting extends Model
{
    protected $fillable = [
        'name',
        'properties',
    ];

    protected $casts = [
        'properties' => 'array'
    ];
}
