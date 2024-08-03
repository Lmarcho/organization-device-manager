<!DOCTYPE html>
<html>
<head>
    <title>Devices</title>
</head>
<body>
<h1>Devices List for {{ $location->name }}</h1>

<a href="{{ route('devices.create', $location->id) }}">Create New Device</a>

<ul>
    @foreach ($devices as $device)
        <li>
            <a href="{{ route('devices.show', [$location->id, $device->id]) }}">
                Device #{{ $device->unique_number }} - {{ $device->type }}
            </a>
            <a href="{{ route('devices.edit', [$location->id, $device->id]) }}">Edit</a>
            <form action="{{ route('devices.destroy', [$location->id, $device->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('locations.index', $location->organization_id) }}">Back to Locations</a>
</body>
</html>
