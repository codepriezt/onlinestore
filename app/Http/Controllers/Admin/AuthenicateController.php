<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthenicateController extends Controller
{
    public function logout()
    {
        $type = Auth::user()->type;

        Auth::logout();
        if($type == 'adminstator'){
            return redirect()->route('signin');
        }
    }
}
