<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $taskList = Task::orderBy('due_date', 'asc')->get();

        return view('tasks.index', compact('taskList'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'task_name' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:Pending,Completed',
            'due_date' => 'nullable|date',
        ]);

        Task::create($validated);

        $request->session()->flash(
            'message',
            'Task added successfully!'
        );

        return response('', 303)
            ->header('Location', '/tasks');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'task_name' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:Pending,Completed',
            'due_date' => 'nullable|date',
        ]);

        $task->update($data);

        return response('', 303)
            ->header('Location', '/tasks');
    }

    public function destroy(Request $request, Task $task)
    {
        $task->delete();

        $request->session()->flash(
            'message',
            'Task deleted successfully!'
        );

        return response('', 303)
            ->header('Location', '/tasks');
    }
}