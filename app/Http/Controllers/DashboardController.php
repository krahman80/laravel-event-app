<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Event;
Use App\User;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
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
        // dd($msg);
        return view('dashboards.attended_event',['users' => User::find(Auth::user()->id)]);
    }
}
