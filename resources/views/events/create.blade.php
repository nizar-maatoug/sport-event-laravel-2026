
@extends('layout')

@section('content')
    <h2>Ajouter Event</h2>

    <form action="/events" method="POST">
        @csrf

        <label>Nom:</label><br>
        <input type="text" name="name"><br><br>

        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>

        <button type="submit">Ajouter</button>
    </form>

    <a href="/events">Retour</a>
@endsection
