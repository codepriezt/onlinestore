<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use  App\classes\PostRequest;
use App\User;

class AuthenticateController extends Controller
{
    public function userSignUp(Request $request)
    {   
       
        $request = new PostRequest();
        $validate = $request->rules();
        $user = $validate->createNew($request);

        if(!$user)
        {
            return back()->with('sorry unable to complete process');
        }

        Auth::loginUsingId($user->id);

        if($request->type == 'customer')
        {
            return redirect()->route('dashboard')->with('success', 'Thank you for registering on Cp OnlineStore ...');
        }

        if($request->type == 'vendor')
        {
            return redirect()->route('register2')->with('info', 'You are a step away from being a vendor');
        }
    }


    public function login(Request $request)
    {
        $this->validate($request ,[
            'username'=>['required' , 'string' ,'max:225' , 'exists:user ,username'],
            'password'=>['required','string'],
        ]);

        $Auth_valid = Auth::attempt(['username'=>$request->username, 'password'=>$request->password , 'status'=>'active']);
                
        if(!$Auth_valid){
            return back()->with('login-error' , 'invalid credentials, please check yourself') ;  
        }
             return redirect()->route('dashboard')->with('success' , 'Welcome '.$request->username);
    }
}
