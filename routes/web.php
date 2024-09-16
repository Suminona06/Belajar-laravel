<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Azis']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'BlogPage']);
});

Route::get('/contact', function () {
    return view('contact');
});