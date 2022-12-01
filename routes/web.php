<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [\App\Http\Controllers\HomeController::class,"index"]);



// We Coach Routes

Route::group(["prefix"=>"wecoach"],function (){

    Route::get("/",function (){


        return view("wecoach.home");

    })->name("wecoach");

//    Auth Routes

    Route::get("login",[\App\Http\Controllers\wecoach\Auth\LoginController::class,"showLoginForm"])->name("welogin");
    Route::post("login",[\App\Http\Controllers\wecoach\Auth\LoginController::class,"login"])->name("welogin");

    Route::get("register",[\App\Http\Controllers\wecoach\Auth\RegisterController::class,"showRegistrationForm"])->name("weregister");
    Route::post("register",[\App\Http\Controllers\wecoach\Auth\RegisterController::class,"register"])->name("weregister");
    Route::post("logout",[\App\Http\Controllers\wecoach\Auth\LoginController::class,"logout"])->name("welogout");

    Route::get("password/reset",[\App\Http\Controllers\wecoach\Auth\ForgotPasswordController::class,"showLinkRequestForm"])->name("wepassword.request");
    Route::post("password/reset",[\App\Http\Controllers\wecoach\Auth\ForgotPasswordController::class,"sendResetLinkEmail"])->name("wepassword.email");

//    \Illuminate\Support\Facades\Auth::routes();
});





// Waves Routes

Route::group(["prefix"=>"waves"],function (){

    Route::get("/",function (){
        return view("waves.home");
    })->name("waves");

//    Auth Routes

    Route::get("login",[\App\Http\Controllers\waves\Auth\LoginController::class,"showLoginForm"])->name("login");
    Route::post("login",[\App\Http\Controllers\waves\Auth\LoginController::class,"login"])->name("login");

    Route::get("register",[\App\Http\Controllers\waves\Auth\RegisterController::class,"showRegistrationForm"])->name("register");
    Route::post("register",[\App\Http\Controllers\waves\Auth\RegisterController::class,"register"])->name("register");

    Route::post("logout",[\App\Http\Controllers\waves\Auth\LoginController::class,"logout"])->name("logout");

    Route::get("password/reset",[\App\Http\Controllers\waves\Auth\ForgotPasswordController::class,"showLinkRequestForm"])->name("password.request");
    Route::post("password/reset",[\App\Http\Controllers\waves\Auth\ForgotPasswordController::class,"sendResetLinkEmail"])->name("password.email");

});




// Admin Routes
Route::group(["prefix"=>"admin","middleware"=>["auth","admin"]],function (){

    Route::get("/",[\App\Http\Controllers\admin\DashboardController::class,"index"])->name("dashboard");

//    Manager routes

    Route::group(["prefix"=>"managers"],function(){

        Route::get("/",[\App\Http\Controllers\admin\Manager\ViewController::class,"all"])->name("admin.managers");
        Route::get("/add",[\App\Http\Controllers\admin\Manager\CreateController::class,"showManagerForm"])->name("admin.managerAdd");
        Route::post("/add",[\App\Http\Controllers\admin\Manager\CreateController::class,"addManager"])->name("admin.managerAdd");
        Route::get("/update/{user}",[\App\Http\Controllers\admin\Manager\UpdateController::class,"showUpdateForm"])->name("admin.managerUpdate");
        Route::post("/update/{user}",[\App\Http\Controllers\admin\Manager\UpdateController::class,"updateManager"])->name("admin.managerUpdate");
        Route::get("/delete/{user}",[\App\Http\Controllers\admin\Manager\DeleteController::class,"delete"])->name("admin.managerDelete");
    });

//    Captain routes

    Route::group(["prefix"=>"captains"],function (){

        Route::get("/",[\App\Http\Controllers\admin\Captain\ViewController::class,"all"])->name("admin.captains");
        Route::get("/add",[\App\Http\Controllers\admin\Captain\CreateController::class,"showForm"])->name("admin.captainAdd");
        Route::post("/add",[\App\Http\Controllers\admin\Captain\CreateController::class,"add"])->name("admin.captainAdd");
        Route::get("/update/{user}",[\App\Http\Controllers\admin\Captain\UpdateController::class,"showForm"])->name("admin.captainUpdate");
        Route::post("/update/{user}",[\App\Http\Controllers\admin\Captain\UpdateController::class,"updateCaptain"])->name("admin.captainUpdate");
//        Route::get("/delete/{user}",[\App\Http\Controllers\admin\Captain\DeleteController::class,"delete"])->name("admin.captainDelete");

    });

});
