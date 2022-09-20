<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventType;
use App\Models\Venue;

class EventTypeController extends Controller
{
    public function index($slug) 
    {
        $eventType = EventType::where('slug', $slug)->firstOrFail();

        $venues = Venue::with('event_types')
        ->whereHas('event_types', function($q) use ($slug) {
           $q->where('event_types.slug', $slug);

        })
        ->latest()
        ->paginate(3);


     return view('event-type', compact('venues', 'eventType'));
   }
    

}
  
