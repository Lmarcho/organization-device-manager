<!DOCTYPE html>
<html>
<head>
    <title>Organizations</title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-4xl mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Organizations List</h2>
        <a href="{{ route('organizations.create') }}" class="inline-block mb-6 px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">Create New Organization</a>
        <ul class="space-y-4">
            @foreach ($organizations as $organization)
                <li class="bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center">
                    <div>
                        <span class="font-semibold">{{ $organization->name }}</span>
                        <span class="text-gray-500"> ({{ $organization->unique_code }})</span>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('organizations.show', $organization->id) }}" class="text-blue-500 hover:underline">View Locations</a>
                        <a href="{{ route('organizations.edit', $organization->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('organizations.destroy', $organization->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
</body>
</html>
