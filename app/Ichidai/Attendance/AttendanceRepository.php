<?php


namespace App\Ichidai\Attendance;


use App\Ichidai\Lesson\Lesson;
use App\Ichidai\User\User;
use Carbon\Carbon;

class AttendanceRepository
{

    public function registerAttendance(User $member, Lesson $lesson)
    {
        Attendance::firstOrCreate(
            [
                'user_id' => $member->id,
                'lesson_id' => $lesson->id,
                'grade_id' => $member->grade_id,
                'date' => Carbon::now()->format('Y-m-d'),
            ]
        );
    }
}
