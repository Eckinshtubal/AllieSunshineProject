<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home/index');
});

Route::get('aboutus', function (){
    return view('about us/index');
});

Route::get('getinvolved', function (){
    return view('get involved/index');
});

Route::get('shop', function (){
    return view('shop/index');
});

Route::get('whatsnew', function (){
    return view('whats new/index');
});

Route::get('gallery', function (){
    return view('gallery/index');
});

Route::get('contact', function (){
    return view('contact/index');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
