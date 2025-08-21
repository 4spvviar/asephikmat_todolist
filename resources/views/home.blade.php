@extends('template')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4>Welcome, {{ Auth::user()->username ?? 'User' }} 👋</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Here is your task list:</p>

                    {{-- Task List --}}
                    <ul class="list-group">
                        @foreach($tasks as $task)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{{ $task->title }}</span>
                                @if($task->status === 'done')
                                    <span class="badge bg-success">Done</span>
                                @elseif($task->status === 'pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @else
                                    <span class="badge bg-danger">Overdue</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                    {{-- Add Task Button --}}
                    <div class="mt-4 text-end">
                        <a href="{{ route('tasks.create') }}" class="btn btn-success">+ Add New Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
