<?php

use Illuminate\Support\Facades\Route;


Route::get("/",[\App\Http\Controllers\Captain\ProfileController::class,"index"])->name("captain");

Route::group(["prefix"=>"profile"],function (){
    Route::get("/",[\App\Http\Controllers\Captain\ProfileController::class,"profileEdit"])->name("captain.profile");
    Route::post("/{user}",[\App\Http\Controllers\Captain\ProfileController::class,"updateCaptain"])->name("captain.profileEdit");
});

Route::group(["prefix"=>"schedule"],function (){

    Route::get("/",[\App\Http\Controllers\Captain\ScheduleController::class,"form"])->name("captain.schedule");
    Route::post("/",[\App\Http\Controllers\Captain\ScheduleController::class,"addSchedule"])->name("captain.schedule");

});
