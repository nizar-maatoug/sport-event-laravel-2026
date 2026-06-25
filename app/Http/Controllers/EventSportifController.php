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
    public function create()
    {
        return view('events.create');
    }

    public function show($id)
    {
        $event = EventSportif::findOrFail($id);

        return view('events.show', compact('event'));
    }



    public function store(Request $request)
    {
        EventSportif::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/events')->with('success', 'Event ajouté');
    }

    public function destroy($id)
    {
        $event = EventSportif::findOrFail($id);
        $event->delete();

        return redirect('/events')->with('success', 'Event supprimé');
    }
}
