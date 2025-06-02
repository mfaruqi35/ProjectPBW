<?php
namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Auth::user()->teams;
        $ownedTeams = Auth::user()->ownedTeams;
        return view('teams.index', compact('teams', 'ownedTeams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $team = Team::create([
            'name' => $request->name,
            'creator_id' => Auth::id(),
        ]);

        $team->members()->attach(Auth::id(), ['role' => 'admin']);

        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }
}