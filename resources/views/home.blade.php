@extends('template')

@section('title', 'Home')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-custom p-4">
      <h3 class="text-success fw-bold mb-3">Welcome, {{ Auth::user()->username ?? 'User' }} 🎉</h3>
      <p class="text-muted">This is your QuickList dashboard.</p>

      <hr>

      <!-- Example: Task List -->
      <h5 class="fw-semibold mb-3">Your Tasks</h5>
      <ul class="list-group mb-4">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Task 1
          <span class="badge bg-success rounded-pill">Done</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Task 2
          <span class="badge bg-warning rounded-pill">Pending</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Task 3
          <span class="badge bg-danger rounded-pill">Overdue</span>
        </li>
      </ul>

      <a href="#" class="btn btn-success rounded-pill px-4">+ Add New Task</a>
    </div>
  </div>
</div>
@endsection

