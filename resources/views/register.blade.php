<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bootsrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container shadow p-5 rounded-3" style="width: 650px">
            <h2 style="color:#626F47;">Register Member</h2>
            <hr>
            @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif

            <form action="{{ route('regist.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mt-4">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" required>
                </div>
                <div class="mt-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="mt-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                </div>
                <div class="mt-4 mb-4">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn" style="background-color: #626F47; color:white">Register</button>
                    <a href="/login" class="btn" style="background-color: #7b0f0f; color:white">Cancel</a>
                </div>
            </form>

            <div class="mt-3">
                <small>Already have an account?
                    <a href="{{ route('login') }}" style="color: #626F47; text-decoration:none">Login</a>
                </small>
            </div>
        </div>
    </div>
</body>
</html>
