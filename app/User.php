<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'username','password','photo', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function createNew($request)
    {
                return self::create([
                    'firstName'=>$request->firstName,
                    'lastName' => $request->lastName,
                    'email'=>$request->email,
                    'username'=>$request->username,
                    'password'=>$request->password,
                    'photo'=> $url,
                    'type'=> $request->type
                ]);
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function isCustomer()
    {
        return $this->type == 'customer';
    }

    public function isVendor()
    {
        return $this->type == 'vendor';
    }

    public function isAdminstrator()
    {
        return $this->type == 'adminstrator';
    }
}
    