<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [\App\Http\Controllers\HomeController::class,"index"])->name("home");



// We Coach Routes

Route::group(["prefix"=>"wecoach"],function (){

    Route::get("/",[\App\Http\Controllers\wecoach\PagesController::class,"index"])->name("wecoach");
    Route::get("/products",[\App\Http\Controllers\wecoach\PagesController::class,"products"])->name("wecoach.products");

//    Auth Routes

    Route::get("login",[\App\Http\Controllers\wecoach\Auth\LoginController::class,"showLoginForm"])->name("welogin");
    Route::post("login",[\App\Http\Controllers\wecoach\Auth\LoginController::class,"login"])->name("welogin");

    Route::get("register",[\App\Http\Controllers\wecoach\Auth\RegisterController::class,"showRegistrationForm"])->name("weregister");
    Route::post("register",[\App\Http\Controllers\wecoach\Auth\RegisterController::class,"register"])->name("weregister");
    Route::post("logout",[\App\Http\Controllers\wecoach\Auth\LoginController::class,"logout"])->name("welogout");

    Route::get("password/reset",[\App\Http\Controllers\wecoach\Auth\ForgotPasswordController::class,"showLinkRequestForm"])->name("wepassword.request");
    Route::post("password/reset",[\App\Http\Controllers\wecoach\Auth\ForgotPasswordController::class,"sendResetLinkEmail"])->name("wepassword.email");

    Route::group(["prefix"=>"profile"],function (){
        \App\Http\Controllers\wecoach\Intern\InternRoutes::routes();
    });

//    \Illuminate\Support\Facades\Auth::routes();
});


// Waves Routes

Route::group(["prefix"=>"waves"],function (){

    Route::get("/",[\App\Http\Controllers\waves\PagesController::class,"index"])->name("waves");
    Route::get("/products",[\App\Http\Controllers\waves\PagesController::class,"products"])->name("waves.products");


//    Auth Routes

    Route::get("login",[\App\Http\Controllers\waves\Auth\LoginController::class,"showLoginForm"])->name("login");
    Route::post("login",[\App\Http\Controllers\waves\Auth\LoginController::class,"login"])->name("login");

    Route::get("register",[\App\Http\Controllers\waves\Auth\RegisterController::class,"showRegistrationForm"])->name("register");
    Route::post("register",[\App\Http\Controllers\waves\Auth\RegisterController::class,"register"])->name("register");

    Route::post("logout",[\App\Http\Controllers\waves\Auth\LoginController::class,"logout"])->name("logout");

    Route::get("password/reset",[\App\Http\Controllers\waves\Auth\ForgotPasswordController::class,"showLinkRequestForm"])->name("password.request");
    Route::post("password/reset",[\App\Http\Controllers\waves\Auth\ForgotPasswordController::class,"sendResetLinkEmail"])->name("password.email");
//    \Illuminate\Support\Facades\Auth::routes();


//    Route::group(["prefix"=>"profile"],function (){
//        \App\Http\Controllers\Intern\InternRoutes::routes();
//    });
});



