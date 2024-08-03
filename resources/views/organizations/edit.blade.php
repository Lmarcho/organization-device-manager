<!DOCTYPE html>
<html>
<head>
    <title>Edit Organization</title>
</head>
<body>
<h1>Edit Organization</h1>

<form action="{{ route('organizations.update', $organization->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="code">Code:</label>
    <input type="text" name="code" value="{{ $organization->code }}" required>
    <br>
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $organization->name }}" required>
    <br>
    <button type="submit">Update</button>
</form>
</body>
</html>
