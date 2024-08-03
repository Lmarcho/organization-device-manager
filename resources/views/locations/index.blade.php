<!DOCTYPE html>
<html>
<head>
    <title>Locations</title>
</head>
<body>
<h1>Locations List for {{ $organization->name }}</h1>

<a href="{{ route('locations.create', $organization->id) }}">Create New Location</a>

<ul>
    @foreach ($locations as $location)
        <li>
            <a href="{{ route('locations.show', [$organization->id, $location->id]) }}">
                {{ $location->name }} ({{ $location->serial_number }})
            </a>
            <a href="{{ route('locations.edit', [$organization->id, $location->id]) }}">Edit</a>
            <form action="{{ route('locations.destroy', [$organization->id, $location->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('organizations.index') }}">Back to Organizations</a>
</body>
</html>
