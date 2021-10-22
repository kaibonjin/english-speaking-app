<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $prevMonth = -1;
        $nextMonth = 1;
        $weeks = [];

        if (!$request->page) {
            for ($i = 0; $i <= 6; $i++) {
                array_push($weeks, \Carbon\Carbon::now()->addDays($i)->format("m/d"));
            }
            return view('pages.form.reservation.create', ['weeks' => $weeks, 'nextMonth' => $nextMonth, 'prevMonth' => $prevMonth, ]);
        } else {
            $page=$request->page;
            $nextMonth=$page+1;
            $prevMonth=$page-1;
            for ($i = 0; $i <= 6; $i++) {
                array_push($weeks, \Carbon\Carbon::now()->addDays($page * 7)->addDays($i)->format("m/d"));
            }
            return view('pages.form.reservation.create', ['weeks' => $weeks, 'nextMonth' => $nextMonth, 'prevMonth' => $prevMonth, ]);
        }
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
