<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventStoreRequest;
use Carbon\Carbon;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use Auth;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
        $this->middleware('partisipate',['only' => 'attend']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(5);
        return view('events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {
        // dd($request->input());
        $event = Event::create($request->input());
        $errors = $validator->errors();

        // dd($errors);

        return redirect()->route('event.show', ['event' => $event]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', ['events' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $this->authorize('update', $event);

        $event = Event::findOrFail($event->id);
        return view('events.edit',['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventStoreRequest $request, Event $event)
    {

        $this->authorize('update', $event);

        $event->update($request->input());
        return redirect()->route('event.edit', $event)->with('message', 'Event updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function attend($id) {
        // dd($id);
        $event = Event::find($id); 
        $this->authorize('attend', $event);

        $now = Carbon::now()->format('Y-m-d H:i:s');

        $event->attendedUser()->attach(Auth::user()->id, ['created_at' => $now, 'updated_at' => $now]);
        
        //redirect to view here with message
        dd('die');

    }
}
