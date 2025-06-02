<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Get user's teams
        $teams = $user->teams()->with(['projects', 'members'])->get();
        
        // Get recent projects
        $recentProjects = Project::whereIn('team_id', $user->teams->pluck('id'))
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();
        
        // Get team members count
        $totalMembers = $user->teams->sum(function($team) {
            return $team->members->count();
        });
        
        // Get active projects count
        $activeProjects = Project::whereIn('team_id', $user->teams->pluck('id'))
            ->where('status', 'active')
            ->count();

        return view('dashboard', compact('teams', 'recentProjects', 'totalMembers', 'activeProjects'));
    }
}