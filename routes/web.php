<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;



Route::view("/dashboard", "dashboard");
Route::post("/add_task", [TaskController::class, "add_task"]);


