<?php

namespace App\Http\Controllers;

use App\Models\flights;
use App\Models\tickets;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function index()
    {
        $flights = flights::all();
        $tickets = tickets::all();
        return view("flightDetails", [
            "flights" => $flights,
            "tickets" => $tickets
        ]);
    }
        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $events = Events::query()->where('id', $id)->firstOrFail();
        // return view("events/detailEvents", [
        //     'event' => $events,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
