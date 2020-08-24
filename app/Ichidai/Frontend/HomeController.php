<?php

namespace App\Ichidai\Frontend;

use App\Http\Controllers\Controller;
use App\Ichidai\Coach\Coach;
use App\Ichidai\Lesson\Lesson;
use App\Ichidai\LessonTime\LessonTime;
use App\Ichidai\Setting\Setting;

class HomeController extends Controller
{

    public function index()
    {
        $intro = Setting::where(['name' => 'intro'])->first()->properties ?? null;
        $generalInfo = Setting::where(['name' => 'general_info'])->first()->properties ?? null;
        $coaches = Coach::all();
        $lessons = Lesson::all();
        $lessonTimes = LessonTime::all();

        $theme = Setting::where(['name' => 'active_theme'])->first()->properties ?? 'iron-muscle';

        return view('front-end.' . $theme . '.index', compact('intro', 'coaches', 'lessons', 'lessonTimes', 'generalInfo'));
    }
}
