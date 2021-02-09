<?php

namespace App\Ichidai\Setting;

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
        'properties' => 'object'
    ];

    public static function getSetting(string $name): ?object
    {
        return Setting::where('name', $name)->first()->properties ?? null;
    }
}
