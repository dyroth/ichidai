<?php

namespace App\Ichidai\Member;


use App\Http\Requests\CreateEditMember;
use App\Ichidai\Grade\GradeRepository;
use App\Ichidai\User\User;
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

    public function memberIndex()
    {
        $data['route'] = route('admin.attendance.register.husk', ['user' => Auth::user()]);

        if (env('NGROK')) {
            $data['route'] = 'http://localhost:8080/admin/attendance/register/' . Auth::user()->id;
        }

        return view('front-end.member.index', $data);
    }
}
