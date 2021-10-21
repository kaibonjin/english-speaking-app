<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservationPage(Request $request)
    {
        return view('pages.form.reservation.create');
    }
}
