@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $events->name }}</h2>            
                    
                    <p>
                        We're looking at event ID #{{ $events->id }} <br/>
                        Event Name : {{ $events->name }} <br/>
                        Event Desc : {{ $events->description }}

                    </p>
                    <a href="{{ URL::previous() }}">Go Back</a>           
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Welcome, {{ Auth::user()->name }}</div>
                @include('partials._admin')
                
            </div>
        </div>
    </div>
</div>
@endsection