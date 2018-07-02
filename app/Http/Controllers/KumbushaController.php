<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
class KumbushaController extends Controller
{
    //
    public function get_calendar(){
        //fetch all calendar events and display as json
        $calendar_events = Event::get();
        dd($calendar_events);
    }
}
