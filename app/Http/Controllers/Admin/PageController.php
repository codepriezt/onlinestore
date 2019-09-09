<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;

class PageController extends Controller
{

    //dashboard
    public function mainDashboard()
    {
        return view('admin.dashboard.main.index');
    }

    public function ecommerceDashboard()
    {
        return view('admin.dashboard.ecommerce.index');
    }


    //authenicate page
    public function signup()
    {
        return view('admin.authenicate.signup');
    }

    public function signin()
    {
        return view('admin.authenicate.signin');
    }

    public function forgetPassword()
    {
        return view('admin.authenicate.forget-password');
    }


    //department page
    public function addDepartment()
    {
        return view('admin.department.add');
    }

    public function viewDepartment()
    {
        $department = Department::all();
        return view('admin.department.view-all' , ['department'=>$department]);
    }
}
