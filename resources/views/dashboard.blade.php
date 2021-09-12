@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   None

                    
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
