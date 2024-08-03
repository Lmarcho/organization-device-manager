<!DOCTYPE html>
<html>
<head>
    <title>Edit Location</title>
</head>
<body>
<h1>Edit Location for {{ $organization->name }}</h1>

<form action="{{ route('locations.update', [$organization->id, $location->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="serial_number">Serial Number:</label>
    <input type="text" name="serial_number" value="{{ $location->serial_number }}" required>
    <br>
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $location->name }}" required>
    <br>
    <label for="ipv4_address">IPv4 Address:</label>
    <input type="text" name="ipv4_address" value="{{ $location->ipv4_address }}" required>
    <br>
    <button type="submit">Update</button>
</form>

<a href="{{ route('locations.index', $organization->id) }}">Back to Locations List</a>
</body>
</html>
