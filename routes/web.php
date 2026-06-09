<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::view("/", "welcome");

Route::view("/about", "about");

Route::view("/contact", "contact");

Route::view("/welcome", "welcome");

Route::view("/pass-data", "index", ["greeting" => "Hello there!", "person" => request("name") ]);

Route::view("/register", "register");

Route::post("/register", [UserController::class, "store_register"]);
Route::view("/dashboard", "dashboard");