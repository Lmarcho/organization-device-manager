<!DOCTYPE html>
<html>
<head>
    <title>Edit Device</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Device</h2>

        <form action="{{ route('devices.update', $device->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Device Name</label>
                <input type="text" name="name" id="name" value="{{ $device->name }}" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div>
                <label for="type" class="block text-sm font-medium text-gray-700">Device Type</label>
                <select name="type" id="type" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <option value="pos" {{ $device->type == 'pos' ? 'selected' : '' }}>POS</option>
                    <option value="kiosk" {{ $device->type == 'kiosk' ? 'selected' : '' }}>Kiosk</option>
                    <option value="digital signage" {{ $device->type == 'digital signage' ? 'selected' : '' }}>Digital Signage</option>
                </select>
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <option value="active" {{ $device->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $device->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="flex justify-end items-center space-x-4">
                <a href="{{ route('devices.index') }}" class="text-sm text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Update</button>
            </div>
        </form>
    </div>
@endsection

</body>
</html>
