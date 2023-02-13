<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockPostRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('index', compact('tasks'));
    }

    public function store(StockPostRequest $request)
    {
        $task = new Task();
        $task->taskRegister($request);

        return redirect('tasks');
    }

    public function destroy($id)
    {
        $delete_task = Task::find($id);
        $delete_task->delete();

        return to_route('tasks.index');
    }
}
