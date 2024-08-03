<!DOCTYPE html>
<html>
<head>
    <title>Organizations</title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Organizations List</h2>
            <a href="{{ route('organizations.create') }}" class="btn btn-primary mb-3">Create New Organization</a>
            <ul class="list-group list-group-flush">
                @foreach ($organizations as $organization)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-weight-bold">{{ $organization->name }}</span>
                            <span class="text-muted">({{ $organization->code }})</span>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="{{ route('organizations.edit', $organization->id) }}" class="btn btn-outline-secondary btn-sm">Edit</a>
                            <form action="{{ route('organizations.destroy', $organization->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
</body>
</html>
