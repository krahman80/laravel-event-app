<?php

namespace App\Http\Controllers;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Event::paginate(8);
        return view('events.index', ['datas' => $datas]);
    }

    public function show($id)
    {
        $datas = Event::find($id);
        return view('events.show', ['datas' => $datas]);
    }

}
