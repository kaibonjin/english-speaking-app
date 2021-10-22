<?php

namespace App\Services\Calendar;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarService
{
    public function getWeek(Request $request)
    {
        $week = [];

        if (!$request->page) {
            for ($i = 0; $i <= 6; $i++) {
                array_push($week, Carbon::now()->addDays($i)->format("m/d"));
            }
        } else {
            $page=$request->page;
            for ($i = 0; $i <= 6; $i++) {
                array_push($week, Carbon::now()->addDays($page * 7)->addDays($i)->format("m/d"));
            }
        }
        return $week;
    }

    public function getWeekButton(Request $request)
    {
        $prevWeek = -1;
        $nextWeek = 1;
        if ($request->page != null) {
            $page=$request->page;
            $nextWeek=$page+1;
            $prevWeek=$page-1;
        }
        $weekBtn = [
            'prevWeek' => $prevWeek,
            'nextWeek' => $nextWeek,
        ];
        return $weekBtn;
    }
}
