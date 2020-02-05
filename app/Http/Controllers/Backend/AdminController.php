<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin";

        return view('back-end.index', $data);
    }
}
