<?php

namespace App\Ichidai\Frontend;

use App\Http\Controllers\Controller;
use App\Ichidai\coach\Coach;
use App\Ichidai\coach\Lesson;
use App\Ichidai\LessonTime\LessonTime;
use App\Ichidai\Settings\Setting;

class HomeController extends Controller
{

    public function index()
    {
        $intro = Setting::where(['name' => 'intro'])->first()->properties ?? null;
        $generalInfo = Setting::where(['name' => 'general_info'])->first()->properties ?? null;
        $coaches = Coach::all();
        $lessons = Lesson::all();
        $lessonTimes = LessonTime::all();


        return view('front-end.index', compact('intro', 'coaches', 'lessons', 'lessonTimes', 'generalInfo'));
    }
}
