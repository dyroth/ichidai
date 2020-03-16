<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassesController extends Controller
{
    public function index()
    {
        $data['title'] = "Lesgevers";

        return view('back-end.index', $data);
    }
}
