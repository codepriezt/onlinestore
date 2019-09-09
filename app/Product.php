<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
        {
            return money_format('$%i' ,$this->price/100 );
        }

    protected $fillable =[
        'name',
    ];


    public  function scopeFeatureProduct($query)
    {
        return $query->inRandomOrder()->take(4);
    }

    public function scopeProductList($query)
    {
        return $query->inRandomOrder()->take(20);
    }
    
}
