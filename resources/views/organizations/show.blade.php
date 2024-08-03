<!DOCTYPE html>
<html>
<head>
    <title>Organization Details</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Organization Details</h2>
        <p><strong>Code:</strong> {{ $organization->code }}</p>
        <p><strong>Name:</strong> {{ $organization->name }}</p>
        <p><strong>Locations:</strong> {{ count($organization->locations) }}</p>
        <p><strong>Devices:</strong> {{ count($organization->devices) }}</p>
        <div class="mt-6">
            <a href="{{ route('organizations.edit', $organization->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit</a>
            <a href="{{ route('organizations.index') }}" class="px-4 py-2 bg-gray-300 text-black rounded-md hover:bg-gray-400">Back to List</a>
        </div>
    </div>
@endsection
</body>
</html>
