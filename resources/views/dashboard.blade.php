<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex">
                        <!-- Sidebar -->
                        <div class="w-64 bg-gray-50 p-4 rounded-lg mr-6">
                            <!-- Team Stats -->
                            <div class="mb-6">
                                <div class="flex items-center mb-2">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $teams->count() }}</span>
                                    <span class="ml-2 text-sm text-gray-600">Team Members</span>
                                </div>
                                <div class="flex items-center mb-2">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $activeProjects }}</span>
                                    <span class="ml-2 text-sm text-gray-600">Active Projects</span>
                                </div>
                            </div>

                            <!-- Navigation -->
                            <nav class="space-y-2">
                                <a href="#" class="flex items-center p-2 text-blue-600 bg-blue-50 rounded">
                                    <span class="ml-2">Members</span>
                                </a>
                                <a href="#" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded">
                                    <span class="ml-2">Projects</span>
                                </a>
                                <a href="#" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded">
                                    <span class="ml-2">Discussions</span>
                                </a>
                                <a href="#" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded">
                                    <span class="ml-2">Documents</span>
                                </a>
                            </nav>

                            <!-- Recent Projects -->
                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-900 mb-3">RECENT PROJECTS</h3>
                                <div class="space-y-2">
                                    @foreach($recentProjects as $project)
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 rounded-full mr-2" style="background-color: {{ $project->color }}"></div>
                                        <span class="text-sm text-gray-600">{{ $project->name }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Main Content -->
                        <div class="flex-1">
                            <!-- Header -->
                            <div class="flex justify-between items-center mb-6">
                                <div>
                                    <h1 class="text-2xl font-bold text-gray-900">Team Members</h1>
                                    <div class="flex items-center mt-2">
                                        <input type="text" placeholder="Search members..." class="border rounded-md px-3 py-2 text-sm">
                                    </div>
                                </div>
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm">
                                    Add Member
                                </button>
                            </div>

                            <!-- Team Members List -->
                            <div class="space-y-4">
                                @foreach($teams as $team)
                                    @foreach($team->members as $member)
                                    <div class="flex items-center justify-between p-4 bg-white border rounded-lg">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-medium">
                                                {{ $member->initials }}
                                            </div>
                                            <div class="ml-3">
                                                <h3 class="text-sm font-medium text-gray-900">{{ $member->name }}</h3>
                                                <p class="text-sm text-gray-500">{{ $member->position ?? 'Team Lead' }}</p>
                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs bg-green-100 text-green-800">
                                                    Online
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <span class="text-sm text-gray-500">{{ $member->pivot->role ?? 'member' }}</span>
                                            <button class="text-gray-400 hover:text-gray-600">⋯</button>
                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>

                        <!-- Member Profile Sidebar -->
                        @if($teams->isNotEmpty() && $teams->first()->members->isNotEmpty())
                        @php $firstMember = $teams->first()->members->first(); @endphp
                        <div class="w-80 bg-gray-50 p-6 rounded-lg ml-6">
                            <div class="text-center mb-6">
                                <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white font-medium text-xl mx-auto mb-3">
                                    {{ $firstMember->initials }}
                                </div>
                                <h2 class="text-xl font-semibold">{{ $firstMember->name }}</h2>
                                <p class="text-gray-600">{{ $firstMember->position ?? 'Senior Developer' }}</p>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs bg-green-100 text-green-800 mt-2">
                                    Online
                                </span>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-900 mb-2">CONTACT INFORMATION</h3>
                                    <p class="text-sm text-gray-600">📧 {{ $firstMember->email }}</p>
                                    <p class="text-sm text-gray-600">📞 {{ $firstMember->phone ?? '+62 815-3685-1947' }}</p>
                                    <p class="text-sm text-gray-600">📅 Joined: {{ $firstMember->created_at->format('M d, Y') }}</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-gray-900 mb-2">SKILLS & EXPERTISE</h3>
                                    <div class="flex flex-wrap gap-2">
                                        @php
                                        $skills = $firstMember->skills ?? ['JavaScript', 'Node.js', 'React', 'MongoDB'];
                                        @endphp
                                        @foreach($skills as $skill)
                                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">{{ $skill }}</span>
                                        @endforeach
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-gray-900 mb-2">CURRENT PROJECTS</h3>
                                    <div class="space-y-2">
                                        @foreach($recentProjects->take(2) as $project)
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 rounded-full mr-2" style="background-color: {{ $project->color }}"></div>
                                            <span class="text-sm text-gray-600">{{ $project->name }}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>