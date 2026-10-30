<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class PageController extends Controller
{
    public function welcome()
    {
        $tasks = Task::whereDate(
            'task_date',
            today()
        )->get();

        return view('welcome', compact('tasks'));
    }

    public function tasks()
    {
        $tasks = Task::orderBy(
            'task_date',
            'asc'
        )->get();

        return view('task_list', compact('tasks'));
    }

    public function profile()
    {
        $user = User::first();

        return view('profile', compact('user'));
    }

    public function about()
    {
        return view('about');
    }
}