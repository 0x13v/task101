<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Account;
use App\Models\Project;
use App\Models\Job;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::factory()
        ->count(10)
        ->create();

        Account::factory()
        ->count(10)
        ->has(Project::factory()->count(3)->has(Job::factory()->count(5)->has(Task::factory()->count(2))))
        ->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
