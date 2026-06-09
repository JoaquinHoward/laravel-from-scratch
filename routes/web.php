<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get("/", function () {
    $ideas = session()->get("ideas", []);
    return view("index", ["ideas" => $ideas]);
});

Route::post("/idea", function () {
    $idea = request("idea");
    session()->push("ideas", $idea);    
    return redirect("/");
});

Route::get("/delete-ideas", function () {
    session()->forget("ideas");
    return redirect("/");
});