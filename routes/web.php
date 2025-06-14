<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('front.index');
});
Route::get('/about-us', function () {
    return view('front.about');
});

Route::get('/contact-us', function () {
    return view('front.contact');
});
