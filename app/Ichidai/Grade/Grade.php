<?php

namespace App\Ichidai\Grade;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'name',
        'required_lessons',
        'level',
    ];
}
