<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{
    public function index()
    {
        return view('events.index');
    }

    public function show($id)
    {
        // dd($id);
        return view('events.show')->with('id', $id)->with('name', 'laravel hacking and coffe');
    }

    public function category($category, $subcategory = 'all')
    {
        dd("category: {$category} subcategory: {$subcategory}");
    }

}
