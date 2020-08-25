<?php


namespace App\Ichidai\Grade;


use App\Http\Requests\CreateEditGrade;

class GradeRepository
{
    public function getAll()
    {
        return Grade::all()->sortBy('level');
    }

    public function update(Grade $grade, array $values)
    {
        $grade->fill($values);
        $grade->level = Grade::count() + 1;
        $grade->save();
    }

    public function sortUp(Grade $grade)
    {
        if ($grade->level > 1) {
            $grade2 = Grade::where('level', $grade->level - 1)->first();

            $grade->level = $grade->level - 1;
            $grade2->level = $grade2->level + 1;

            $grade->save();
            $grade2->save();
        }
    }

    public function sortDown(Grade $grade)
    {
        if ($grade->level < Grade::count()) {
            $grade2 = Grade::where('level', $grade->level + 1)->first();

            $grade->level = $grade->level + 1;
            $grade2->level = $grade2->level - 1;

            $grade->save();
            $grade2->save();
        }
    }
}
