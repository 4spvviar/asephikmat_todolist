<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}}">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container shadow p-5 rounded-3" style="width: 650px">
            <h2 class="mb-3" style="color: #626F47">Welcome To QuickList!</h2>
            <h4>Please Login Before</h4>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="mt-3 mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn" style="background-color: #626F47; color: white;">Login</button>
                </div>
            </form>
            <div class="mt-3">
                <span>Don’t have an account? </span>
                <a href="{{ route('regist') }}" style="color: #626F47; text-decoration: none;">Register</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
