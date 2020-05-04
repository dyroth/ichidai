<?php


namespace App\Ichidai\Lesson;


use App\Ichidai\coach\Lesson;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class LessonRepository
{
    public function getAll()
    {
        return Lesson::all();
    }

    public function update(Lesson $lesson, array $values)
    {
        $lesson->name = $values['name'];
        $lesson->info = $values['info'];
        $lesson->coaches = $values['coaches'];
        $lesson->filename = $lesson->filename ?? "";
        $lesson->save();

        if ($lesson->filename == "" || isset($values['photo'])) {
            $filename = $lesson->id . "-" . Carbon::now()->format('YmdHis') . "." . $values['photo']->getClientOriginalExtension();
            Storage::disk('local')->put('/public/upload/lessons/' . $filename, file_get_contents($values['photo']));

            $lesson->filename = $filename;
            $lesson->save();
        }

        return $lesson;
    }

    public function delete(Lesson $coach)
    {
        $coach->delete();
    }
}
