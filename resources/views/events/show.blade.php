
@extends('layout')

@section('content')
    <h2>{{ $event->name }}</h2>
    <p>{{ $event->description }}</p>

    <a href="/events">Retour</a>
@endsection
