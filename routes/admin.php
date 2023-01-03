<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix"=>"dashboard"],function (){

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

//    promo-codes Routes
    Route::group(["prefix"=>"promocodes"],function () {

        Route::get("/",[\App\Http\Controllers\admin\PromoCode\ViewController::class,"all"])->name("admin.promocodes");
        Route::get("/add",[\App\Http\Controllers\admin\PromoCode\CreateController::class,"showForm"])->name("admin.promoAdd");
        Route::post("/add",[\App\Http\Controllers\admin\PromoCode\CreateController::class,"add"])->name("admin.promoAdd");
        Route::get("/update/{promo}",[\App\Http\Controllers\admin\PromoCode\UpdateController::class,"showForm"])->name("admin.promoUpdate");
        Route::post("/update/{promo}",[\App\Http\Controllers\admin\PromoCode\UpdateController::class,"updatePackage"])->name("admin.promoUpdate");
        Route::get("/delete/{promo}",[\App\Http\Controllers\admin\PromoCode\DeleteController::class,"delete"])->name("admin.promoDelete");


    });

//    Incomes Routes
    Route::group(["prefix"=>"incomes"],function(){

        Route::get("/",[\App\Http\Controllers\admin\Income\ViewController::class,"all"])->name("admin.incomes");
        Route::get("/add",[\App\Http\Controllers\admin\Income\CreateController::class,"showForm"])->name("admin.incomeAdd");
        Route::post("/add",[\App\Http\Controllers\admin\Income\CreateController::class,"add"])->name("admin.incomeAdd");
        Route::get("/update/{income}",[\App\Http\Controllers\admin\Income\UpdateController::class,"showForm"])->name("admin.incomeUpdate");
        Route::post("/update/{income}",[\App\Http\Controllers\admin\Income\UpdateController::class,"updateIncome"])->name("admin.incomeUpdate");
        Route::get("/delete/{income}",[\App\Http\Controllers\admin\Income\DeleteController::class,"delete"])->name("admin.incomeDelete");



    });


    Route::group(["prefix"=>"outcomes"],function(){

        Route::get("/",[\App\Http\Controllers\admin\Outcome\ViewController::class,"all"])->name("admin.outcomes");
        Route::get("/add",[\App\Http\Controllers\admin\Outcome\CreateController::class,"showForm"])->name("admin.outcomeAdd");
        Route::post("/add",[\App\Http\Controllers\admin\Outcome\CreateController::class,"add"])->name("admin.outcomeAdd");
        Route::get("/update/{outcome}",[\App\Http\Controllers\admin\Outcome\UpdateController::class,"showForm"])->name("admin.outcomeUpdate");
        Route::post("/update/{outcome}",[\App\Http\Controllers\admin\Outcome\UpdateController::class,"updateOutcome"])->name("admin.outcomeUpdate");
        Route::get("/delete/{outcome}",[\App\Http\Controllers\admin\Outcome\DeleteController::class,"delete"])->name("admin.outcomeDelete");



    });


    Route::group(["prefix"=>"ajax"],function (){

        Route::get("acceptManager",[\App\Http\Controllers\admin\AjaxController::class,"acceptManager"])->name("ajax.acceptManager");
        Route::get("rejectManager",[\App\Http\Controllers\admin\AjaxController::class,"rejectManager"])->name("ajax.rejectManager");

        Route::get("acceptCaptain",[\App\Http\Controllers\admin\AjaxController::class,"acceptCaptain"])->name("ajax.acceptCaptain");
        Route::get("rejectCaptain",[\App\Http\Controllers\admin\AjaxController::class,"rejectCaptain"])->name("ajax.rejectCaptain");


    });

    Route::group(['prefix'=>"announcements"],function (){
        Route::get("/add",[\App\Http\Controllers\admin\Announcement\CreateController::class,"form"])->name("admin.announcement");
        Route::post("/add",[\App\Http\Controllers\admin\Announcement\CreateController::class,"createsAnnouncement"])->name("admin.announcement");
    });

});





