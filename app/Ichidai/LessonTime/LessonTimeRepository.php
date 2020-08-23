<?php


namespace App\Ichidai\LessonTime;


use App\Ichidai\coach\LessonTime;

class LessonTimeRepository
{

    public function getAll()
    {
        return LessonTime::all();
    }

    public function update(LessonTime $lessonTime, array $all)
    {
        $lessonTime->fill($all);
        $lessonTime->save();
    }
}
