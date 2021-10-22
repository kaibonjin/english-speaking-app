<?php

namespace App\Http\Controllers;

use App\Facades\CalendarFacade\CalendarFacade;
use App\Models\Reservation;
use App\Services\Calendar\CalendarService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function __construct(CalendarService $calendarService)
    {
        $this->calendarService = $calendarService;
    }

    public function index(Request $request)
    {
        return view ('pages.form.reservation.create', [
            'week' => CalendarFacade::getWeek($request),
            'nextWeek' => CalendarFacade::getWeekButton($request)['nextWeek'],
            'prevWeek' => CalendarFacade::getWeekButton($request)['prevWeek']
        ]);

        // $prevWeek = -1;
        // $nextWeek = 1;
        // $weeks = [];

        // if (!$request->page) {
        //     for ($i = 0; $i <= 6; $i++) {
        //         array_push($weeks, Carbon::now()->addDays($i)->format("m/d"));
        //     }
        //     return view('pages.form.reservation.create', ['weeks' => $weeks, 'nextWeek' => $nextWeek, 'prevWeek' => $prevWeek, ]);
        // } else {
        //     $page=$request->page;
        //     $nextWeek=$page+1;
        //     $prevWeek=$page-1;
        //     for ($i = 0; $i <= 6; $i++) {
        //         array_push($weeks, Carbon::now()->addDays($page * 7)->addDays($i)->format("m/d"));
        //     }
        //     return view('pages.form.reservation.create', ['weeks' => $weeks, 'nextWeek' => $nextWeek, 'prevWeek' => $prevWeek, ]);
        // }
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
