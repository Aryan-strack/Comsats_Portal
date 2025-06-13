<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMSATS Student Portal</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav class="nav-animate">
        <div class="container">
            <a href="{{ route('dashboard') }}" class="nav-brand">
                <i class="fas fa-graduation-cap"></i> COMSATS Student Portal
            </a>
            @auth
                <div class="nav-links">
                    <a href="{{ route('profile.show') }}"><i class="fas fa-user"></i> Profile</a>
                    <a href="{{ route('courses.index') }}"><i class="fas fa-book"></i> Courses</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
                    </form>
                </div>
            @else
                <div class="nav-links">
                    <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                    <a href="{{ route('register') }}" class="btn-register"><i class="fas fa-user-plus"></i> Register</a>
                </div>
            @endauth
        </div>
    </nav>

    <div class="container">
        @if (session('message'))
            <div class="alert alert-animate">
                <div class="alert-content">
                    <i class="fas fa-check-circle"></i>
                    {{ session('message') }}
                </div>
                <button class="alert-close"><i class="fas fa-times"></i></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>