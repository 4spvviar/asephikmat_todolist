<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuickList - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #4ade80, #bbf7d0, #ffffff);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-card {
      width: 100%;
      max-width: 420px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    .login-btn {
      background-color: #16a34a;
      border: none;
      transition: background-color 0.3s ease;
    }
    .login-btn:hover {
      background-color: #15803d;
    }
  </style>
</head>
<body>

  <div class="card login-card p-4">
    <h2 class="text-center fw-bold text-success mb-1">QuickList</h2>
    <p class="text-center text-muted mb-4">Please login before continue</p>

    @if(session('success'))
      <div class="alert alert-success text-center">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ url('/login') }}" method="POST">
      @csrf

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

      <!-- Remember + Forgot -->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>
            <a href="#" class="text-success small">Forgot password?</a>
      </div>

      <!-- Tombol -->
      <button type="submit" class="btn login-btn w-100 text-white rounded-pill py-2 fw-semibold">
        Login
      </button>
    </form>

    <!-- Register -->
    <p class="text-center mt-4 mb-0">
      Don’t have an account?
      <a href="{{ route('regist') }}" class="text-success fw-semibold text-decoration-none">Register</a>
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
