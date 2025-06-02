<?php

namespace App\Http\Controllers;

use App\Models\MyList;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created task in storage.
     */
    public function store(Request $request, MyList $list)
    {
        if (Auth::id() !== $list->project->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'due_date' => ['nullable', 'date'],
            'priority' => ['required', 'string', 'in:low,medium,high'],
            'assignee_id' => ['nullable', 'exists:users,id'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $list->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'priority' => $request->priority,
            'user_id' => $request->assignee_id,
            'order' => $list->tasks()->max('order') + 1, // Simple ordering
        ]);

        return redirect()->route('projects.show', $list->project)->with('success', 'Task created successfully!');
    }

    /**
     * Show the form for editing the specified task.
     */
    public function edit(Task $task)
    {
        if (Auth::id() !== $task->mylist->project->user_id) {
            abort(403, 'Unauthorized action.');
        }
        $users = User::all();
        return view('tasks.edit', compact('task', 'users'));
    }

    /**
     * Update the specified task in storage.
     */
    public function update(Request $request, Task $task)
    {
        if (Auth::id() !== $task->mylist->project->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'due_date' => ['nullable', 'date'],
            'priority' => ['required', 'string', 'in:low,medium,high'],
            'completed' => ['boolean'],
            'assignee_id' => ['nullable', 'exists:users,id'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'priority' => $request->priority,
            'completed' => $request->has('completed'), // Check if checkbox is present
            'user_id' => $request->assignee_id,
        ]);

        return redirect()->route('projects.show', $task->mylist->project)->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified task from storage.
     */
    public function destroy(Task $task)
    {
        if (Auth::id() !== $task->mylist->project->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $task->delete();
        return redirect()->back()->with('success', 'Task deleted successfully.');
    }

    /**
     * Toggle task completion status.
     */
    public function toggleComplete(Task $task)
    {
        if (Auth::id() !== $task->mylist->project->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $task->completed = !$task->completed;
        $task->save();

        return response()->json(['completed' => $task->completed, 'message' => 'Task status updated.']);
    }
}