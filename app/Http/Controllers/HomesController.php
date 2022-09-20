<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\EventType;
use App\Models\Location;
use App\Models\Venue;

class HomesController extends Controller
{
   
    public function index() 
    {
        // $featuredVenues =  [
        //     [ 
        //   'hero_image' => 'images/hero_bg_1.jpg',
        //   'name' => '853 Sabo Lucerne Blvd',
        //   'address' => 'Los Angeles, CA 90005',
        //   'price' => '$2,250,500',
        //   'link' => '#'

        //     ],

        //     [ 
        //         'hero_image' => 'images/hero_bg_3.jpg',
        //         'name' => '625 S. Berendo St',
        //         'address' => '607 Los Angeles, CA 90005',
        //         'price' => '$2,200,000',
        //         'link' => '#'
      
        //           ],
        // ];

        
     
        $featuredVenues = Venue::where('is_featured', 1)->get();
        $eventTypes = EventType::all();
        $locations  = Location::all();
        $newestVenue = Venue::with('event_types')->latest()->take(3)->get();
       
        return view('index', compact('featuredVenues', 'eventTypes', 'locations', 'newestVenue'));
    }
}
