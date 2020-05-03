<?php


namespace App\Ichidai\Coach;


use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class CoachRepository
{
    public function getAll()
    {
        return Coach::all();
    }

    public function update(Coach $coach, array $values)
    {
        $coach->name = $values['name'];
        $coach->bio = $values['bio'];
        $coach->grade = $values['grade'];
        $coach->filename = $coach->filename ?? "";
        $coach->save();

        if ($coach-> filename == "" || isset($values['photo'])) {
            $filename = $coach->id . "-" . Carbon::now()->format('YmdHis') . "." . $values['photo']->getClientOriginalExtension();
            Storage::disk('local')->put('/public/upload/coaches/' . $filename, file_get_contents($values['photo']));

            $coach->filename = $filename;
            $coach->save();
        }

        return $coach;
    }

    public function delete(Coach $coach)
    {
        $coach->delete();
    }
}
