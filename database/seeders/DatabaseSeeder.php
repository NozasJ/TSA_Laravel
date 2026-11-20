<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $today = today();

        $tasks = [
            [
                'title' => 'Review Laravel routes',
                'status' => 'completed',
                'task_date' => $today->copy()->subDay()->toDateString(),
            ],
            [
                'title' => 'Prepare project requirements',
                'status' => 'pending',
                'task_date' => $today->copy()->subDay()->toDateString(),
            ],
            [
                'title' => 'Create database migrations',
                'status' => 'pending',
                'task_date' => $today->toDateString(),
            ],
            [
                'title' => 'Create Eloquent models',
                'status' => 'pending',
                'task_date' => $today->toDateString(),
            ],
            [
                'title' => 'Build the Welcome page',
                'status' => 'pending',
                'task_date' => $today->toDateString(),
            ],
            [
                'title' => 'Build the Profile page',
                'status' => 'pending',
                'task_date' => $today->copy()->addDay()->toDateString(),
            ],
            [
                'title' => 'Style the application',
                'status' => 'pending',
                'task_date' => $today->copy()->addDay()->toDateString(),
            ],
            [
                'title' => 'Test all navigation links',
                'status' => 'pending',
                'task_date' => $today->copy()->addDay()->toDateString(),
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }

        User::create([
            'username' => 'johnsazon',
            'full_name' => 'John Benedict I. Sazon',
            'email' => 'john@example.com',
        ]);
    }
}