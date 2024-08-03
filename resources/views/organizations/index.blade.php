<!DOCTYPE html>
<html>
<head>
    <title>Organizations</title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Organizations List</h2>
        <a href="{{ route('organizations.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Create New Organization</a>
        <ul class="space-y-4">
            @foreach ($organizations as $organization)
                <li class="flex justify-between items-center bg-gray-100 p-4 rounded-lg">
                    <div>
                        <span class="font-semibold">{{ $organization->name }}</span>
                        <span class="text-gray-500">({{ $organization->code }})</span>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('organizations.edit', $organization->id) }}" class="text-blue-500 hover:underline">Edit</a>
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
