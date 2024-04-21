<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homePage/homePage2');
});

Route::prefix("home")->group(function (){

    Route::get("login",[\App\Http\Controllers\homePage\loginController::class,"loginPage"])->name("home.login");
    Route::post("loginPost",[\App\Http\Controllers\homePage\loginController::class,"store"])->name("home.loginPost");
    Route::get("register",[\App\Http\Controllers\homePage\registerController::class,"registerPage"])->name("home.register");
    Route::post("registerPost",[\App\Http\Controllers\homePage\registerController::class,"store"])->name("home.registerPost");

});

Route::prefix("task")->group(function (){

    Route::get("taskGet",[\App\Http\Controllers\tasksDirectory\taskController::class,"taskPage"])->name("task.taskGet");
    Route::post('taskPost',[\App\Http\Controllers\tasksDirectory\taskController::class,"store"])->name("task.taskPost");


});
