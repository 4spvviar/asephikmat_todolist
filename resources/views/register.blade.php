<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuickList - Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #4ade80, #bbf7d0, #ffffff);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .register-card {
      width: 100%;
      max-width: 450px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    .register-btn {
      background-color: #16a34a;
      border: none;
      transition: background-color 0.3s ease;
    }
    .register-btn:hover {
      background-color: #15803d;
    }
  </style>
</head>
<body>

  <div class="card register-card p-4">
    <h2 class="text-center fw-bold text-success mb-1">QuickList</h2>
    <p class="text-center text-muted mb-4">Create a new account</p>

    @if(session('success'))
      <div class="alert alert-success text-center">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ url('/register') }}" method="POST">
      @csrf

      <!-- Username -->
      <div class="mb-3">
        <label for="username" class="form-label fw-semibold">Username</label>
        <input type="text" class="form-control rounded-pill px-3 py-2" id="username" name="username" placeholder="Enter your username" required>
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" class="form-control rounded-pill px-3 py-2" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label fw-semibold">Password</label>
        <input type="password" class="form-control rounded-pill px-3 py-2" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <!-- Confirm Password -->
      <div class="mb-3">
        <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
        <input type="password" class="form-control rounded-pill px-3 py-2" id="password_confirmation" name="password_confirmation" placeholder="Re-enter your password" required>
      </div>

      <!-- Tombol -->
      <button type="submit" class="btn register-btn w-100 text-white rounded-pill py-2 fw-semibold">
        Register
      </button>
    </form>

    <!-- Link ke login -->
    <p class="text-center mt-4 mb-0">
      Already have an account?
      <a href="{{ route('login') }}" class="text-success fw-semibold text-decoration-none">Login</a>
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
