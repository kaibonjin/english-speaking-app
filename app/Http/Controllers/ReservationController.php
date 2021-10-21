<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.form.reservation.create');
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
