<?php

namespace App\Ichidai\Member;


use App\Http\Requests\CreateEditMember;
use App\Ichidai\Attendance\Attendance;
use App\Ichidai\Grade\Grade;
use App\Ichidai\Grade\GradeRepository;
use App\Ichidai\Lesson\Lesson;
use App\Ichidai\User\User;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{

    /**
     * @var MemberRepository
     */
    private $memberRepository;
    /**
     * @var GradeRepository
     */
    private $gradeRepository;

    public function __construct(MemberRepository $memberRepository, GradeRepository $gradeRepository)
    {
        $this->memberRepository = $memberRepository;
        $this->gradeRepository = $gradeRepository;
    }

    public function index()
    {
        $data['title'] = "Leden";
        $data['members'] = $this->memberRepository->getAll();

        return view('admin.members.index', $data);
    }

    public function create()
    {
        $data['title'] = "Leden";
        $data['grades'] = $this->gradeRepository->getSelectOptions();

        return view('admin.members.edit', $data);
    }

    public function write(CreateEditMember $request)
    {
        $this->memberRepository->update(new User(), $request->all(), true);

        return redirect(route('admin.members.index'));
    }

    public function edit(User $member)
    {
        $data['title'] = $member->name;
        $data['member'] = $member;
        $data['grades'] = $this->gradeRepository->getSelectOptions();

        return view('admin.members.edit', $data);
    }

    public function update(CreateEditMember $request, User $member)
    {
        $this->memberRepository->update($member, $request->all());

        return redirect(route('admin.members.index'));
    }

    public function delete(User $member)
    {
        $this->memberRepository->delete($member);

        return redirect(route('admin.members.index'));
    }

    public function memberIndex(User $member = null)
    {
        $data['route'] = $this->getQrCodeRoute();
        $data['member'] = $member ?? Auth::user();
        $data['title'] = $data['member']->name;
        $data['memberGrades'] = Grade::where('level', '<=', $data['member']->grade->level)->get();
        $data['lessons'] = Lesson::all();
        $data['lessonsPerMonth'] = $this->getLessonsPerMonthFromMember($data['member']);

        return view('front-end.member.index', $data);
    }

    private function getQrCodeRoute()
    {
        if (env('NGROK')) {
            return 'http://localhost:8080/admin/attendance/register/' . Auth::user()->id;
        }

        return route('admin.attendance.register.husk', ['user' => Auth::user()]);
    }

    private function getLessonsPerMonthFromMember(User $member)
    {
        $attendances = Attendance::where('user_id', $member->id)->where('date', '>', Carbon::now()->startOfYear())->pluck('date');

        $attendances = collect($attendances)->map(function($attendance) {
            return (int)explode('-', $attendance)[1];
        });

        $attendancePerMonth = [];

        $countedValues = array_count_values($attendances->all());

        for ($i = 1; $i <= Carbon::now()->month; $i++) {
            $attendancePerMonth[] = $countedValues[$i] ?? 0;
        }

        return $attendancePerMonth;
    }
}
