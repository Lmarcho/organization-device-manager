<!DOCTYPE html>
<html>
<head>
    <title>Locations</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-4xl mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Locations List</h2>
        <a href="{{ route('locations.create') }}" class="inline-block mb-6 px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">Create New Location</a>
        <ul class="space-y-4">
            @foreach ($locations as $location)
                <li class="bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center">
                    <div>
                        <span class="font-semibold">{{ $location->name }}</span>
                        <span class="text-gray-500"> ({{ $location->serial_number }})</span>
                        <p class="text-sm text-gray-600">{{ $location->ipv4_address }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('locations.show', $location->id) }}" class="text-blue-500 hover:underline">View</a>
                        <a href="{{ route('locations.edit', $location->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('locations.destroy', $location->id) }}" method="POST" class="inline">
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
