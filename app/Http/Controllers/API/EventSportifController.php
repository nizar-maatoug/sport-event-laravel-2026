<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventSportifRequest;
use App\Http\Requests\UpdateEventSportifRequest;
use App\Http\Resources\EventSportifResource;
use App\Models\EventSportif;
use Illuminate\Http\Request;

class EventSportifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EventSportifResource::collection(EventSportif::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventSportifRequest $request)
    {

        $event = EventSportif::create($request->validated());

         return response()->json([
            'message' => 'Event created successfully',
            'event' => new EventSportifResource($event)
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(EventSportif $eventSportif)
    {
        if (!$eventSportif) {
            return response()->json([
                'message' => 'Event not found'
            ], 404);
        }
        return response()->json([
            'event' => new EventSportifResource($eventSportif)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventSportifRequest $request, EventSportif $eventSportif)
    {
        $eventSportif->update($request->validated());
        return response()->json([
            'message' => 'Event updated successfully',
            'event' => new EventSportifResource($eventSportif)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventSportif $eventSportif)
    {
        $eventSportif->delete();

        return response()->json([
            'message' => 'Deleted successfully'
        ]);

    }
}
