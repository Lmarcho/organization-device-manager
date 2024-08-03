<!DOCTYPE html>
<html>
<head>
    <title>Location Details</title>
</head>
<body>
<h1>Location: {{ $location->name }}</h1>
<p>Serial Number: {{ $location->serial_number }}</p>
<p>IPv4 Address: {{ $location->ipv4_address }}</p>

<a href="{{ route('locations.index', $organization->id) }}">Back to Locations List</a>
</body>
</html>
