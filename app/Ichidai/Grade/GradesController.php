<?php

namespace App\Ichidai\Grade;

use App\Http\Requests\CreateEditGrade;
use App\Http\Controllers\Controller;

class GradesController extends Controller
{

    /**
     * @var GradeRepository
     */
    private $gradeRepository;

    public function __construct(GradeRepository $gradeRepository)
    {
        $this->gradeRepository = $gradeRepository;
    }

    public function index()
    {
        $data['title'] = "Graden";
        $data['grades'] = $this->gradeRepository->getAll();

        return view('admin.grades.index', $data);
    }

    public function create()
    {
        $data['title'] = "Graad";

        return view('admin.grades.edit', $data);
    }

    public function write(CreateEditGrade $request)
    {
        $this->gradeRepository->update(new Grade(), $request->all());

        return redirect(route('admin.grades.index'));
    }

    public function edit(Grade $grade)
    {
        $data['title'] = "Graden";
        $data['grade'] = $grade;

        return view('admin.grades.edit', $data);
    }

    public function update(CreateEditGrade $request, Grade $grade)
    {
        $this->gradeRepository->update($grade, $request->all());

        return redirect(route('admin.grades.index'));
    }

    public function delete(Grade $grade)
    {
        $this->gradeRepository->delete($grade);

        return redirect(route('admin.grades.index'));
    }

    public function sortUp(Grade $grade)
    {
        $this->gradeRepository->sortUp($grade);

        return redirect(route('admin.grades.index'));
    }

    public function sortDown(Grade $grade)
    {
        $this->gradeRepository->sortDown($grade);

        return redirect(route('admin.grades.index'));
    }
}
