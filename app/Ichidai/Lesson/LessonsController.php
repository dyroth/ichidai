<?php

namespace App\Ichidai\Lesson;

use App\Http\Requests\CreateEditLesson;
use App\Http\Controllers\Controller;

class LessonsController extends Controller
{

    /**
     * @var LessonRepository
     */
    private $lessonsRepository;

    public function __construct(LessonRepository $lessonRepository)
    {
        $this->lessonsRepository = $lessonRepository;
    }

    public function index()
    {
        $data['title'] = "Lessen";
        $data['lessons'] = $this->lessonsRepository->getAll();

        return view('admin.lessons.index', $data);
    }

    public function create()
    {
        $data['title'] = "Lessen";

        return view('admin.lessons.edit', $data);
    }

    public function write(CreateEditLesson $request)
    {
        $this->lessonsRepository->update(new Lesson(), $request->all());

        return redirect(route('admin.lessons.index'));
    }

    public function edit(Lesson $lesson)
    {
        $data['title'] = $lesson->name;
        $data['lesson'] = $lesson;

        return view('admin.lessons.edit', $data);
    }

    public function update(CreateEditLesson $request, Lesson $lesson)
    {
        $this->lessonsRepository->update($lesson, $request->all());

        return redirect(route('admin.lessons.index'));
    }

    public function delete(Lesson $lesson)
    {
        $this->lessonsRepository->delete($lesson);

        return redirect(route('admin.lessons.index'));
    }
}
