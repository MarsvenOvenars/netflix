@extends('layouts.app')

@section('content')
<h1>{{ $film->title }}</h1>

<p>{{ $film->description }}</p>

<p>Release Date: {{ $film->release_date }}</p>
<p>Runtime: {{ $film->runtime }} minutes</p>

@if ($film->director)
    <p>Directed by: {{ $film->director->name }}</p>
@endif

@if ($film->actors->count() > 0)
    <h2>Cast</h2>
    <ul>
        @foreach ($film->actors as $actor)
            <li>{{ $actor->name }}</li>
        @endforeach
    </ul>
@endif

@endsection
