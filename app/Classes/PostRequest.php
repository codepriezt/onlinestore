<?php

namespace App\Classes;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\User;

class PostRequest extends Request
{

        public function rules()
        {
             return [
                'firstname' => ['required', 'string', 'max:255'],
                'lastname'=>['required' , 'string' , 'max:255'],
                'username'=>['required' , 'string' ,'max:225'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'phone'=>['required' ,'string' , 'max:15'],
                'photo'=> ['nullable|file|mimes:jpeg,jpg,png|max:2048'],
                'type'=> ['required']
             ];

                if($data['photo']){
                    Cloudder::upload($data['photo']->getRealPath(), null);
                    $upload = Cloudder::getResult();
                    $url = $upload["url"];
                }
           
        }

        

        


    
        

















    
}























?>
