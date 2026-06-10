<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function add_task(Request $request)
    {
        $filtered_data = $request->validate([
            "title" => "required|string|max:24",
            "description" => "nullable|string|max:255",
        ]);

        $task = Task::create([
            "title" => $filtered_data["title"],
            "description" => $filtered_data["description"]
        ]);

        return redirect("dashboard");
    }

    public function show_task()
    {
        
    }
}
