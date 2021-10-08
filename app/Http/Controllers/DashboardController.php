<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Event;
Use App\User;
Use App\Http\Requests\EventSearchRequest;

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

    public function myEventSearch(EventSearchRequest $request){
        dd(request);
    }

    public function attendedEvent() {
        // dd($msg);
        return view('dashboards.attended_event',['users' => User::find(Auth::user()->id)]);
    }

    public function showRequest() {
        $query = 'SELECT c.name AS event_name, a.is_confirmed, b.name AS requestor_name FROM event_user as a inner join users as b on a.user_id = b.id INNER JOIN events AS c ON a.event_id = c.id WHERE a.event_id = 7';
        dd($query);
    }
}
