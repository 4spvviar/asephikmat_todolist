@extends('template')

@section('title', 'Add Task')

@section('content')
<div class="container mt-5">
    <h3>Add New Task</h3>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="pending">Pending</option>
                <option value="done">Done</option>
                <option value="overdue">Overdue</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Task</button>
    </form>
</div>
@endsection
