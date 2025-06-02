<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Board: {{ $project->name }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5KwQ/BMPRjW7tz8J6pgep/brh" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .list-column {
            min-width: 300px;
            max-width: 300px;
        }
        .task-card {
            cursor: grab;
        }
        .task-completed {
            text-decoration: line-through;
            opacity: 0.7;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow-lg p-4 flex justify-between items-center fixed w-full z-10 top-0">
        <h1 class="font-[Kanit] font-bold text-[2rem] text-[#1868DB]">{{ $project->name }}</h1>
        <div class="flex items-center">
            <a href="{{ route('projects.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded mr-4">Back to Projects</a>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container mx-auto pt-20 px-6 h-full flex flex-col">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex-grow flex overflow-x-auto py-4 gap-4">
            @foreach ($project->lists as $list)
                <div class="list-column bg-gray-200 rounded-lg p-4 shadow-md flex-shrink-0 h-auto flex flex-col">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-bold text-lg text-gray-800 edit-list-name" data-list-id="{{ $list->id }}">{{ $list->name }}</h3>
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:text-blue-800 edit-list-button" data-list-id="{{ $list->id }}" data-list-name="{{ $list->name }}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <form action="{{ route('lists.destroy', $list) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this list and all its tasks?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="flex-grow space-y-3 mb-4 tasks-container" id="list-{{ $list->id }}">
                        @foreach ($list->tasks as $task)
                            <div class="bg-white p-3 rounded-md shadow-sm border border-gray-300 task-card {{ $task->completed ? 'task-completed' : '' }}">
                                <div class="flex justify-between items-center mb-2">
                                    <h4 class="font-semibold text-gray-700">{{ $task->title }}</h4>
                                    <input type="checkbox" class="task-checkbox" data-task-id="{{ $task->id }}" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">{{ Str::limit($task->description, 50) }}</p>
                                @if ($task->due_date)
                                    <p class="text-xs text-gray-500">Due: {{ $task->due_date->format('M d, Y') }}</p>
                                @endif
                                @if ($task->assignee)
                                    <p class="text-xs text-gray-500">Assigned to: {{ $task->assignee->name }}</p>
                                @endif
                                <div class="flex justify-end gap-2 mt-2">
                                    <a href="{{ route('tasks.edit', $task) }}" class="text-yellow-600 hover:text-yellow-800 text-sm"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Delete this task?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 text-sm"><i class="fas fa-times"></i></button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <form action="{{ route('tasks.store', $list) }}" method="POST" class="mt-auto">
                        @csrf
                        <input type="text" name="title" placeholder="Add new task..." required
                            class="w-full p-2 border border-gray-300 rounded-md mb-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                        <input type="hidden" name="priority" value="medium"> <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white w-full py-2 rounded-md font-bold">Add Task</button>
                    </form>
                </div>
            @endforeach

            <div class="list-column bg-gray-200 rounded-lg p-4 shadow-md flex-shrink-0 h-auto">
                <h3 class="font-bold text-lg text-gray-800 mb-4">Add New List</h3>
                <form action="{{ route('lists.store', $project) }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Enter list title" required
                        class="w-full p-2 border border-gray-300 rounded-md mb-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white w-full py-2 rounded-md font-bold">Add List</button>
                </form>
            </div>
        </div>
    </div>

    {{-- For now, we use a dedicated edit page. If you want a modal, this section would be here. --}}

    <form id="update-list-form" method="POST" class="hidden">
        @csrf
        @method('PUT')
        <input type="hidden" name="name" id="update-list-name-input">
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle List Name Edit
            document.querySelectorAll('.edit-list-button').forEach(button => {
                button.addEventListener('click', function() {
                    const listId = this.dataset.listId;
                    const currentName = this.dataset.listName;
                    const heading = document.querySelector(`.edit-list-name[data-list-id="${listId}"]`);

                    // Create an input field
                    const input = document.createElement('input');
                    input.type = 'text';
                    input.value = currentName;
                    input.className = 'w-full p-1 border border-blue-400 rounded-md text-lg font-bold';
                    input.setAttribute('data-original-name', currentName);

                    // Replace heading with input
                    heading.parentNode.replaceChild(input, heading);
                    input.focus();

                    // Save on Enter or Blur
                    input.addEventListener('keypress', function(e) {
                        if (e.key === 'Enter') {
                            this.blur();
                        }
                    });

                    input.addEventListener('blur', function() {
                        const newName = this.value.trim();
                        const originalName = this.dataset.originalName;

                        // If name is empty or unchanged, revert
                        if (newName === '' || newName === originalName) {
                            const newHeading = document.createElement('h3');
                            newHeading.className = 'font-bold text-lg text-gray-800 edit-list-name';
                            newHeading.textContent = originalName;
                            newHeading.setAttribute('data-list-id', listId);
                            this.parentNode.replaceChild(newHeading, this);
                            return;
                        }

                        // Perform AJAX update
                        const form = document.getElementById('update-list-form');
                        form.action = `/lists/${listId}`; // Adjust this if your route name is different
                        document.getElementById('update-list-name-input').value = newName;

                        fetch(form.action, {
                            method: 'POST', // Method is PUT, but fetch uses POST for FormData with method override
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]') ? document.querySelector('meta[name="csrf-token"]').content : ''
                            },
                            body: new FormData(form)
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.message) {
                                const newHeading = document.createElement('h3');
                                newHeading.className = 'font-bold text-lg text-gray-800 edit-list-name';
                                newHeading.textContent = newName;
                                newHeading.setAttribute('data-list-id', listId);
                                this.parentNode.replaceChild(newHeading, this);
                                // Optionally show success message
                                console.log(data.message);
                            } else if (data.errors) {
                                // Handle validation errors if necessary
                                alert('Error updating list name: ' + Object.values(data.errors).flat().join('\n'));
                                const newHeading = document.createElement('h3');
                                newHeading.className = 'font-bold text-lg text-gray-800 edit-list-name';
                                newHeading.textContent = originalName;
                                newHeading.setAttribute('data-list-id', listId);
                                this.parentNode.replaceChild(newHeading, this);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred while updating the list.');
                            const newHeading = document.createElement('h3');
                            newHeading.className = 'font-bold text-lg text-gray-800 edit-list-name';
                            newHeading.textContent = originalName;
                            newHeading.setAttribute('data-list-id', listId);
                            this.parentNode.replaceChild(newHeading, this);
                        });
                    });
                });
            });

            // Handle Task Completion Toggle
            document.querySelectorAll('.task-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const taskId = this.dataset.taskId;
                    const taskCard = this.closest('.task-card');

                    fetch(`/tasks/${taskId}/toggle-complete`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]') ? document.querySelector('meta[name="csrf-token"]').content : ''
                        },
                        body: JSON.stringify({}) // Empty body for a simple toggle
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.completed) {
                            taskCard.classList.add('task-completed');
                        } else {
                            taskCard.classList.remove('task-completed');
                        }
                        console.log(data.message);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Failed to update task status.');
                        this.checked = !this.checked; // Revert checkbox state on error
                    });
                });
            });
        });
    </script>
</body>
</html>