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
// Route::get('/home', function () {
    // set variable
    // $header = "Hello World!!! I am a header";
    // compact to show the content
    // return view('home', compact("header"));
    
    // associative array
    // $data = [
    //     "header" => "Hello World!!! I am a header"
    // ];
    // return view('home', $data);

// })->name("home");



// -------------------------------------------------------------------------------------------
// home route
Route::get('/', function () {

    // links associative array
    $data = [
            "links" => [
                // link 1
                [
                    "text" => "Home",
                    "href" => "home"
                ],

                // link 2
                [
                    "text" => "About",
                    "href" => "about"
                ],

                // link 3
                [
                    "text" => "Support",
                    "href" => "support"
                ],
            ],
            "home_content" => "Home page..."
    ];
    return view('home', $data);
})->name("home");



// about route
Route::get('/about', function () {
    $data = [
        "about_content" => "About page..."
];
    return view('about', $data );
})->name("about");



// support route
Route::get('/support', function () {
    $data = [
        "support_content" => "Support page..."
];
    return view('support', $data);
})->name("support");
