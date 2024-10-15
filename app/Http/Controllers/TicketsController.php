<?php

namespace App\Http\Controllers;

use App\Models\flights;
use App\Models\tickets;
use Illuminate\Http\Request;

class ticketsController extends Controller
{
    public function index(){
        $flights = flights::all();
        $tickets = tickets::all();
        return view('flightDetails', [
            'flights' => $flights,
            'tickets' => $tickets,
        ]);
    }

    public function create(){
        $flights = flights::all();
        return view('booking', [
            'flights' => $flights,
        ]);
    }

    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'flight_id' => 'required',
        ]);

        tickets::create($data);

        return redirect()->route('tickets.index')->with('success', 'tickets has been created');
    }

    public function boarding(tickets $tickets){
        if($tickets->is_boarding){
            return redirect()->back()->with('error', 'tickets has been Board');
        }

        $tickets->update([
            'is_boarding' => 1,
            'boarding_time' => now(),
        ]);

        return redirect()->back()->with('success', 'tickets has been Board');
    }

    public function destroy(tickets $tickets){
        if($tickets->is_boarding){
            return redirect()->back()->with('error', 'tickets has been boarding you cant delete it');
        }
        $tickets->delete();
        return redirect()->back()->with('success', 'tickets has been deleted');
    }
}
