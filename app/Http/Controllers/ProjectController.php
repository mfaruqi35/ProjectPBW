<?php

namespace App\Http\Controllers; // Pastikan namespace ini benar

use App\Http\Controllers\Controller; // <-- TAMBAHKAN BARIS INI
use App\Models\Project;
use App\Models\User; // To get users for assigning tasks
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('Auth'); // Ensure user is authenticated for all project actions
    }

    /**
     * Display a listing of the user's projects.
     */
    public function index()
    {
        $projects = Auth::user()->projects()->latest()->get();
    return view('projects.index', compact('projects')); //
    }

    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        Auth::user()->projects()->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified project (the board view).
     */
    public function show(Project $project)
    {
        // Ensure the authenticated user owns this project
        if (Auth::id() !== $project->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $project->load('lists.tasks.assignee'); // Eager load lists and tasks, and assignee for tasks
        $users = User::all(); // Get all users for task assignment dropdown
        return view('projects.show', compact('project', 'users'));
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit(Project $project)
    {
        if (Auth::id() !== $project->user_id) {
            abort(403, 'Unauthorized action.');
        }
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified project in storage.
     */
    public function update(Request $request, Project $project)
    {
        if (Auth::id() !== $project->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $project->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified project from storage.
     */
    public function destroy(Project $project)
    {
        if (Auth::id() !== $project->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}