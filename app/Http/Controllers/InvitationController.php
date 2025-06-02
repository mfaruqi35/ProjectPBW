<?php
namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Notifications\TeamInvitationNotification;

class InvitationController extends Controller
{
    public function store(Request $request, Team $team)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        if ($team->creator_id !== Auth::id()) {
            return back()->with('error', 'Only team creator can invite members.');
        }

        $invitation = Invitation::create([
            'team_id' => $team->id,
            'email' => $request->email,
            'token' => Str::random(32),
        ]);

        $user = \App\Models\User::where('email', $request->email)->first();
        $user->notify(new TeamInvitationNotification($invitation));

        return back()->with('success', 'Invitation sent successfully.');
    }

    public function accept($token)
    {
        $invitation = Invitation::where('token', $token)->firstOrFail();

        if ($invitation->status !== 'pending') {
            return redirect()->route('teams.index')->with('error', 'Invitation already processed.');
        }

        if ($invitation->email !== Auth::user()->email) {
            return redirect()->route('teams.index')->with('error', 'Invalid invitation.');
        }

        $invitation->team->members()->attach(Auth::id(), ['role' => 'member']);
        $invitation->update(['status' => 'accepted']);

        return redirect()->route('teams.index')->with('success', 'You have joined the team.');
    }
}