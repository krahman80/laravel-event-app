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
            <div class="card p-4">
                <h5 class="card-title">Add Event</h5>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="nav flex-column">
                            @foreach ($errors->all() as $error)
                                <li class="nav-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                
                {!! Form::open(['route'=> 'event.store']) !!}
                <div class="form-group row">
                    {!! Form::label('name', 'Event Name', ['class'=> 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name', null, ['class'=> 'form-control form-control-sm' . ($errors->has('name') ? ' is-invalid' : null)]) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('description', 'Description', ['class'=> 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                     {!! Form::textarea('description', null, ['class'=> 'form-control form-control-sm' . ($errors->has('description') ? ' is-invalid' : null), 'rows' => '3']) !!}
                     <small class="text-danger">{{ $errors->first('description') }}</small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class='col-sm-2 col-form-label'>
                    </div>
                    <div class="col-sm-10">
                    {!! Form::submit('add event', ['class'=>'btn btn-sm btn-primary w-100']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col">
            @include('partials._member')
        </div>
    </div>
</div>
@endsection