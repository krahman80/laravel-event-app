<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::select([‘id’, ‘first_name’, ‘last_name’])->get();
        $datas = Event::paginate(5);
        return view('events.index', ['datas' => $datas]);
    }

    public function show($id)
    {
        $datas = Event::find($id);
        return view('events.show', ['datas' => $datas]);
    }

    public function search(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'keyword' => 'required|max:255' 
        ]);
        
        $searchTerm = $request->input('keyword');
        
        $datas = Event::where ( 'name', 'LIKE', '%' . $searchTerm . '%' )->paginate(5);
        $datas->appends(['keyword' => $searchTerm]);
        
        return view('events.index', ['datas' => $datas]);
    }

}
