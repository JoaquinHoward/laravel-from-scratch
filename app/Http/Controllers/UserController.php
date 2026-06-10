<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;            
class UserController extends Controller
{
    public function store_register(Request $request)
    {
        $filter_data = $request->validate([
            "name" => "required|string|max:24",
            "email" => "required|string|max:32|unique:users",
            "password" => "required|string|min:8"
        ]);

        $user = User::create([
            "name" => $filter_data["name"],
            "email" => $filter_data["email"],
            "password" => Hash::make($filter_data["password"])
        ]);
        Auth::login($user);
        return redirect("dashboard");
    }
}
