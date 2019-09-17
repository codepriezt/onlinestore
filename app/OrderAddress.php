<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
    public $table = 'order_address';

    protected $fillable = [
        'first_name' , 'last_name' , 'email' , 'address' , 'city' ,'state' ,'country' ,'phone' ,'postal_code'
    ];
}
