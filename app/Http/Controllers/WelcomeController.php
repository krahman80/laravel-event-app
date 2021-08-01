<?php

namespace App\Http\Controllers;

use App\Event;

class WelcomeController extends Controller
{
    public function index()
    {
        // $datas = Event::all();
        $datas = Event::paginate(20);
        // $datas = DB::table('event')->get();
        return view('welcome.index', ['datas' => $datas]);
    }
}
