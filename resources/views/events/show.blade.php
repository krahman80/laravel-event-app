@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
            <div class="card">
                <div class="card-body">                    
                    {{ $events->name }} <br/>  
                    {{ $events->description }}                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection