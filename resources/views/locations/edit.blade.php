<!DOCTYPE html>
<html>
<head>
    <title>Edit Location</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Location</h2>

        <form action="{{ route('locations.update', [$location->id]) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="organization_id" class="block text-sm font-medium text-gray-700">Organization</label>
                <select name="organization_id" id="organization_id" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    @foreach ($organizations as $org)
                        <option value="{{ $org->id }}" {{ $location->organization_id == $org->id ? 'selected' : '' }}>
                            {{ $org->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="serial_number" class="block text-sm font-medium text-gray-700">Serial Number</label>
                <input type="text" name="serial_number" id="serial_number" value="{{ $location->serial_number }}" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                @error('serial_number')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Location Name</label>
                <input type="text" name="name" id="name" value="{{ $location->name }}" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div>
                <label for="ipv4_address" class="block text-sm font-medium text-gray-700">IPv4 Address</label>
                <input type="text" name="ipv4_address" id="ipv4_address" value="{{ $location->ipv4_address }}" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="flex justify-end items-center space-x-4">
                <a href="{{ route('locations.index') }}" class="text-sm text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Update</button>
            </div>
        </form>
    </div>
@endsection

</body>
</html>
