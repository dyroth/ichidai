<?php

namespace App\Ichidai\Frontend;

use App\Http\Controllers\Controller;
use App\Ichidai\coach\Coach;
use App\Ichidai\coach\Lesson;
use App\Ichidai\coach\LessonTime;
use App\Ichidai\Settings\Setting;

class HomeController extends Controller
{

    public function index()
    {
        $intro = Setting::where(['name' => 'intro'])->first()->properties;
        $coaches = Coach::all();
        $lessons = Lesson::all();
        $lessonTimes = LessonTime::all();

        return view('front-end.index', compact('intro', 'coaches', 'lessons', 'lessonTimes'));
    }
}
