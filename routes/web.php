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

// home route
Route::get('/home', function () {
    // set variable
    $header = "Hello World!!! I am a header";
    // compact to show the content
    return view('home', compact("header"));
    
    // associative array
    // $data = [
    //     "header" => "Hello World!!! I am a header"
    // ];
    // return view('home', $data);

})->name("home");
?> 
