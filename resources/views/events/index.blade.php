@extends('layouts.app')

@section('content')

<h1>Event</h1>
<ul>
    @forelse ($events as $event)
     <li>{{$event->name}}</li>   
    @empty
        <li>No events found!</li>
    @endforelse
</ul>
{{-- {!! $events->links() !!} --}}
{!! $events->links('vendor.pagination.simple-bootstrap-4') !!}
@endsection