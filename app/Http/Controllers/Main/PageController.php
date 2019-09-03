<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{   

    //home view page
    public function home()
    {
        return view('main.home.index');
    }


    //category default view page
    public function categoryDefaultview()
    {
        return view('main.category.default.index');
    }

    
    //category flexview page
    public function categoryFlexView()
    {
        return view('main.category.flexview.index');
    }


    //category full width page
    public function categoryFullWidthView()
    {
        return view('main.category.fullwiidth.index');
    }

    //dashboard view
    public function dashboard()
    {
        return view('main.dashboard.index');
    }

    
    //product default view page

}
