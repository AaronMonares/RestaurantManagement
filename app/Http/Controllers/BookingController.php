<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Table;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function retrieveAll()
    {
        return Booking::all();;
    }

    public function show($id)
    {
        return Booking::find($id);
    }

    public function create(Request $request)
    {
        $booking = Booking::create([
            'customer_name' => $request->customer_name,
            'contact_number' => $request->contact_number,
            'time' => $request->time,
            'date' => $request->date,
            'number_of_guests' => $request->number_of_guests,
            'message' => $request-> message,
            'table_id' => $request -> number_of_guests
        ]);

        return $booking;
    }

    public function update($id, Request $request)
    {
        $get_booking = Booking:: find ($id); 
        
        $get_booking -> update ([
            'customer_name' => $request->customer_name,
            'contact_number' => $request->contact_number,
            'time' => $request->time,
            'date' => $request->date,
            'number_of_guests' => $request->number_of_guests,
            'message' => $request-> message,
            'table_id' => $request -> table_id
        ]);

        return $get_booking;
    }

    public function delete($id)
    {
        return Booking::destroy($id);
    }
}


// public function create($id, Request $request) for thunder client use
    // {
    //     $get_table_id = Table:: find ($id);
    //     $get_table_id -> booking() -> create([
    //         'customer_name' => $request->customer_name,
    //         'contact_number' => $request->contact_number,
    //         'time' => $request->time,
    //         'date' => $request->date,
    //         'number_of_guests' => $request->number_of_guests,
    //         'message' => $request-> message
    //     ]);

    //     $get_booking_latest_id = Booking::orderBy('id', 'desc') -> first() -> id; 
    //     return Booking:: find ($get_booking_latest_id);
    // }
