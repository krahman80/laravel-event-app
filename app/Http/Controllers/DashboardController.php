<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function myEvent(){
        dd('my event');
    }

    public function attendedEvent() {
        dd('attended event');
    }
}
