<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notudo Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5KwQ/BMPRjW7tz8J6pgep/brh" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow-lg p-4 flex justify-between items-center fixed w-full z-10 top-0">
        <h1 class="font-[Kanit] font-bold text-[2rem] text-[#1868DB]">Notudo</h1>
        <div>
            <span class="mr-4 text-gray-700">Welcome, {{ Auth::user()->name }}!</span>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container mx-auto pt-20 px-6">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <h2 class="text-3xl font-bold mb-6 text-gray-800">My Projects</h2>

        <a href="{{ route('projects.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6 inline-block">
            Create New Project
        </a>

        @if ($projects->isEmpty())
            <p class="text-gray-600">You don't have any projects yet. Start by creating one!</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($projects as $project)
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                        <h3 class="text-xl font-bold mb-2 text-[#1868DB]">{{ $project->name }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 100) }}</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('projects.show', $project) }}" class="text-blue-500 hover:underline">View Board</a>
                            <div class="flex gap-2">
                                <a href="{{ route('projects.edit', $project) }}" class="text-yellow-500 hover:text-yellow-700"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project? This action cannot be undone.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>