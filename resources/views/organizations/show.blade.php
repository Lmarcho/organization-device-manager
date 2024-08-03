<!DOCTYPE html>
<html>
<head>
    <title>Organization Details</title>
</head>
<body>
<h1>{{ $organization->name }}</h1>
<p>Code: {{ $organization->code }}</p>

<a href="{{ route('organizations.index') }}">Back to Organizations List</a>
</body>
</html>
