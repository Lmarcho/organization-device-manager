<!DOCTYPE html>
<html>
<head>
    <title>Device Details</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Device Details</h2>
        <div class="space-y-4">
            <p><strong>Name:</strong> {{ $device->name }}</p>
            <p><strong>Type:</strong> {{ $device->type }}</p>
            <p><strong>Status:</strong> {{ $device->status }}</p>
            <p><strong>Created At:</strong> {{ $device->created_at->format('Y-m-d') }}</p>
        </div>
        <div class="mt-6 flex justify-end">
            <a href="{{ route('devices.edit', $device->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 mr-2">Edit</a>
            <a href="{{ route('devices.index') }}" class="px-4 py-2 bg-gray-300 text-black rounded-md hover:bg-gray-400">Back to List</a>
        </div>
    </div>
@endsection

</body>
</html>
