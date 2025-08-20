<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bootsrap/css/bootstrap.min.css') }}">
</head>
    <style>
        i{
            font-size: 30px;
            margin-right: 10px;
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #626F47">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"> <h2>QuickList</h2> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li><h5 class="text-white mt-2" style="margin-right: 10px">Halo, {{ Auth::user()->name }}!</h5></li>
                <li>
                    <a class="btn" style="background-color: #7b0f0f; color: white;" href="/logout">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
        <main class="flex-grow-1 mb-5">
          @yield('utama')
        </main>
</body>
</html>
<script src="{{ asset('assets/bootsrap/css/bootstrap.min.css') }}"></script>
