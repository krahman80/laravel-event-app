<?php

namespace App\Http\Controllers;

use App\Event;

class WelcomeController extends Controller
{
    public function index()
    {
        $datas = Event::latest()->take(9)->get();
        return view('welcome.index', ['datas' => $datas]);
    }
}
