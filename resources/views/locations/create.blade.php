<!DOCTYPE html>
<html>
<head>
    <title>Create Location</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Create New Location</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ $errors->first() }}</span>
            </div>
        @endif

        <form action="{{ route('locations.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="organization_id" class="block text-sm font-medium text-gray-700">Organization</label>
                <select name="organization_id" id="organization_id" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <option value="">Select an Organization</option>
                    @foreach ($organizations as $organization)
                        <option value="{{ $organization->id }}">{{ $organization->name }}</option>
                    @endforeach
                </select>
                @error('organization_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="serial_number" class="block text-sm font-medium text-gray-700">Serial Number</label>
                <input type="text" name="serial_number" id="serial_number" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                @error('serial_number')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Location Name</label>
                <input type="text" name="name" id="name" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div>
                <label for="ipv4_address" class="block text-sm font-medium text-gray-700">IPv4 Address</label>
                <input type="text" name="ipv4_address" id="ipv4_address" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="flex justify-end items-center space-x-4">
                <a href="{{ route('locations.index') }}" class="text-sm text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Create</button>
            </div>
        </form>
    </div>
@endsection
</body>
</html>
