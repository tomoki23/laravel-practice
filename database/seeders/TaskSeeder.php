<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::insert([
            'todo' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Task::insert([
            'todo' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Task::insert([
            'todo' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
