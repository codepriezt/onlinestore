<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function mainDashboard()
    {
        return view('admin.dashboard.main.index');
    }
}
