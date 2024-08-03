<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

<!-- Header -->
<header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold">My Application</h1>
    </div>
</header>

<!-- Navigation -->
<nav class="bg-blue-500 text-white p-2">
    <div class="container mx-auto">
        <ul class="flex space-x-4">
            <li><a href="{{ route('organizations.index') }}" class="hover:underline">Organizations</a></li>
            <li><a href="{{ route('locations.index', 1) }}" class="hover:underline">Locations</a></li> <!-- Replace 1 with actual organization ID -->
            <li><a href="{{ route('devices.index', 1) }}" class="hover:underline">Devices</a></li> <!-- Replace 1 with actual location ID -->
        </ul>
    </div>
</nav>

<!-- Main Content -->
<main class="container mx-auto p-4">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-blue-600 text-white p-4 mt-8">
    <div class="container mx-auto">
        <p>&copy; 2024 L-Marcho Organization Device Manager . All rights reserved.</p>
    </div>
</footer>

</body>
</html>
