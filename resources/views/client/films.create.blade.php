@extends('layouts.app')

@section('content')
<h1>Create New Film</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('films.store') }}">
    @csrf

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
        <label for="release_date">Release Date:</label>
        <input type="date" name="release_date" id="release_date" class="form-control" value="{{ old('release_date') }}">
    </div>

    <div class="form-group">
        <label for="runtime">Runtime (minutes):</label>
        <input type="number" name="runtime" id="runtime" class="form-control" value="{{ old('runtime') }}">
    </div>

    <div class="form-group">
        <label for="director_id">Director:</label>
        <select name="director_id" id="director_id" class="form-control">
            <option value="">Select Director</option>
            </select>
    </div>

    <button type="submit" class="btn btn-primary">Create Film</button>
</form>

@endsection
