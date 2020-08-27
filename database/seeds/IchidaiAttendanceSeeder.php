<?php

use App\Ichidai\Attendance\Attendance;
use App\Ichidai\Grade\Grade;
use App\Ichidai\Lesson\Lesson;
use App\Ichidai\User\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class IchidaiAttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attendance::truncate();

        $members = User::all();
        $attendances = [];

        foreach ($members as $member) {
            $lastDate = Carbon::now()->subDay(rand(1, 365));

            for ($i = $member->grade->level; $i >= 1; $i--) {

                $requiredLessons = Grade::where('level', $i)->first()->required_lessons;
                $iterations = rand($requiredLessons, $requiredLessons + 10);

                if ($i == $member->grade->level) {
                    $iterations = rand($requiredLessons-5, $requiredLessons+5);
                }

                for ($j = 1; $j <= $iterations; $j++) {
                    $attendances[] = [
                        'user_id' => $member->id,
                        'lesson_id' => rand(1, Lesson::count()),
                        'grade_id' => $i,
                        'date' => $lastDate->format('Y-m-d'),
                    ];

                    $lastDate = $lastDate->subDay(rand(1, 14));
                }
            }
        }

        Attendance::insert($attendances);
    }
}
