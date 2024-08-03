<!DOCTYPE html>
<html>
<head>
    <title>Edit Device</title>
</head>
<body>
<h1>Edit Device for {{ $location->name }}</h1>

<form action="{{ route('devices.update', [$location->id, $device->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="unique_number">Unique Number:</label>
    <input type="number" name="unique_number" value="{{ $device->unique_number }}" required>
    <br>
    <label for="type">Type:</label>
    <input type="text" name="type" value="{{ $device->type }}" required>
    <br>
    <label for="image">Image URL:</label>
    <input type="text" name="image" value="{{ $device->image }}" required>
    <br>
    <label for="status">Status:</label>
    <select name="status" required>
        <option value="active" {{ $device->status == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ $device->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
    <br>
    <button type="submit">Update</button>
</form>

<a href="{{ route('devices.index', $location->id) }}">Back to Devices List</a>
</body>
</html>
