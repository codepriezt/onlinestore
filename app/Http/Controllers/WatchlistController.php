<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class WatchlistController extends Controller
{
   
    

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addToCart($id)
     {   
        $item = Cart::instance('watchlist')->get($id);

        Cart::instance('watchlist')->remove($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem , $rowId) use ($id)
        {
            return $rowId === $id;
        });

        if($duplicates->isNotEmpty()){
            return back()->with('info' , 'Item already added to Cart');
        }

        Cart::instance('default')->add($item->id ,$item->name , 1 , $item->price , $item->weight)
        ->associate('App\Product');

        return back()->with('success' , "Item has been save to watchlist");
    }

    

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('watchlist')->remove($id);

        return back()->with('success' , 'Item has been removed');
    }
}
