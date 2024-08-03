<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Device Manager</title>
    @vite('resources/sass/app.scss')
    @vite('resources/js/app.js')
</head>
<body class="d-flex flex-column min-vh-100">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">Device Manager</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('organizations.index') }}">Organizations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('locations.index', 1) }}">Locations</a> <!-- Replace with actual organization ID -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('devices.index', 1) }}">Devices</a> <!-- Replace with actual location ID -->
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="flex-grow-1">
    <div class="container my-4">
        @yield('content')
    </div>
</main>

<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-auto">
    <div class="container text-center">
        <p>&copy; 2024 L-Marcho. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
