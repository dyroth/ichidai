<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoachesController extends Controller
{
    public function index()
    {
        $data['title'] = "Lesgevers";

        return view('back-end.classes.index', $data);
    }
}
