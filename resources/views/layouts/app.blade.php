<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Device Manager</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
    @vite('resources/js/app.js')
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
<!-- Navigation -->
<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="text-lg font-semibold">Device Manager</div>
            <ul class="flex space-x-4">
                <li><a class="text-gray-700 hover:text-blue-600" href="{{ route('organizations.index') }}">Organizations</a></li>
                <li><a class="text-gray-700 hover:text-blue-600" href="{{ route('locations.index', 1) }}">Locations</a></li>
                <li><a class="text-gray-700 hover:text-blue-600" href="{{ route('devices.index', 1) }}">Devices</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="flex-grow container mx-auto px-4 py-6">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 L-Marcho. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
