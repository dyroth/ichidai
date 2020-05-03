<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Ichidai\coach\Coach;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $coaches = Coach::all();

        return view('front-end.index', compact('coaches'));
    }
}
