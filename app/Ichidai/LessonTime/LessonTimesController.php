<?php

namespace App\Ichidai\LessonTime;

use App\Http\Requests\CreateEditLesson;
use App\Ichidai\coach\Lesson;
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

    public function write(CreateEditLesson $request)
    {
        $this->lessonTimeRepository->update(new Lesson(), $request->all());

        return redirect(route('admin.lesson_times.index'));
    }

    public function edit(Lesson $lesson)
    {
        $data['title'] = $lesson->name;
        $data['lesson'] = $lesson;

        return view('admin.lesson_times.edit', $data);
    }

    public function update(CreateEditLesson $request, Lesson $lesson)
    {
        $this->lessonTimeRepository->update($lesson, $request->all());

        return redirect(route('admin.lesson_times.index'));
    }

    public function delete(Lesson $lesson)
    {
        $this->lessonTimeRepository->delete($lesson);

        return redirect(route('admin.lesson_times.index'));
    }
}
