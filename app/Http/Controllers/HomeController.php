<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class HomeController extends Controller
{
    
    public function index() {
        $events = Event::paginate(5);
        return view('index',['events' => $events]);
    }
}
