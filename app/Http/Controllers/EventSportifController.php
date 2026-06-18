<?php

namespace App\Http\Controllers;

use App\Models\EventSportif;
use Illuminate\Http\Request;


class EventSportifController extends Controller
{
    private function getEvents()
    {
        // Simuler une source de données (base de données, API, etc.)
        return [
            new EventSportif(1, "Tournoi Karaté", "Compétition nationale"),
            new EventSportif(2, "Championnat Boxe", "Finale régionale"),
            new EventSportif(3, "Open Judo", "Tournoi international"),
        ];
    }

    // retourne une liste de tous les événements sportifs
    public function index()
    {
        $events = $this->getEvents();
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
        $events = $this->getEvents();

        $event = collect($events)->firstWhere('id', $id);

        return view('events.show', compact('event'));
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
