<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

Route::get('/', [HomeController::class, 'index'])
    ->name('front.home');

    Route::get('/about',function(){
        return view("front.about.about");
    })->name("about.about");