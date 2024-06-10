<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navDashboard" aria-label="navDashboard"
                aria-expanded="false" aria-label="toggleNavDashboard">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse me-auto" id="navDashboard">
                <ul>
                    <li class="nav-item active">
                        <a href="{{ route('dashboard') }}" class="nav-link"> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('posts') }}" class="nav-link"> Posts</a>
                    </li>
                </ul>
            </div>
            <span class="navbar-brand h1" style="text-transform:uppercase;">Dashboard</span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid bg-light text-center">
        <h1>Welcome, {{ Auth::user()->name }}</h1>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
