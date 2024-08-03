<!DOCTYPE html>
<html>
<head>
    <title>Device Details</title>
</head>
<body>
<h1>Device Details</h1>
<p>Unique Number: {{ $device->unique_number }}</p>
<p>Type: {{ $device->type }}</p>
<p>Image URL: {{ $device->image }}</p>
<p>Status: {{ $device->status }}</p>

<a href="{{ route('devices.index', $location->id) }}">Back to Devices List</a>
</body>
</html>
