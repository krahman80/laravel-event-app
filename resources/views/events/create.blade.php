@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
            <div class="card p-4">
                <h5 class="card-title">Add Event</h5>
                {!! Form::open(['route'=> 'event.store']) !!}
                <div class="form-group row">
                    {!! Form::label('name', 'Event Name', ['class'=> 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name', null, ['class'=> 'form-control form-control-sm']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('description', 'Description', ['class'=> 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                     {!! Form::textarea('description', null, ['class'=> 'form-control form-control-sm', 'rows' => '3']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class='col-sm-2 col-form-label'>
                    </div>
                    <div class="col-sm-10">
                    {!! Form::submit('add event', ['class'=>'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
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