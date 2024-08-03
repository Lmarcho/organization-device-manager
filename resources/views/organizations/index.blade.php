<!DOCTYPE html>
<html>
<head>
    <title>Organizations</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<h1>Organizations List</h1>

<a href="{{ route('organizations.create') }}">Create New Organization</a>

<ul>
    @foreach ($organizations as $organization)
        <li>
            <a href="{{ route('organizations.show', $organization->id) }}">
                {{ $organization->name }} ({{ $organization->code }})
            </a>
            <a href="{{ route('organizations.edit', $organization->id) }}">Edit</a>
            <form action="{{ route('organizations.destroy', $organization->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
</body>
</html>
