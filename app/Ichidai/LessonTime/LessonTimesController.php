<?php

namespace App\Ichidai\LessonTime;

use App\Http\Requests\CreateEditLessonTime;
use App\Http\Controllers\Controller;

class LessonTimesController extends Controller
{

    /**
     * @var LessonTimeRepository
     */
    private $lessonTimeRepository;

    public function __construct(LessonTimeRepository $lessonTimeRepository)
    {
        $this->lessonTimeRepository = $lessonTimeRepository;
    }

    public function index()
    {
        $data['title'] = "Lestijden";
        $data['lessonTimes'] = $this->lessonTimeRepository->getAll();

        return view('admin.lesson_times.index', $data);
    }

    public function create()
    {
        $data['title'] = "Lestijden";
        $data['weekdays'] = $this->createSelectArrayForWeekdays();

        return view('admin.lesson_times.edit', $data);
    }

    public function write(CreateEditLessonTime $request)
    {
        $this->lessonTimeRepository->update(new LessonTime(), $request->all());

        return redirect(route('admin.lesson_times.index'));
    }

    public function edit(LessonTime $lessonTime)
    {
        $data['title'] = "Lestijden";
        $data['lessonTime'] = $lessonTime;
        $data['weekdays'] = $this->createSelectArrayForWeekdays();

        return view('admin.lesson_times.edit', $data);
    }

    public function update(CreateEditLessonTime $request, LessonTime $lessonTime)
    {
        $this->lessonTimeRepository->update($lessonTime, $request->all());

        return redirect(route('admin.lesson_times.index'));
    }

    public function delete(LessonTime $lessonTime)
    {
        $this->lessonTimeRepository->delete($lessonTime);

        return redirect(route('admin.lesson_times.index'));
    }

    private function createSelectArrayForWeekdays()
    {
        $array = [];

        foreach (config('weekdays') as $weekday) {
            $array[strtolower($weekday)] = ucfirst($weekday);
        }

        return $array;
    }
}
