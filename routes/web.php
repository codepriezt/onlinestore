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
    Route::get('/home' ,'Main\PageController@home')->name('home');
    Route::get('/category/default-view' ,'Main\PageController@categoryDefaultView')->name('category_default');
    Route::get('/category/flex-view' ,'Main\PageController@categoryFlexView')->name('category_flex');
    Route::get('/category/full-width-view' ,'Main\PageController@categoryFullWidthView')->name('category_fullwidth');
    Route::get('/dashboard' , 'Main\PageController@dashboard')->name('dashboard');
});


Route::group(['prefix'=>'admin'] ,function(){
    Route::get('/dashboard' , 'Admin\PageController@mainDashboard')->name('dashboard');
});
