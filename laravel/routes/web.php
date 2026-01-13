<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [welcomeController::class, 'index']);

Route::get('/home', function () {
   return view('home', ['name' => "xCarey"]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Pogi' ]);
});
