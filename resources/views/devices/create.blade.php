<!DOCTYPE html>
<html>
<head>
    <title>Create Device</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Create New Device</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ $errors->first() }}</span>
            </div>
        @endif

        <form action="{{ route('devices.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="unique_number" class="block text-sm font-medium text-gray-700">Unique Number</label>
                <input type="text" name="unique_number" id="unique_number" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm" required>
                @error('unique_number')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="type" class="block text-sm font-medium text-gray-700">Device Type</label>
                <select name="type" id="type" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Select a Device Type</option>
                    <option value="pos">POS</option>
                    <option value="kiosk">Kiosk</option>
                    <option value="digital signage">Digital Signage</option>
                </select>
                @error('type')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="location_id" class="block text-sm font-medium text-gray-700">Location</label>
                <select name="location_id" id="location_id" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Select a Location</option>
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
                @error('location_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Device Image</label>
                <input type="file" name="image" id="image" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm" required>
                @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                @error('status')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end items-center space-x-4">
                <a href="{{ route('devices.index') }}" class="text-sm text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Create</button>
            </div>
        </form>

    </div>
@endsection

</body>
</html>
