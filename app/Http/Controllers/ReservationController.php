<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $weeks = [];
        

        for ($i = 0; $i <= 6; $i++) {
            array_push($weeks,\Carbon\Carbon::now()->addDays($i)->format("m/d"));
        }


        

        
        return view('pages.form.reservation.create',
        [
            'weeks' => $weeks,
        ]
        );
    }

    public function create(Request $request)
    {
        $reservation = new Reservation();
        $reservation->fill(
            [
                'user_id' => Auth::id(),
                'reservation_date' => $request->reservation_date,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
            ]
        )->save();

    }
}
