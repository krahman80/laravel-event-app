@extends('layouts.app')

@section('content')
<h1>{{ $event->name }}</h1>
<p>
    We're looking at event ID #{{ $event->id }} <br/>
    city : {{ $event->city }} <br/>
    venue : {{ $event->venue }}
</p>

@endsection