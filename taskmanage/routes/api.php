<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// user controller routes
Route::post("register", [UserController::class, "register"]);

Route::post("login", [UserController::class, "login"]);

Route::get("logout", [UserController::class, "logout"]);

// sanctum auth middleware routes

Route::middleware('auth:api')->group(function() {

    Route::get("user", [UserController::class, "user"]);
    Route::resource('tasks', TaskController::class);
    Route::patch('tasks/{task}' , [TaskController::class,"isTaskCompleted"]);

});

Route::get('hello', function(){
    return ["name" => "sanjith" , ['sx' => "sy" , "xx" => "yy"]];
});