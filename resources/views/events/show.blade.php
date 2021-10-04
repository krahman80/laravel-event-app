@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <h4 class="my-3">Manage Event</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $events->name }}</h5>            
                    
                    <p>
                        We're looking at event ID #{{ $events->id }} <br/>
                        Event Name : {{ $events->name }} <br/>
                        Event Desc : {{ $events->description }}

                    </p>
                    <a href="{{ URL::previous() }}">Back</a>           
                </div>
            </div>
        </div>
        <div class="col">       
                @include('partials._member')
        </div>
    </div>
</div>
@endsection