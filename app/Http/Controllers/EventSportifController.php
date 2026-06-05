<?php

namespace App\Http\Controllers;

use App\Models\EventSportif;
use Illuminate\Http\Request;


class EventSportifController extends Controller
{


    // retourne une liste de tous les événements sportifs
    public function index()
    {
        $events = EventSportif::all();
        $data= [
            // méta-informations pour la page
            'title' => 'Liste des événements sportifs',
            'description' => 'Découvrez les événements sportifs à venir',
            'events' => $events
        ];
        // Affiche la vue avec les événements
        return view('events.index', $data);
    }

    public function show($id)
    {
        $events = $this->getEvents();

        $event = collect($events)->firstWhere('id', $id);

        return view('events.show', compact('event'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        // simulation seulement
        return redirect('/events')->with('success', 'Event ajouté (non persistant)');
    }

    public function destroy($id)
    {
        // simulation seulement
        return redirect('/events')->with('success', 'Event supprimé (non persistant)');
    }
}
