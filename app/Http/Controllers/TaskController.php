<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Resources\TaskResource;
use App\Http\Resources\TaskCollection;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.tasks')->with('tasks', new TaskCollection(Task::all()));
    }

    public function show(Request $request, Task $task)
    {
        return view('tasks.task')->with('task', new TaskResource($task));
    }
}
