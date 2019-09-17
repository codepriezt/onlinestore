<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderAddress;

class CheckoutController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request,[
                    'first_name'=>'required',
                    'last_name'=>'required',
                    'email'=>'required',
                    'address'=>'required',
                    'city'=>'required',
                    'state'=>'required',
                    'country'=>'required',
                    'phone'=>'required',
                    'postal_code'=>'required',



                    
                    
            ]);

            $checkout = OrderAddress::create([
                    'first_name'=>'$request->first_name',
                    'last_name'=>'$request->last_name',
                    'email'=>'$request->email',
                    'address'=>'$request->address',
                    'city'=>'$request->city',
                    'state'=>'$request->state',
                    'country'=>'$request->country',
                    'phone'=>'$request->phone',
                    'postal_code'=>'$request->postal_code',
                    
            ]);

            if(!$checkout){
                return back()->with('error' , 'unable to complete process..');
            }
                return redirect()->route('order.index')->with('success' , 'Address sucessfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
