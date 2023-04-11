<?php

namespace App\Http\Controllers;

use App\Models\Seats;
use Illuminate\Http\Request;

class SeatsController extends Controller
{
    public function index()
    {
        $seats = Seats::all();
        return view('seat.index', compact('seats'));
    }

    public function edit($seat_id)
    {
        $seat = Seats::findOrFail($seat_id);
        return view('seat.edit',compact('seat'));
    }

    public function show($seat_id)
    {
        $seat = Seats::findOrFail($seat_id);
        return view('seat.show',compact('seat'));
    }

    public function store(Request $request)
    {
        $request->validate(['seat_number'=>'required']);
        Seats::create(['seat_number' => $request->seat_number]);
        return redirect()->back()->with('success','Seat saved');
    }

    public function update(Request $request, $seat_id)
    {
        $request->validate(['seat_number'=>'required']);
        $seat = Seats::findOrFail($seat_id);
        $seat->seat_number = $request->seat_number;
        $seat->save();
        return redirect()->back()->with('success','Seat updated');
    }

    public function delete($seat_id)
    {
        $seat = Seats::findOrFail($seat_id);
        $seat->delete();
        return redirect()->back()->with('success','Seat deleted');
    }
}
