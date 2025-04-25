@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-4">
        <div class="card-header">
            <h2>Music Details</h2>
        </div>
        <div class="card-body">
            <h3 class="card-title">{{ $music->name }}</h3>
            <p class="card-text">
                <strong>Artist:</strong> {{ $music->artist }}<br>
                <strong>Genre:</strong> {{ $music->genre }}<br>
                <strong>Created:</strong> {{ $music->created_at->format('M d, Y') }}
            </p>
            <div class="mt-4">
                <a href="{{ route('music.edit', $music->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('music.destroy', $music->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <a href="{{ route('music.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection