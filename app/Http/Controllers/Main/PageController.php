<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Cart;

class PageController extends Controller
{   

    //landing view page
    public function landingPage()
    {   
        $product = Product::FeatureProduct()->get();
        
        return view('main.home.index')->with([

            'product'=>$product,
            
        ]);
    }


    //category default view page
    public function shopDefaultview()

    {   
        $product = Product::ProductList()->get();
        return view('main.shop.default.index')->with('product' , $product);
    }

    
    //category flexview page
    public function shopFlexView()
    {
        $product = Product::ProductList()->get();
        return view('main.shop.flexview.index')->with('product' ,$product);
    }


    //category full width page
    public function shopFullWidthView()
    {
        $product = Product::ProductList()->get();
        return view('main.shop.fullwiidth.index')->with('product' ,$product);
    }

    //dashboard view
    public function dashboard()
    {
        return view('main.dashboard.index');
    }

    
    //product single view page
    public function singleProductView($slug)
    {   
        $product = Product::where('slug' , $slug)->firstorFail();
        $featureProduct = Product::where('slug' , '!=' , $slug)->FeatureProduct()->get();
        return view('main.product.index')->with([
            'product' => $product,
            'featureProduct'=> $featureProduct
        ]);
    }


    //cart page view 
    public function cartView()
    {
        return view('main.cart.index');
    }

    
    //checkout view
    public function checkout()
    {
        return view('main.checkout.index');
    }

    // order
    public function order()
    {
        return view('main.order.index');
    }

    
}
