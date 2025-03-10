<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /*

    LEVEL 1 Easy

    */

    public function getBookings()
    {
        $easy = DB::select("SELECT
                bookings.*,
                customers.name AS customer_name,
                services.service_name,
                staff.fname AS staff_name
            FROM bookings
            INNER JOIN customers ON customers.id = bookings.customer_id
            INNER JOIN staff ON staff.id = bookings.staff_id
            INNER JOIN booking_services ON booking_services.booking_id = bookings.id
            INNER JOIN services ON services.id = booking_services.service_id
        ");

        return response()->json(['success' => true, 'easy' => $easy], 200);
    }


    /*

    LEVEL 2

//     */
//     public function getBookingsData()
//     {
//         $moderate = DB:: table('beauty_salon_bookings AS b')
//         ->select('b.*', 'c.name AS customer_name', 's.service_name', 'st.lname AS staff_name')
//         ->join('beauty_salon_customers AS c', 'c.customer_id', '=', 'b.customer_id')
//         ->join('beauty_salon_booking_services AS bs', 'bs.booking_id', '=', 'b.booking_id')
//         ->join('beauty_salon_services AS s', 's.service_name', '=', 'bs.service_id')
//         ->join('beauty_salon_staff AS st', 'st.staff_id', '=', 'b.staff_id')
//         ->get();

//         return response()->json(['success' => true, 'moderate']);

//     }

//     /*

//     LEVEL 3

//     */

//     public function getBookingsChalleging()
//     {
//         $challenging = Bookings::with(['customer', 'services', 'staff'])->get();

//         return response()->json(['success' => true, 'challenging' => $challenging], 200);
//     }

//     /*

//     LEVEL 4

//     */

//     public function getBookingsDifficult()

//     {
//         $difficult = Bookings::with(['customer' => function ($q) {
//             $q->select('*');
//         },
//         'services' => function ($q) {
//             $q->select('*');
//         },
//         'staff' => function ($q) {
//             $q->select('*');
//         }

//         ])->get();

//         return response()->json(['success' => true, 'difficult' => $difficult], 200);
//     }


}
