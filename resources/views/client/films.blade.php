@extends('layouts.app')

@section('content')
<h1>Films</h1>

<ul>
    @foreach ($films as $film)
        <li><a href="{{ route('films.show', $film->id) }}">{{ $film->title }}</a></li>
    @endforeach
</ul>
