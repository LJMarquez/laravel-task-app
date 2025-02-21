<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'task_name' => 'Water The Plants',
            'task_location' => 'Outside',
            'time_complexity' => 3, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required' => 'Hose',
            'deadline' => '2025-02-25 6:00:00',
            'priority' => 2, // (1 => low, 2 => medium, 3 => high)
            'category' => 'Chores'
        ]);
    }
}
