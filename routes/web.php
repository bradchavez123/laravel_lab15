<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return ('Brandon Chavez about page');
});

Route::get('/contact', function () {
    return view('contact');
});