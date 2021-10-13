<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Event;
Use App\User;
Use App\Http\Requests\EventSearchRequest;
use DB;
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
        $event = Event::find($id);
        $users = Event::find($id)->attendedUser()->orderBy('event_user.is_confirmed', 'asc')->paginate(5);
        // dd($users);
        return view('dashboards.attend_request',['users' => $users, 'event' => $event]);
    }

    public function approveEvent($event_id, $approve_id){
        $query = DB::table('event_user')
            ->where('id', $approve_id)
            ->update(['is_confirmed' => 1]);
        if($query){
            return redirect()->route('dashboard.show-request', ['id' => $event_id])->with('success','update success');
        }
        return redirect()->route('dashboard.show-request', ['id' => $event_id])->with(['error', 'update failed']);

    }
}
