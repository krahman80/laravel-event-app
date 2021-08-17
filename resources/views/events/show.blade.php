@extends('layouts.default')

@section('content')
<h1>{{ $datas->name }}</h1>
<p>
    We're looking at event ID #{{ $datas->id }} <br/>
    city : {{ $datas->city }} <br/>
    venue : {{ $datas->venue }}
</p>

@endsection