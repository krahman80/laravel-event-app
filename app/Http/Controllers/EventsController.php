<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articleName = 'apa aja dah';
        dd($articleName);
        // $events = Event::all();
        // $datas = ['Article 1', 'Article 2', 'Article 3'];
        // $events = Event::paginate(20);
        // return view('events.index')->with('articleName', $articleName);
        // return view('events.index', ['article' => 'Passing Data to View']);
        // return view('events.index', compact('data'));
        // return view('events.index', ['datas' => $datas]);
    }

}
