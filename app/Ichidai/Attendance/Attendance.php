<?php

namespace App\Ichidai\Attendance;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Attendance extends Model
{
    protected $fillable = [
        'user_id',
        'lesson_id',
        'grade_id',
        'date',
    ];

    public static function boot() {
        parent::boot();

        self::creating(function ($model) {
            $model->date = Carbon::now();
        });
    }
}
