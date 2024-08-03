<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Organization Device Manager</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="text-lg font-bold">Device Manager</div>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="{{ route('organizations.index') }}" class="text-gray-600 hover:text-blue-500">Organizations</a></li>
                <li><a href="{{ route('locations.index', 1) }}" class="text-gray-600 hover:text-blue-500">Locations</a></li>
                <li><a href="{{ route('devices.index', 1) }}" class="text-gray-600 hover:text-blue-500">Devices</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-blue-500 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">Welcome to Organization Device Manager</h1>
        <p class="text-lg mb-8">Easily manage your organizations, locations, and devices with our intuitive platform.</p>
        <a href="{{ route('organizations.index') }}" class="px-8 py-3 bg-white text-blue-500 font-semibold rounded-md shadow-md hover:bg-gray-100">Get Started</a>
    </div>
</section>

<!-- Main Content -->
<main class="container mx-auto px-4 py-10">
    <div class="text-center">
        <h2 class="text-2xl font-bold mb-4">Features</h2>
        <p class="text-gray-700 mb-8">Explore the powerful features we offer to help you streamline your device management process.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-2">Easy Organization Management</h3>
            <p class="text-gray-600">Create, edit, and manage organizations with ease.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-2">Location Tracking</h3>
            <p class="text-gray-600">Keep track of multiple locations for your organizations.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-2">Device Monitoring</h3>
            <p class="text-gray-600">Monitor and manage devices across all locations efficiently.</p>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 L-Marcho. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
