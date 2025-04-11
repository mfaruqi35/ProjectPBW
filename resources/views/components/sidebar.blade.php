<div class="w-64 bg-gradient-to-b from-blue-900 to-blue-600 text-white flex flex-col p-4">
    <div class="mb-8">
        <h1 class="text-2xl font-bold">NOTUDO</h1>
    </div>

    <nav class="flex flex-col gap-2">
        <a href="{{route('home')}}" class="flex items-center px-4 py-2 hover:bg-blue-600">
            <i class="fas fa-home"></i> Home
        </a>
        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-blue-500 rounded">
            <i class="fas fa-check-square"></i> To-Do
        </a>
        <a href="{{ route('schedule') }}" class="flex items-center px-4 py-2 hover:bg-blue-600">
            <i class="fa-solid fa-calendar-alt mr-2"></i>
            Schedule
        </a>
        
        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-blue-500 rounded">
            <i class="fas fa-users"></i> Team Workspace
        </a>
    </nav>
</div>
