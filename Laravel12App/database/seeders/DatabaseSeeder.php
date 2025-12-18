<?php

namespace Database\Seeders;

use App\Models\Task\Task;
use App\Models\User;
use Database\Factories\Task\TaskFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::factory()->count(10)->create();
        Task::factory()->count(10)->create();
    }
}
