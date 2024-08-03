<!DOCTYPE html>
<html>
<head>
    <title>Create Organization</title>
</head>
<body>
<h1>Create New Organization</h1>

<form action="{{ route('organizations.store') }}" method="POST">
    @csrf
    <label for="code">Code:</label>
    <input type="text" name="code" required>
    <br>
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <button type="submit">Create</button>
</form>
</body>
</html>
