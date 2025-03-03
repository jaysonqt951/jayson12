<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /*

    LEVEL 1 Easy

    */

    public function getBookings(){
        
        $easy = DB::select("SELECT b.*, c.name AS customer_name, s.service_name, st.lname AS staff_name FROM beauty_salon_bookings AS b 
        INNER JOIN beauty_salon_customers AS c ON c.customer_id = b.customer_id
        INNER JOIN beauty_salon_booking_serive AS bs ON bs.booking_id = b.booking_id
        INNER JOIN beauty_salon_services AS s ON s.service_id = bs.service_id
        INNER JOIN beauty_salon_staff AS st ON st.staff_id = b.staff_id
        ");

        return response()->json(['success' => true, 'easy' => $easy], 200);
    }

    /*

    LEVEL 2 

    */
    public function getBookingsData()
    {
        $moderate = DB:: table('beauty_salon_bookings AS b')
        ->select('b.*', 'c.name AS customer_name', 's.service_name', 'st.lname AS staff_name')
        ->join('beauty_salon_customers AS c', 'c.customer_id', '=', 'b.customer_id')
        ->join('beauty_salon_booking_services AS bs', 'bs.booking_id', '=', 'b.booking_id')
        ->join('beauty_salon_services AS s', 's.service_name', '=', 'bs.service_id')
        ->join('beauty_salon_staff AS st', 'st.staff_id', '=', 'b.staff_id')
        ->get();

        return response()->json(['success' => true, 'moderate']);

    }

    
}
