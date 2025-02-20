<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'task_name' => 'Mow the lawn',
            'task_location' => 'Backyard',
            'time_complexity' => 2, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required' => 'Lawn mower',
            'deadline' => '2025-02-25 10:00:00',
            'priority' => 3, // (1 => low, 2 => medium, 3 => high)
            'category' => 'chores'
        ]);
    }
}
