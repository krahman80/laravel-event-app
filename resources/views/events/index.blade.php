@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
            <div class="card">
                @foreach($events as $event)                    
                    <a href="/tasks/{{ $event->id }}">
                        {{ $event->description }}
                    </a> 
                    <p></p>
                @endforeach                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection