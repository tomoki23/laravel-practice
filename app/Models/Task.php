<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'todo',
        'created_at',
        'updated_at'
    ];

    public function taskRegister($task)
    {
        $this->create([
            'todo' => $task['todo']
        ]);

    }
}
