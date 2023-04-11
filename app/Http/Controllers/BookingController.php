<?php
namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
    }

    public function edit($booking_id)
    {
        $booking = Booking::findOrFail($booking_id);
        return view('booking.edit',compact('booking'));
    }

    public function show($booking_id)
    {
        $booking = Booking::findOrFail($booking_id);
        return view('booking.show',compact('booking'));
    }

    public function store(Request $request)
    {
        $request->validate(['order_id'=>'required']);
        Booking::create(['order_id' => $request->order_id]);
        return redirect()->back()->with('success','Booking saved');
    }

    public function update(Request $request, $booking_id)
    {
        $request->validate(['order_id'=>'required']);
        $booking = Booking::findOrFail($booking_id);
        $booking->order_id = $request->order_id;
        $booking->save();
        return redirect()->back()->with('success','Booking updated');
    }

    public function delete($booking_id)
    {
        $booking = Booking::findOrFail($booking_id);
        $booking->delete();
        return redirect()->back()->with('success','Booking deleted');
    }
}


