<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Auth::user()->teams()->with(['members', 'projects'])->get();
        return view('teams.index', compact('teams'));
    }

    public function show(Team $team)
    {
        $team->load(['members.user', 'projects']);
        return view('teams.show', compact('team'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $team = Team::create([
            'name' => $request->name,
            'description' => $request->description,
            'owner_id' => Auth::id(),
        ]);

        // Add owner as team member
        $team->teamMembers()->create([
            'user_id' => Auth::id(),
            'role' => 'owner',
        ]);

        return redirect()->route('dashboard')->with('success', 'Team created successfully!');
    }

    public function addMember(Request $request, Team $team)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();
        
        if ($team->members()->where('user_id', $user->id)->exists()) {
            return back()->with('error', 'User is already a member of this team.');
        }

        $team->teamMembers()->create([
            'user_id' => $user->id,
            'role' => 'member',
        ]);

        return back()->with('success', 'Member added successfully!');
    }
}