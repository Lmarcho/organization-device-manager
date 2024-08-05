<!DOCTYPE html>
<html>
<head>
    <title>Device Details</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-4xl mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Device Details</h2>
        <div class="flex space-x-4">
            <img src="{{ asset('images/' . $device->image) }}" alt="{{ $device->name }}" class="w-32 h-32 rounded-md">
            <div>
                <p><strong>Name:</strong> {{ $device->name }}</p>
                <p><strong>Unique Number:</strong> {{ $device->unique_number }}</p>
                <p><strong>Type:</strong> {{ $device->type }}</p>
                <p><strong>Status:</strong> {{ $device->status }}</p>
                <p><strong>Location:</strong> {{ $device->location->name }}</p>
            </div>
        </div>
        <div class="flex justify-end items-center space-x-4 mt-6">
            <a href="{{ route('devices.index') }}" class="text-sm text-gray-600 hover:text-gray-800">Back to List</a>
            <a href="{{ route('devices.edit', $device->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
            <form action="{{ route('devices.destroy', $device->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Delete</button>
            </form>
        </div>
    </div>
@endsection

</body>
</html>
