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

        return view('admin.lesson_times.edit', $data);
    }

    public function write(CreateEditLessonTime $request)
    {
        $this->lessonTimeRepository->update(new LessonTime(), $request->all());

        return redirect(route('admin.lesson_times.index'));
    }

    public function edit(LessonTime $lessonTime)
    {
        $data['title'] = $lessonTime->name;
        $data['lessonTime'] = $lessonTime;

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
}
