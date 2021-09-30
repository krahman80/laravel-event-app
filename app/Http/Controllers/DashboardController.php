<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Event;

class DashboardController extends Controller
{
    public function myEvent(){
        // $user_id = Auth::user()->id;
        // Event::where('user_id', Auth::user()->id)->get();
        
        // dd(Event::where('user_id', Auth::user()->id)
        //     ->orderBy('created_at', 'desc')
        //     ->get());

        // dd('my event '.$user_id);
        
        return view('dashboards.my_event',['events' => 
        Event::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get()
        ]);
        
    }

    public function attendedEvent() {
        $user_id = Auth::user()->id;
        dd('attended event '.$user_id);
    }
}
