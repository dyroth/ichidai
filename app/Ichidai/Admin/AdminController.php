<?php

namespace App\Ichidai\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin";

        return view('admin.index', $data);
    }
}
