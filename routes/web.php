<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [\App\Http\Controllers\HomeController::class,"index"])->name("home");



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
Route::group(["prefix"=>"admin","middleware"=>["auth","isAdmin"]],function (){

    Route::get("/dashboard",[\App\Http\Controllers\admin\DashboardController::class,"index"])->name("dashboard");

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
        Route::get("/delete/{user}",[\App\Http\Controllers\admin\Captain\DeleteController::class,"delete"])->name("admin.captainDelete");

    });

//    Intern Routes

    Route::group(["prefix"=>"interns"],function (){

        Route::get("/",[\App\Http\Controllers\admin\Intern\ViewController::class,"all"])->name("admin.interns");
        Route::get("/add",[\App\Http\Controllers\admin\Intern\CreateController::class,"showForm"])->name("admin.internAdd");
        Route::post("/add",[\App\Http\Controllers\admin\Intern\CreateController::class,"add"])->name("admin.internAdd");
        Route::get("/update/{user}",[\App\Http\Controllers\admin\Intern\UpdateController::class,"showForm"])->name("admin.internUpdate");
        Route::post("/update/{user}",[\App\Http\Controllers\admin\Intern\UpdateController::class,"updateIntern"])->name("admin.internUpdate");
        Route::get("/delete/{user}",[\App\Http\Controllers\admin\Intern\DeleteController::class,"delete"])->name("admin.internDelete");

    });

//    Branch Routes
    Route::group(["prefix"=>"branches"],function (){

        Route::get("/",[\App\Http\Controllers\admin\Branch\ViewController::class,"all"])->name("admin.branches");
        Route::get("/add",[\App\Http\Controllers\admin\Branch\CreateController::class,"showForm"])->name("admin.branchAdd");
        Route::post("/add",[\App\Http\Controllers\admin\Branch\CreateController::class,"add"])->name("admin.branchAdd");
        Route::get("/update/{branch}",[\App\Http\Controllers\admin\Branch\UpdateController::class,"showForm"])->name("admin.branchUpdate");
        Route::post("/update/{branch}",[\App\Http\Controllers\admin\Branch\UpdateController::class,"updateBranch"])->name("admin.branchUpdate");
        Route::get("/delete/{branch}",[\App\Http\Controllers\admin\Branch\DeleteController::class,"delete"])->name("admin.branchDelete");

    });
    //    Subscription Routes
    Route::group(["prefix"=>"subscriptions"],function (){

        Route::get("/",[\App\Http\Controllers\admin\Subscription\ViewController::class,"all"])->name("admin.subscriptions");
        Route::get("/add",[\App\Http\Controllers\admin\Subscription\CreateController::class,"showForm"])->name("admin.subsAdd");
        Route::post("/add",[\App\Http\Controllers\admin\Subscription\CreateController::class,"add"])->name("admin.subsAdd");
        Route::get("/update/{subs}",[\App\Http\Controllers\admin\Subscription\UpdateController::class,"showForm"])->name("admin.subsUpdate");
        Route::post("/update/{subs}",[\App\Http\Controllers\admin\Subscription\UpdateController::class,"updateSubscription"])->name("admin.subsUpdate");
        Route::get("/delete/{subs}",[\App\Http\Controllers\admin\Subscription\DeleteController::class,"delete"])->name("admin.subsDelete");

    });

//    Packages Routes
    Route::group(["prefix"=>"packages"],function () {

        Route::get("/",[\App\Http\Controllers\admin\Package\ViewController::class,"all"])->name("admin.packages");
        Route::get("/add",[\App\Http\Controllers\admin\Package\CreateController::class,"showForm"])->name("admin.packageAdd");
        Route::post("/add",[\App\Http\Controllers\admin\Package\CreateController::class,"add"])->name("admin.packageAdd");
        Route::get("/update/{package}",[\App\Http\Controllers\admin\Package\UpdateController::class,"showForm"])->name("admin.packageUpdate");
        Route::post("/update/{package}",[\App\Http\Controllers\admin\Package\UpdateController::class,"updatePackage"])->name("admin.packageUpdate");
        Route::get("/delete/{package}",[\App\Http\Controllers\admin\Package\DeleteController::class,"delete"])->name("admin.packageDelete");

//        Jquery Routes

        Route::get("/jquery-get-branch-subs",[\App\Http\Controllers\admin\Package\CreateController::class,"getSubsOfBranch"])->name("jq.getBranchSubs");

    });

    //    Packages Routes
    Route::group(["prefix"=>"promocodes"],function () {

        Route::get("/",[\App\Http\Controllers\admin\PromoCode\ViewController::class,"all"])->name("admin.promocodes");
        Route::get("/add",[\App\Http\Controllers\admin\PromoCode\CreateController::class,"showForm"])->name("admin.promoAdd");
        Route::post("/add",[\App\Http\Controllers\admin\PromoCode\CreateController::class,"add"])->name("admin.promoAdd");
        Route::get("/update/{promo}",[\App\Http\Controllers\admin\PromoCode\UpdateController::class,"showForm"])->name("admin.promoUpdate");
        Route::post("/update/{promo}",[\App\Http\Controllers\admin\PromoCode\UpdateController::class,"updatePackage"])->name("admin.promoUpdate");
        Route::get("/delete/{promo}",[\App\Http\Controllers\admin\PromoCode\DeleteController::class,"delete"])->name("admin.promoDelete");


    });


});



// Manager Routes

Route::group(["prefix"=>"manager","middleware"=>["auth"]],function (){
    Route::get("/profile",[\App\Http\Controllers\Manager\ProfileController::class,"index"])->name("manager.profile");
});
