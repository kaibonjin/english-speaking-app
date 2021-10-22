<?php

namespace App\Facades\CalendarFacade;

use App\Services\Calendar\CalendarService;
use Illuminate\Support\Facades\Facade;

class CalendarFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CalendarService::class;
    }
}
