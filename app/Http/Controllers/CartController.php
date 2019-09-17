<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function watchlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('watchlist')->search(function ($cartItem , $rowId) use ($id)
        {
            return $rowId === $id;
        });

        if($duplicates->isNotEmpty()){
            return back()->with('info' , 'Item already added to watchlist');
        }

        Cart::instance('watchlist')->add($item->id ,$item->name , 1 , $item->price , $item->weight)
        ->associate('App\Product');

        return back()->with('success' , "Item has been save to watchlist");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $duplicates = Cart::search(function ($cartItem , $rowId) use ($request)
            {
                return $cartItem->id === $request->id;
            });

            if($duplicates->isNotEmpty()){
                return back()->with('info' , 'Item already in your cart');
            }

        Cart::add($request->id ,$request->name , 1 , $request->price , $request->weight)
        ->associate('App\Product');

        return back()->with('success' , "Product successfully added to cart");
    }



    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success' , 'Item has been removed');
    }
}
