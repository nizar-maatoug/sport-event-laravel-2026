<!-- étendre le layout de base pour les pages d'événements sportifs -->
@extends('layout')
<!-- redéfinition de la section content pour afficher la liste des événements sportifs -->
@section('content')


    <a href="{{ route('events.create') }}" class="btn btn-primary">Ajouter Event</a>



    <ul>
        <!-- parcourir la liste des événements sportifs et les afficher -->
        <!-- blade simplifie la syntaxe PHP pour les boucles et les conditions -->
        <!-- je ne mélange pas php et html, je laisse blade faire le travail de rendu -->
        @foreach($events as $event)
            <li>
                <a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a>

                <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

            </li>
        @endforeach
    </ul>
@endsection
