@extends('layouts.app')

@section('content')
<h1>{{ $datas->name }}</h1>
<p>
    We're looking at event ID #{{ $datas->id }} <br/>
    city : {{ $datas->city }} <br/>
    venue : {{ $datas->venue }} <br/>
    {!! link_to_route('home.partisipate','[ partisipate ]',['data' => $datas->id], array('class' => 'card-link')) !!}

</p>
<a href="{{ URL::previous() }}">Go Back</a>
@endsection