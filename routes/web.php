<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=> '' ], function(){
    Route::get('' ,'Main\PageController@landingPage')->name('home');
    Route::get('/shop/default-view' ,'Main\PageController@shopDefaultView')->name('category_default');
    Route::get('/shop/flex-view' ,'Main\PageController@shopFlexView')->name('category_flex');
    Route::get('/shop/full-width-view' ,'Main\PageController@shopFullWidthView')->name('category_fullwidth');
    Route::get('/dashboard' , 'Main\PageController@dashboard')->name('dashboard');

    //product
    Route::get('/product/{slug}' , 'Main\PageController@singleProductView')->name('singleProduct');

     //cart view
     Route::get('/cart' , 'Main\PageController@cartView')->name('shoppingCart');
     Route::post('/cart/add' , 'CartController@store')->name('cart.add');
     Route::delete('/cart/{product}' , 'CartController@destroy')->name('cart.delete');
});


Route::group(['prefix'=>'admin'] ,function(){
    Route::get('' , 'Admin\PageController@signin')->name('signin');
    Route::get('/signup' , 'Admin\PageController@signup')->name('signup');
    Route::get('/forget' , 'Admin\PageController@forgetPassword')->name('forget-password');
    Route::get('/dashboard' , 'Admin\PageController@mainDashboard')->name('main-dashboard');
    Route::get('/ecommerce-dashboard' , 'Admin\PageController@ecommerceDashboard')->name('ecommerce-dashboard');

    //Department
    Route::get('/add-department' , 'Admin\PageController@addDepartment')->name('add-department');
    Route::get('/departments' , 'Admin\PageController@viewDepartment')->name('all_department');
    Route::post('/department/add' ,'DepartmentController@createDepartment')->name('add_department');
    Route::post('/department/delete/{id}' , 'DepartmentController@deleteDepartment')->name('delete_department');


   

});

Route::get('/logout' , 'Admin\AuthenicateController@logout')->name('logout');
