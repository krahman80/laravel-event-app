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
        return view('dashboards.my_event',['events' => 
        Event::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(5)
        ]);        
    }

    public function myEventSearch(EventSearchRequest $request){
        $request->validated();
        $events = Event::where('name', 'LIKE', '%'.$request->input('keyword').'%')->orderBy('created_at','desc')->paginate(5);
        $events->appends(['keyword' => $request->input('keyword')]);
        return view('dashboards.my_event',['events' => $events]);
    }

    public function attendedEvent() {
        $events = User::find(Auth::user()->id)->attendedEvent()->orderBy('created_at','desc')->paginate(5);
        return view('dashboards.attended_event',['events' => $events]);        
    }

    public function attendedEventSearch(EventSearchRequest $request){
        $request->validated();
        $events = User::find(Auth::user()->id)->attendedEvent()->where('events.name', 'LIKE', '%'. $request->input('keyword') .'%')->orderBy('created_at','desc')->paginate(5);
        $events->appends(['keyword' => $request->input('keyword')]);
        return view('dashboards.attended_event',['events' => $events]);
    }

    public function showRequest($id) {
        // SELECT a.name AS event_name, b.id, b.is_confirmed, c.email FROM events AS a 
        // INNER JOIN event_user AS b ON a.id = b.event_id INNER JOIN users AS c ON b.user_id = c.id 
        // WHERE a.user_id = 10
        // $query = 'SELECT c.name AS event_name, a.is_confirmed, b.name AS requestor_name 
        // FROM event_user as a inner join users as b on a.user_id = b.id 
        // INNER JOIN events AS c ON a.event_id = c.id WHERE a.event_id = 7';
        $event = Event::find($id);
        $users = Event::find($id)->attendedUser()->orderBy('event_user.is_confirmed', 'asc')->paginate(5);
        // dd($users);
        return view('dashboards.attend_request',['users' => $users, 'event' => $event->name]);
    }

    public function approveEvent($id){
        dd($id);
    }
}
