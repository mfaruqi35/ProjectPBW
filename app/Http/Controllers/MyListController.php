<?php

// app/Http/Controllers/MyListController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // <--- PASTIKAN INI ADA
use App\Models\Project;
use App\Models\MyList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MyListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Project $project)
    {
        if (Auth::id() !== $project->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $project->lists()->create([
            'name' => $request->name,
            'order' => $project->lists()->max('order') + 1,
        ]);

        return redirect()->route('projects.show', $project)->with('success', 'List created successfully!');
    }

    public function update(Request $request, MyList $list)
    {
        if (Auth::id() !== $list->project->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $list->update(['name' => $request->name]);

        return response()->json(['message' => 'List updated successfully!']);
    }

    public function destroy(MyList $list)
    {
        if (Auth::id() !== $list->project->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $list->delete();
        return redirect()->back()->with('success', 'List deleted successfully.');
    }
}