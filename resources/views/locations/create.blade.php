<!DOCTYPE html>
<html>
<head>
    <title>Create Location</title>
</head>
<body>
<h1>Create New Location for {{ $organization->name }}</h1>

<form action="{{ route('locations.store', $organization->id) }}" method="POST">
    @csrf
    <label for="serial_number">Serial Number:</label>
    <input type="text" name="serial_number" required>
    <br>
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="ipv4_address">IPv4 Address:</label>
    <input type="text" name="ipv4_address" required>
    <br>
    <button type="submit">Create</button>
</form>

<a href="{{ route('locations.index', $organization->id) }}">Back to Locations List</a>
</body>
</html>
