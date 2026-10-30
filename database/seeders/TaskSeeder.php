<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        Task::create([
            'title' => 'Finish Assignment',
            'status' => 'pending',
            'task_date' => today()
        ]);

        Task::create([
            'title' => 'Study Laravel',
            'status' => 'completed',
            'task_date' => today()
        ]);

        Task::create([
            'title' => 'Review Notes',
            'status' => 'pending',
            'task_date' => today()
        ]);

        Task::create([
            'title' => 'Research Project',
            'status' => 'pending',
            'task_date' => today()->addDay()
        ]);

        Task::create([
            'title' => 'Exercise',
            'status' => 'completed',
            'task_date' => today()->addDay()
        ]);

        Task::create([
            'title' => 'Database Practice',
            'status' => 'completed',
            'task_date' => today()->subDay()
        ]);

        Task::create([
            'title' => 'Prepare Presentation',
            'status' => 'pending',
            'task_date' => today()->subDay()
        ]);

        Task::create([
            'title' => 'Read Documentation',
            'status' => 'pending',
            'task_date' => today()->addDays(2)
        ]);

        User::create([
            'username' => 'demo_user',
            'full_name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com'
        ]);
    }
}
