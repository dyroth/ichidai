<?php

namespace App\Ichidai\Coach;

use App\Http\Requests\CreateEditCoach;
use App\Http\Controllers\Controller;
use App\Ichidai\Grade\Grade;
use Illuminate\Support\Facades\Input;

class CoachesController extends Controller
{

    /**
     * @var CoachRepository
     */
    private $coachRepository;

    public function __construct(CoachRepository $coachRepository)
    {
        $this->coachRepository = $coachRepository;
    }

    public function index()
    {
        $data['title'] = "Lesgevers";
        $data['coaches'] = $this->coachRepository->getAll();

        return view('admin.coaches.index', $data);
    }

    public function create()
    {
        $data['title'] = "Lesgevers";

        return view('admin.coaches.edit', $data);
    }

    public function write(CreateEditCoach $request)
    {
        $this->coachRepository->update(new Coach(), $request->all());

        return redirect(route('admin.coaches.index'));
    }

    public function edit(Coach $coach)
    {
        $data['title'] = $coach->name;
        $data['coach'] = $coach;
        $data['grades'] = Grade::all()->sortBy('level')->pluck('name', 'id');

        return view('admin.coaches.edit', $data);
    }

    public function update(CreateEditCoach $request, Coach $coach)
    {
        $this->coachRepository->update($coach, $request->all());

        return redirect(route('admin.coaches.index'));
    }

    public function delete(Coach $coach)
    {
        $this->coachRepository->delete($coach);

        return redirect(route('admin.coaches.index'));
    }
}
