<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function welcome()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('id')
            ->get();

        return view('welcome', ['tasks' => $tasks]);
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date', 'asc')
            ->orderBy('id')
            ->get();

        return view('tasks', ['tasks' => $tasks]);
    }
}