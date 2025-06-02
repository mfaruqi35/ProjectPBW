<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create users
        $user1 = User::create([
            'name' => 'Affan Suhendar',
            'email' => 'affan@example.com',
            'password' => Hash::make('password'),
            'position' => 'Team Lead',
            'skills' => ['JavaScript', 'Node.js', 'React', 'MongoDB'],
            'phone' => '+62 815-3685-1947',
        ]);

        $user2 = User::create([
            'name' => 'Muhammad Faruq',
            'email' => 'faruq@example.com',
            'password' => Hash::make('password'),
            'position' => 'Developer',
            'skills' => ['PHP', 'Laravel', 'Vue.js', 'MySQL'],
        ]);

        // Create team
        $team = Team::create([
            'name' => 'Development Team',
            'description' => 'Main development team for web projects',
            'owner_id' => $user1->id,
        ]);

        // Add team members
        TeamMember::create([
            'team_id' => $team->id,
            'user_id' => $user1->id,
            'role' => 'owner',
        ]);

        TeamMember::create([
            'team_id' => $team->id,
            'user_id' => $user2->id,
            'role' => 'member',
        ]);

        // Create projects
        Project::create([
            'name' => 'Website Redesign',
            'description' => 'Redesign company website',
            'team_id' => $team->id,
            'color' => '#10b981',
            'status' => 'active',
        ]);

        Project::create([
            'name' => 'Mobile App Launch',
            'description' => 'Launch new mobile application',
            'team_id' => $team->id,
            'color' => '#3b82f6',
            'status' => 'active',
        ]);

        Project::create([
            'name' => 'Marketing Campaign',
            'description' => 'Digital marketing campaign',
            'team_id' => $team->id,
            'color' => '#f59e0b',
            'status' => 'active',
        ]);
    }
}