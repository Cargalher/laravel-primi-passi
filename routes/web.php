<?php

use Illuminate\Support\Facades\Route;

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
    // pass variable to the view with the function compact
    // $name = "Carmen";
    // return view('home', compact('name'));

    $data = [
        'name'=> 'Carmen',
        'lastname' =>'Galán'
    ];
    return view('home', $data);
});
Route::get('/about', function () {  //new route created 
    return 'About me';
});
