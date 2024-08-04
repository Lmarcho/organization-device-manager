<!DOCTYPE html>
<html>
<head>
    <title>Create Organization</title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Create New Organization</h2>

        <form action="{{ route('organizations.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="code" class="block text-sm font-medium text-gray-700">Organization Code</label>
                <input type="text" name="code" id="code" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                @error('code')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Organization Name</label>
                <input type="text" name="name" id="name" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="flex justify-end items-center space-x-4">
                <a href="{{ route('organizations.index') }}" class="text-sm text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Create</button>
            </div>
        </form>
    </div>
@endsection
</body>
</html>
