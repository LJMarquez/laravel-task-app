@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Create New Task</h1>
    <form action="" method="POST">
    @csrf
    
    {{-- Task Name --}}
    <div class="mb-4">
        <label for="task_name">Task Name</label>
        <input type="text" name="task_name" id="task_name" placeholder="e.g., Take out trash" required>
    </div>

    {{-- Task Location --}}
    <div class="mb-4">
        <label for="task_location">Location</label>
        <input type="text" name="task_location" id="task_location" placeholder="Kitchen, Garage" required>
    </div>
    
    {{-- Time Estimate (or Time Complexity) --}}
    <div class="mb-4">
    <label for="time_complexity">Time Estimate</label>
    <select name="time_complexity" id="time_complexity">
        <option value="10 min">10 min</option>
        <option value="30 min">30 min</option>
        <option value="1 hour">1 hour</option>
        <option value="1+ hours">1+ hours</option>
    </select>
    </div>
    
    {{-- Materials Required (Optional) --}}
    <div class="mb-4">
    <label for="materials_required">Materials Required</label>
    <input type="text" name="materials_required" id="materials_required" placeholder="e.g., Trash Bags, Broom">
    </div>
    
    {{-- Deadline (Optional) --}}
    <div class="mb-4">
    <label for="deadline">Deadline</label>
    <input type="datetime-local" name="deadline" id="deadline">
    </div>

    {{-- Priority (Optional) --}}
    <div class="mb-4">
        <label for="priority">Priority</label>
        <select name="priority" id="priority">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>
    </div>
    
    {{-- Category (Optional) --}}
    <div class="mb-4">
        <label for="category">Category</label>
        <input type="text" name="category" placeholder="e.g., chores, work, health">
    </div>
    
    {{-- Submit and Cancel Buttons --}}
    <div class="flex gap-4">
    <!-- GUIDANCE:
    - Add a button for "Submit" or "Create Task" (type="submit").
    - Add a link or button for "Cancel" that routes back to the homepage or tasks list.
    -->
    <button type="submit">Submit</button>
    <button type="button"><a href="/a">Cancel</a></button>
    </div>
    </form>
    </div>
@endsection