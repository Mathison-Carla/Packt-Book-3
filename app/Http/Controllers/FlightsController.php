<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function index()
    {
        $flights = Flights::all();
        return view('flights.index', compact('flights'));
    }

    public function edit($flight_id)
    {
        $flight = Flights::findOrFail($flight_id);
        return view('flights.edit',compact('flight'));
    }

    public function show($flight_id)
    {
        $flight = Flights::findOrFail($flight_id);
        return view('flights.show',compact('flight'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'time_of_departure'=>'required',
            'time_of_arrival'=>'required',
            'destination'=>'required',
            'airline'=>'required',
            'class'=>'required',
            'origin'=>'required',

        ]);
        Flights::create([
            'time_of_departure' => $request->time_of_departure,
            'time_of_arrival' => $request->time_of_arrival,
            'destination' => $request->destination,
            'airline' => $request->airline,
            'class' => $request->class,
            'origin' => $request->origin,
        ]);
        return redirect()->back()->with('success','Flight saved');
    }

    public function update(Request $request, $flight_id)
    {
        $request->validate([
            'time_of_departure'=>'required',
            'time_of_arrival'=>'required',
            'destination'=>'required',
            'airline'=>'required',
            'class'=>'required',
            'origin'=>'required',

        ]);
        $flight = Flights::findOrFail($flight_id);
        $flight->time_of_departure = $request->time_of_departure;
        $flight->time_of_arrival = $request->time_of_arrival;
        $flight->destination = $request->destination;
        $flight->airline = $request->airline;
        $flight->class = $request->class;
        $flight->origin = $request->origin;
        $flight->save();
        return redirect()->back()->with('success','Flight updated');
    }

    public function delete($flight_id)
    {
        $flight = Flights::findOrFail($flight_id);
        $flight->delete();
        return redirect()->back()->with('success','Flight deleted');
    }
}
