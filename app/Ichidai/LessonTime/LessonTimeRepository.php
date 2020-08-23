<?php


namespace App\Ichidai\LessonTime;


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

    public function delete(LessonTime $lessonTime)
    {
        $lessonTime->delete();

        return redirect(route('admin.lesson_times.index'));
    }
}
