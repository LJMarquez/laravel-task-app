@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4 text-blue-500">Edit Task</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Important for updating (PUT/PATCH) --}}
        <div class="mb-4">
        <label for="task_name" class="block mb-1">Task Name:</label>
        <input type="text" name="task_name" id="task_name"
        value="{{ old('task_name', $task->task_name) }}" class="w-full border border-black rounded px-3 py-2 hover:border-blue-500 hover:border-2">
        @error('task_name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-4">
        <label for="task_location" class="block mb-1">Location:</label>
        <input type="text" name="task_location" id="task_location"
        value="{{ old('task_location', $task->task_location) }}"
        class="w-full border border-black rounded px-3 py-2 hover:border-blue-500 hover:border-2">
        @error('task_location')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-4">
        <label for="time_complexity" class="block mb-1">Time Complexity:</label>
        <input type="number" name="time_complexity" id="time_complexity"
        value="{{ old('time_complexity', $task->time_complexity) }}" min="1" max="5"
        class="w-full border border-black rounded px-3 py-2 hover:border-blue-500 hover:border-2">
        @error('time_complexity')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-4">
        <label for="materials_required" class="block mb-1">Materials Required:</label>
        <input type="text" name="materials_required" id="materials_required"
        value="{{ old('materials_required', $task->materials_required) }}"
        class="w-full border border-black rounded px-3 py-2 hover:border-blue-500 hover:border-2">
        @error('materials_required')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-4">
        <label for="deadline" class="block mb-1">Deadline:</label>
        <input type="date" name="deadline" id="deadline" value="{{ old('deadline', $task->deadline) }}"
        class="w-full border border-black rounded px-3 py-2 hover:border-blue-500 hover:border-2">
        @error('deadline')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-4">
        <label for="priority" class="block mb-1">Priority:</label>
        <input type="number" name="priority" id="priority"
        value="{{ old('priority', $task->priority) }}" min="1" max="3"
        class="w-full border border-black rounded px-3 py-2 hover:border-blue-500 hover:border-2">
        @error('priority')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-4">
        <label for="category" class="block mb-1">Category:</label>
        <input type="text" name="category" id="category"
        value="{{ old('category', $task->category) }}" class="w-full border border-black rounded px-3 py-2 hover:border-blue-500 hover:border-2">
        @error('category')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>
        <div class="flex gap-4">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Task</button>
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Delete Task
        </button>
        <a href="{{ url('/') }}"
    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
    Cancel
    </a>
        </form>
    </div>
    </div>
@endsection