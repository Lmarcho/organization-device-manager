<!DOCTYPE html>
<html>
<head>
    <title>Create Device</title>
</head>
<body>
<h1>Create New Device for {{ $location->name }}</h1>

<form action="{{ route('devices.store', $location->id) }}" method="POST">
    @csrf
    <label for="unique_number">Unique Number:</label>
    <input type="number" name="unique_number" required>
    <br>
    <label for="type">Type:</label>
    <input type="text" name="type" required>
    <br>
    <label for="image">Image URL:</label>
    <input type="text" name="image" required>
    <br>
    <label for="status">Status:</label>
    <select name="status" required>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
    <br>
    <button type="submit">Create</button>
</form>

<a href="{{ route('devices.index', $location->id) }}">Back to Devices List</a>
</body>
</html>
