<!DOCTYPE html>
<html>
<head>
    <title>Location Details</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-4xl mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Devices for {{ $location->name }}</h2>
        <a href="{{ route('devices.create', ['location_id' => $location->id]) }}" class="inline-block mb-6 px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">Add New Device</a>
        <ul class="space-y-4">
            @foreach ($location->devices as $device)
                <li class="bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('images/' . $device->image) }}" alt="{{ $device->name }}" class="w-16 h-16 rounded-full">
                        <div>
                            <span class="font-semibold">{{ $device->name }}</span>
                            <span class="text-gray-500"> ({{ $device->type }})</span>
                            <p class="text-sm text-gray-600">Status: {{ $device->status }}</p>
                            <p class="text-sm text-gray-600">Created: {{ $device->created_at->format('Y-m-d') }}</p>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('devices.show', $device->id) }}" class="text-blue-500 hover:underline">View</a>
                        <a href="{{ route('devices.edit', $device->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('devices.destroy', $device->id) }}" method="POST" class="inline">
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
