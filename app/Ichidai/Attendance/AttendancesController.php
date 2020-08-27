<?php

namespace App\Ichidai\Attendance;

use App\Http\Controllers\Controller;
use App\Ichidai\Lesson\Lesson;
use App\Ichidai\User\User;

class AttendancesController extends Controller
{

    /**
     * @var AttendanceRepository
     */
    private $attendanceRepository;

    public function __construct(AttendanceRepository $attendanceRepository)
    {
        $this->attendanceRepository = $attendanceRepository;
    }

    public function write(User $user, Lesson $lesson)
    {
        $this->attendanceRepository->registerAttendance($user, $lesson);

        return redirect(route('admin.lessons.open', compact('lesson')));
    }
}
