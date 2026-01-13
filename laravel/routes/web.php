<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome, laravel";
});

Route::get('/home', function () {
   return view('home', ['name' => "xCarey"]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Pogi' ]);
});
