@extends('layouts.appads')

@section('content')

<h1>Hacker Fair help you build Stuff Faster</h1>
<p>Learn, teach, hack and make friends with developers in your city.</p>

<p>
    <a href="{{ route('events.show',['id' => 42])}}">laravel hacking and coffe</a>
</p>

@endsection

@section('ads')
    @parent
    <p>Hacker pair member get 10% off at our shop.</p>
@endsection